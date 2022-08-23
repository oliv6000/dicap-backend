<?php
    include("../navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrative-login</title>
    <link rel="stylesheet" href="../styling/login.css">
    <link rel="stylesheet" href="../styling/default.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="login-container">
            <form action="../middleware/loginAuth.php" method="post">
                <div>
                    <h4>Login</h4>
            </div>
            <div>
                <input type="text" name="uname" id="uname" placeholder="Email"></input>
            </div>
            <div>
                <input type="password" name="pwrd" id="pwrd" placeholder="password"></input>
            </div>
            <div class="forgot-container">
                <a href="forgotPassword.php" class="forgot-link">forgot password</a>
            </div>
            <div>
                <input type="submit" value="login"/>
            </div>
        </form>
    </div>
    
</body>
</html>
<script src="../scripts/login.js"></script>