<?php
    session_start();
?>
<head>
    <link rel="stylesheet" href="/styling/navbar.css">
</head>
<body>
    <div class="navbar-container">

        <div class="navbar-item">
            <a href="/pages/homepage.php" class="fill-div navbar-item unselectable">Home</a>
        </div>
        <div class="navbar-item">
            <a href="#" class="fill-div navbar-item unselectable">Partners</a>
        </div>

        <?php if(isset($_SESSION["id"])) { ?>

            <?php
            if($_SESSION["role"] == "super_admin") {
            ?>
                <div class="navbar-item">
                    <a href="#" class="fill-div navbar-item unselectable">Users</a>
                </div>
            <?php } ?>

            
            <?php
            $parsedID = (float)$_SESSION["id"];
            if($parsedID >= 0) {
                ?>
                <div class="navbar-item">
                    <a href="../middleware/logOut.php" class="fill-div navbar-item unselectable">Log out</a>
                </div>
                <?php } ?>
                
                
        <?php    
        } else {
        ?>
            <div class="navbar-item">
                <a href="/pages/login.php" class="fill-div navbar-item unselectable">Login</a>
            </div>
        <?php } ?>
                
    </div>
    
</body>
</html>