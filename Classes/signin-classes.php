<!-- Page Name: signin-classes.php -->
<!-- Description: This page contains a class does username and password verification and logs in the user. -->

<?php

class Signin extends Dbh {
    //This class is the child of the Dbh class. It uses it's parent to connect to the database. Once connected, this class matches the user given password with the password present in the database. If they match, the user is taken to their specific pages. If it does not match the user stays at the login screen.

    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function signinUser() {
        if ($this->emptyInput() == false) {
            header("location: ../index.php?msg=emptyinput");
            exit();
        }

        $this->getUser($this->username, $this->password);
    }

    private function emptyInput() {
        $result = false;
        if (empty($this->username) || empty($this->password)) {
            $result = false;
        }
        else {
            $result = true;
        }

        return $result;
    }

    private function getUser($username, $password) {
        $stmt = $this->connect()->prepare('SELECT pwd FROM users WHERE username = ?');

        if (!$stmt->execute(array($username))) {
            $stmt = null;
            header("location: ../index.php?msg=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../index.php?msg=usernotfound");
            exit();
        }

        $pwd = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($password == $pwd[0]["pwd"]) {
            $nextstmt = $this->connect()->prepare('SELECT * FROM users WHERE username = ? AND pwd = ?');

            if (!$nextstmt->execute(array($username, $password))) {
                $nextstmt = null;
                header("location: ../index.php?msg=stmtfailed");
                exit();
            }
    
            if ($nextstmt->rowCount() == 0) {
                $nextstmt = null;
                header("location: ../index.php?msg=usernotfound");
                exit();
            }

            $curruser = $nextstmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["username"] = $curruser[0]["username"];
            $_SESSION["password"] = $curruser[0]["pwd"];
            $_SESSION["active-timestamp"] = time();
            $_SESSION["timeout"] = 1800; //This determines the time (seconds) any user can stay logged in without activity

            header("location: ../profile.php");
        }
        else {
            header("location: ../index.php?msg=wrongpassword");
            exit();
        }
    }
}

?>