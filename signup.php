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
        <form action="Includes/signup-inc.php" method="post">
            <div class="form-floating">
                <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" autocomplete="off" maxlength = "19">
                <label for="username">Username</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="password" placeholder="Enter password" name="password" autocomplete="off">
                <label for="password">Password</label>
            </div>
            <button type="submit" name="signup">Create Account</button>
            <a href="index.php" style="color: black;">Already have an account? Sign in</a>
        </form>
    </div>

</body>
</html>