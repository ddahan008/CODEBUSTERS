<?php

if(isset($_POST["submit"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    include_once "../Classes/dbh-classes.php";
    include_once "../Classes/signin-classes.php";
    $signin = new Signin($username, $password);

    $signin->signinUser();
    
}

?>