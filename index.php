<!DOCTYPE html>
<html lang="en" style="height: 100%;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="index.css" rel="stylesheet">
</head>

<body>

    <div class="Signin-box">
        <h2>Welcome To <span class="Color-5568FE">Jobsters!</span></h2>
        <span>Please Sign In</span>
        <div>
            <form action="Includes/signin-inc.php" method="post">
                <div class="form-floating Login-form">
                    <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" autocomplete="off">
                    <label for="email">Email</label>
                </div>
                <div class="form-floating Login-form">
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" autocomplete="off">
                    <label for="password">Password</label>
                </div>
                <div style="text-align: right;"><a href="">Forgot Password?</a></div>
                <button type="submit" name="signin" class="Button">Sign In</button>
                <div>Don't have an account? <a href="signup.php">Sign Up</a></div>
            </form>
        </div>
    </div>

</body>
</html>