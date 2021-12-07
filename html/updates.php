<?php
    session_start();
?>
<!DOCTYPE html lang="pl-PL">
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="icon" href="css/logo_square_120px.png" type="image/icon type">
    <link rel="stylesheet" href="css/updates.css">
    <script src="scripts/login_anim.js"></script>
    
    <title>Iceland Dental</title>
    
</head>
<body>
    <div class="header">
        <span class="hEmail">Email: adels123456@gmail.com</span>
        <span class="hTel">Nr. tel: 777 649 754</span>
        <span class="hTel">Otwarte: pon-pt 8-19</span>
    </div>

    <div class="login_bar">
        <button class="login_button" onclick="show_login_box()">ZALOGUJ
            <div class="login_dropdown" id="loginDropdown">
                
                <input type="text">
                <input type="password">
                <button class="submit"></button>
                
            </div>
        </button>
        
    </div>

    <div class="box_main">
        <a href="index.php" class="box_text">Iceland Dental</a>
        <div class="box_main_content"></div>
    </div>

    <div class="navbar">
        <a href="index.php" class="home"><div class="home_bttn"></div></a>
        <a href="updates.php" class="nav_bttn">Aktualności</a>
        <a href="pricelist.php" class="nav_bttn">Cennik</a>
        <a href="about.php" class="nav_bttn">O nas!</a>
        <a href="contact.php" class="nav_bttn">Kontakt</a>
    </div>

    <div class="main">
        
    
    </div>

    <footer>
        <div class="footer_div">

            <div class="footer_url_box">
                <a href="#" class="footer_url">TOS</a>
            </div>

            <div class="footer_url_box">
                <a href="#" class="footer_url">Kontakt</a>
            </div>

            <div class="footer_url_box">
                <a href="#" class="footer_url">Lorem</a>
            </div>

        </div>
        <div class="footer_div">
            <div class="footer_logo"></div>
        </div>
        <div class="footer_div">

            <div class="footer_url_box">
                <a href="#" class="footer_url">Lorem</a>
            </div>

            <div class="footer_url_box">
                <a href="#" class="footer_url">Lorem</a>
            </div>

            <div class="footer_url_box">
                <a href="#" class="footer_url">Lorem</a>
            </div>

        </div>
    </footer>
</body>
</html>