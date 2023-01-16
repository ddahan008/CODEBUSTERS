<!-- Page Name: signup-inc.php -->
<!-- Description: Once the admin clickes "Create Account" in the adm-accounts.php page, this script will run. -->

<?php

session_start();

if(isset($_POST["signup"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    include_once "../Classes/dbh-classes.php";
    include_once "../Classes/signup-classes.php";
    $signup = new Signup($username, $password);

    //This object will call the signupUser function which will initiate the user creation process.
    $signup->signupUser();

    header("location: ../index.php?msg=usercreated");

}

?>