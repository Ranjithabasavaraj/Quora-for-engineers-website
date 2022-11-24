<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Quora for Engineers </title>
        <link type="text/css" rel="stylesheet" href="css/stylenew.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/material.css">
        <link type="text/css" rel="stylesheet" href="fonts/font.css">
        <link rel="icon" href="images/icon1.png" >
    </head>
    <body id="_4">
        <!-- navigation bar -->
        <a href="index.php">
            <div id="log">
                <div id="i">Q</div><div id="cir">i</div><div id="ntro">uora for Engineers</div>
            </div>
        </a>
        <ul id="nav-bar">
            <a href="index.php"><li>Home</li></a>
            <a href="categories.php"><li>Categories</li></a>
            <a href="contacts.php"><li id="home">Contact</li></a>
            <a href="ask.php"><li>Ask Question</li></a>
            <?php 
                if(! isset($_SESSION['user'])){
            ?>
            <a href="login.php"><li>Log In</li></a>
            <a href="signup.php"><li>Sign Up</li></a>
            <?php
                }
                else{
            ?>
            <a href="profile.php"><li>Hi, <?php echo $_SESSION["user"]; ?></li></a>
            <a href="logout.php"><li>Log Out</li></a>
            <?php
                }
            ?>
        </ul>
        <!-- content -->
        <div id="content" class="clearfix">
            
            <div id="box-1">
                <div class="heading">
                    <center>
                    <h1 class="logo"><div id="i">Q</div><div id="cir">i</div><div id="ntro">uora for Engineers</div></h1>
                    <p id="tag-line">where questions are themselves the answers</p>
                    </center>
                </div>
            </div>
            <div id="box-2">
                <div id="text">
                    <p style="line-height: 20px;">
                        <a href="mailto:ranjuab.rani2002@gmail.com">Mail Us:<br> ranjuab.rani2002@gmail.com<br> seemaacharya27@gmail.com</a><br>
                        Contact: +91 9731913632 / +91 7204480303<br>
                        Site By: <i>Ranjitha.A.B and Team</i>
                    </p>
                </div>
            </div>
            
        </div>
    
        <!-- Footer -->
        <div id="footer">
            &copy; 2022 &bull; <strong>Quora for Engineers....</strong><br><br>Designed by Ranjitha.A.B and Team
        </div>
    </body>
    
</html>