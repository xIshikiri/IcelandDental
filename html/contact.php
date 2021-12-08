<?php
    session_start();
?>
<!DOCTYPE html lang="pl-PL">
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="icon" href="css/logo_square_120px.png" type="image/icon type">
    <link rel="stylesheet" href="css/contact.css">
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
                <?php 
                if(isset($_SESSION['userid'])){
                    echo "<a href='logout.php'><input type='button' name='logoutButton' value='Wyloguj się'></a>";
                }
                if(!isset($_SESSION['userid'])){
                    echo "<a href='login.php'><input type='button' class='lol' name='logoutButton' value='Zaloguj się'></a>";
                    echo "<div class='lol'></div>";
                }
                
                ?>
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
        <p> Kontakt </p>
        <div class="section">
            <div class="info">
                <div class="info_box">
                    <p> Iceland Dental</p>
                    <span>Wysokospecjalistyczna stomatologia w Toruniu</span>
                    <span>Nr. tel: 777 649 754</span>
                    <span>Adres E-mail: adels123456@gmail.com</span>
                </div>
                <div class="info_box">
                    <p> Znajdziesz nas tutaj! </p>
                    <span>adres: józefa etc</span>
                </div>
            </div>
        </div>

        <p>Znajdziesz nas tutaj!:</p>

        <div class="info">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2399.8553065363185!2d18.58224975112481!3d53.02296400648674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47033456e3f13bc9%3A0x5c1aecc91437ab48!2sInternat%20ZSMEiE!5e0!3m2!1spl!2spl!4v1638895628963!5m2!1spl!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
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