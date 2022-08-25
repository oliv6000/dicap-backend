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
            <form action="../middleware/createNewUser.php" method="post">
                <div>
                    <h4>Create new user</h4>
            </div>
            <div>
                <input type="text" name="name" id="name" placeholder="Name"></input>
            </div>
            <div>
                <input type="text" name="email" id="email" placeholder="Email"></input>
            </div>
            <div>
                <input type="submit" value="Create user"/>
            </div>
        </form>
    </div>
    
</body>
</html>