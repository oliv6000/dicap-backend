<?php
    include("../navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot password</title>
    <link rel="stylesheet" href="../styling/login.css">
    <link rel="stylesheet" href="../styling/default.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="login-container">
            <form action="../middleware/renewPassword.php" method="post">
            <div>
                <h4>Renew your password</h4>
            </div>
            <div>
                <input type="password" name="newPwrd" id="newPwrd" placeholder="New password"></input>
            </div>
            <div>
                <input type="submit" value="Renew password"/>
            </div>
        </form>
    </div>
    
</body>
</html>