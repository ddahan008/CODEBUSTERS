<!DOCTYPE html>
<html lang="en" style="height: 100%;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="signup.css" rel="stylesheet">
</head>

<body>

    <div class="Signup-box">
        <h3 style="margin-bottom: 40px;">Connect With Our Professional <span class="Color-5568FE">Community!</span></h3>
        <form action="Includes/signup-inc.php" method="post">
            <div class="form-floating Signup-form">
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" autocomplete="off">
                <label for="email">Email</label>
            </div>
            <div class="form-floating Signup-form">
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" autocomplete="off">
                <label for="password">Password</label>
            </div>
            <div style="text-align: right;"><a href="">Terms And Conditions</a></div>
            <button type="submit" name="signup" class="Button">Sign Up</button>
            <div>Don't have an account? <a href="index.php">Sign In</a></div>
        </form>
    </div>

</body>
</html>