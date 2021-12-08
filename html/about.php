<?php
    session_start();
?>
<!DOCTYPE html lang="pl-PL">
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="icon" href="css/logo_square_120px.png" type="image/icon type">
    <link rel="stylesheet" href="css/styles.css">
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
        
        <p>O nas</p>

        <span class="about-title"> Jesteśmy liderem prywatnych usług medycznych w Polsce. Zapewniamy kompleksową opiekę diagnostyczną i stomatologiczną. Pod naszą opieką jest ponad 0 000 000 Pacjentów, którzy wychodzą od nas zadowoleni.</span>

        <div class="about-wrap">
            <div class="about-wrap-section">
                <div class="about-wrap-75">
                    <span class="about-wrap-text"> Wyśmienite zaopatrzenie oraz personel </span>
                </div>
                <div class="about-wrap-25">
                    <img src="css/logo_square_120px.png" class="about-wrap-photo">
                </div>
            </div>
        </div>

        <div class="about-wrap">
            <div class="about-wrap-section">
                <div class="about-wrap-25">
                    <img src="css/logo_square_120px.png" class="about-wrap-photo">
                </div>
                <div class="about-wrap-75">
                    <span class="about-wrap-text"> Lorem </span>
                </div>
            </div>
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