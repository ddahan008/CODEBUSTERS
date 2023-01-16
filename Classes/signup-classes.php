<!-- Page Name: signup-classes.php -->
<!-- Description: This page contains a class which creates a new user and puts it into the database (if the username does not already exist) -->

<?php

class Signup extends Dbh {
    //This class is the child of the Dbh class. It uses it's parent to connect to the database. Once connected, this class creates a new user in the database.
    
    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function signupUser() {
        if ($this->emptyInput() == false) {
            header("location: ../signup.php?msg=emptyinput");
            exit();
        }

        if ($this->usernameTaken() == true) {
            header("location: ../signup.php?msg=useralreadyexist");
            exit();
        }

        $this->setUser($this->username, $this->password);
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

    private function usernameTaken() {
        $result = false;
        if ($this->userExistance($this->username)) {
            $result = true;
        }
        else {
            $result = false;
        }

        return $result;
    }

    private function userExistance($username) {
        $stmt = $this->connect()->prepare('SELECT * FROM users WHERE username = ?;');

        if (!$stmt->execute(array($username))) {
            $stmt = null;
            header("location: ../signup.php?msg=stmtfailed");
            exit();
        }

        $userExist = false;
        if ($stmt->rowCount() > 0) {
            $userExist = true;
        }

        return $userExist;
    }

    private function setUser($username, $password) {
        $stmt = $this->connect()->prepare('INSERT INTO users (username, pwd) VALUES (?, ?);');

        if (!$stmt->execute(array($username, $password))) {
            $stmt = null;
            header("location: ../signup.php?msg=stmtfailed");
            exit();
        }

        $stmt = null;
    }
}

?>