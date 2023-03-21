<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jobsters</title>
    <link href="../../../css/HeaderAndFooter.css" rel="stylesheet" type="text/css"/>
    <link href="../../../css/HomePage.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="../../../css/font-awesome.min.css">
</head>
<body>
    <header>
        <a href="/Home/"><img class="logo" src="../../../assets/logo.png" alt="Better Being Logo" width="50%" height="auto" style="float:left"></a>
        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <nav>
            <ul>
                <li><a href="/Home/">HOME</a></li>
                <li><a href="/Network/">NETWORK</a>
                    <div class="dropdown">
                        <ul>
                            <li><a href="/People/">People</a></li>
                            <li><a href="/Company/">Company</a></li>
                            <li><a href="/Connection/">Connections</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="/Job/">JOBS</a></li>
                <li><a href="/Notification/">NOTIFICATIONS</a></li>
                <li><a href="/Explore/">EXPLORE</a>
                    <div class="dropdown">
                        <ul>
                            <li><a href="/Group/">Groups</a>
                            <li><a href="/Event/">Events</a></li>
                            <li><a href="#">Suggestions</a></li>
                        </ul>
                    </div>
                </li>
                <li> <a href="/Chat/">MESSAGES</a></li>
                <li> <a href="/Profile/">USER</a>
                    <div class="dropdown">
                        <ul>
                            <li><a href="/Setting/">Settings</a></li>
                            <?php if(isset($_SESSION['user_id'])) echo '<li><a href="/Home/Logout">Sign Out</a></li>' ?>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
        <label for="nav-toggle" class="nav-toggle-label">
            <span></span>
        </label>
    </header>