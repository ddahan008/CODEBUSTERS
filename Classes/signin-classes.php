<!-- Page Name: signin-classes.php -->
<!-- Description: This page contains a class does email and password verification and logs in the user. -->

<?php

class Signin extends Dbh {
    //This class is the child of the Dbh class. It uses it's parent to connect to the database. Once connected, this class matches the user given password with the password present in the database. If they match, the user is taken to their specific pages. If it does not match the user stays at the login screen.

    private $email;
    private $password;

    public function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
    }

    public function signinUser() {
        if ($this->emptyInput() == false) {
            header("location: ../index.php?msg=emptyinput");
            exit();
        }
        else if ($this->validateEmail() == false) {
            header("location: ../index.php?msg=invalidemail");
            exit();
        }

        $this->getUser($this->email, $this->password);
    }

    private function validateEmail() {
        $result = false;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }
        else {
            $result = true;
        }

        return $result;
    }

    private function emptyInput() {
        $result = false;
        if (empty($this->email) || empty($this->password)) {
            $result = false;
        }
        else {
            $result = true;
        }

        return $result;
    }

    private function getUser($email, $password) {
        $stmt = $this->connect()->prepare('SELECT pwd FROM users WHERE email = ?');

        if (!$stmt->execute(array($email))) {
            $stmt = null;
            header("location: ../index.php?msg=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../index.php?msg=usernotfound");
            exit();
        }

        $hashedPassword = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $verifyPassword = password_verify($password, $hashedPassword[0]["pwd"]);

        if ($verifyPassword == true) {
            $nextstmt = $this->connect()->prepare('SELECT * FROM users WHERE email = ? AND pwd = ?');

            if (!$nextstmt->execute(array($email, $hashedPassword[0]["pwd"]))) {
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
            $_SESSION["email"] = $curruser[0]["email"];
            $_SESSION["password"] = $password;
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