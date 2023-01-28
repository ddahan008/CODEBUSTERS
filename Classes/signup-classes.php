<!-- Page Name: signup-classes.php -->
<!-- Description: This page contains a class which creates a new user and puts it into the database (if the email does not already exist) -->

<?php

class Signup extends Dbh {
    //This class is the child of the Dbh class. It uses it's parent to connect to the database. Once connected, this class creates a new user in the database.
    
    private $email;
    private $password;

    public function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
    }

    public function signupUser() {
        if ($this->emptyInput() == false) {
            header("location: ../signup.php?msg=emptyinput");
            
        }
        else if ($this->userExistance($this->email) == true) {
            header("location: ../signup.php?msg=useralreadyexist");
            
        }
        else if ($this->validateEmail() == false) {
            header("location: ../index.php?msg=invalidemail");
            
        }
        else {
            $this->setUser($this->email, $this->password);
        }
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

    private function userExistance($email) {
        $stmt = $this->connect()->prepare('SELECT * FROM users WHERE email = ?;');

        if (!$stmt->execute(array($email))) {
            $stmt = null;
            header("location: ../signup.php?msg=stmtfailed");
            
        }

        $userExist = false;
        if ($stmt->rowCount() > 0) {
            $userExist = true;
        }

        return $userExist;
    }

    private function setUser($email, $password) {
        $stmt = $this->connect()->prepare('INSERT INTO users (email, pwd) VALUES (?, ?);');

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($email, $hashedPassword))) {
            $stmt = null;
            header("location: ../signup.php?msg=stmtfailed");
        }

        $stmt = null;
    }
}

?>