<?php

session_start();

if (!isset($_SESSION["email"])) {
    header("location: Includes/signout-inc.php?reason=unauthorised");
} else {
    include_once "Includes/timeout-inc.php";

    //This if statement makes sure that the user did not time out
    if (!checkTimeOut()) {
        header("location: Includes/signout-inc.php?reason=sessiontimedout");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="profile.css" rel="stylesheet">
</head>

<body>
    <div style="text-align: center;">
        <div class="card Profile-box" style="width:400px">
            <img class="card-img-top" src="Images/wall-e.jpg" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">Welcome <span class="Color-5568FE"><?php echo $_SESSION["email"]; ?></span></h4>
                <p class="card-text">Your password is <span class="Color-5568FE"><?php echo $_SESSION["password"]; ?></span></p>
            </div>
        </div>
        <form action="Includes/signout-inc.php" method="post">
            <button type="submit" name="signout" class="Button">Sign Out</button>
        </form>
    </div>
</body>

</html>