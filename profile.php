<?php

session_start();

if (!isset($_SESSION["username"])) {
    header("location: index.php?msg=unauthorised");
} 
else {
    include_once "Includes/timeout-inc.php";

    //This if statement makes sure that the user did not time out
    if (!checkTimeOut()) {
        header("location: Includes/logout-inc.php?reason=sessiontimedout");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    Welcome <?php echo $_SESSION["username"];?>
    </br>
    Your password is <?php echo $_SESSION["password"];?>
    <form action="Includes/signout-inc.php" method="post">
        <button type="submit" name="signout">Sign Out</button>
    </form>

</body>
</html>