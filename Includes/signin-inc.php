<!-- Page Name: signin-inc.php -->
<!-- Description: Once the user click sign in in the index.php page, this script will run -->

<?php

if(isset($_POST["signin"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    include_once "../Classes/dbh-classes.php";
    include_once "../Classes/signin-classes.php";
    $signin = new Signin($email, $password);

    $signin->signinUser();
    
}

?>