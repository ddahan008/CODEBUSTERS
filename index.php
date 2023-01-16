<!DOCTYPE html>
<html lang="en" style="height: 100%;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="height: 100%; display: flex; justify-content: center; align-items: center;">

    <div style="width: 500px; background: blue; padding: 20px;">
        <h2>Welcome!</h2>
        <span>Please sign into your account</span>

        <div>
            <form action="Includes/signin-inc.php" method="post">
                <div class="form-floating">
                    <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" autocomplete="off">
                    <label for="username">Username</label>
                </div>
                
                <div class="form-floating">
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" autocomplete="off">
                    <label for="password">Password</label>
                </div>
                <button type="submit" name="submit">Sign In</button>
                <a href="forgotpassword.php" style="color: black;">Forgot Password?</a>
                <a href="signup.php" style="color: black;">Sign Up</a>
            </form>
        </div>
    </div>

</body>
</html>