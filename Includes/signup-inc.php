<!-- Page Name: signup-inc.php -->
<!-- Description: Once the admin clickes sign up in the signup.php page, this script will run. -->

<?php

session_start();

if(isset($_POST["signup"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    include_once "../Classes/dbh-classes.php";
    include_once "../Classes/signup-classes.php";
    $signup = new Signup($email, $password);

    //This object will call the signupUser function which will initiate the user creation process.
    $signup->signupUser();

    header("location: ../index.php?msg=usercreated");

}

?>