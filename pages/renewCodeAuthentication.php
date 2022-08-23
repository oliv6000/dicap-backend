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
            <form action="../middleware/authenticateRenewCode.php" method="post">
                <div>
                    <h4>Authenticate reset password code</h4>
            </div>
            <div>
                <input type="number" name="code" id="code" placeholder="Authentication code"></input>
            </div>
            <div>
                <input type="submit" value="authenticate code"/>
            </div>
        </form>
    </div>
    
</body>
</html>