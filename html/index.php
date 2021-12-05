<?php
    session_start();
?>
<!DOCTYPE html lang="pl-PL">
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/styles.css">
    <script src="scripts/login_anim.js"></script>
    
    <title>Iceland Dental</title>
    
</head>
<body>
    <div class="header">
        <span class="hEmail">Email: adels123456@gmail.com</span>
        <span class="hTel">Nr. tel: 777 649 754</span>
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
        <div class="box_text">Iceland Dental</div>
        <div class="box_main_content"></div>
    </div>

    <div class="navbar">
        <a href="#" class="home"><div class="home_bttn"></div></a>
        <a href="#" class="nav_bttn">Aktualności</a>
        <a href="#" class="nav_bttn">Oferta</a>
        <a href="#" class="nav_bttn">Kontakt</a>
    </div>

    <div class="main">
        <div class="section">
            <div class="section_left">
                <div class="container">
                    <img src="css/stock.jpg" width="100%" height="100%">
                </div>   <!-- 1 -->

                <div class="container">
                    <img src="css/stock1.jpg" width="100%" height="100%">
                </div>   <!-- 2 -->
            </div>
            <div class="section_right">
                <div class="container">
                    <span>TYLKO NAJLEPSI SPECJALIŚCI</span>
                </div>   <!-- 1 --> 
                <div class="container">
                    <img src="css/stock3.jpg" width="100%" height="100%">
                </div>   <!-- 2 -->
            </div>
        </div>
        <div class="section">
            <div class="section_our_team">
                <div class="our_team"> NASZA KADRA </div>
                <div class="section_in_section">
                    <div class="team_photo_section">
                        <div class="team_photo">
                            <img src="css/dentist1.png" height="100%" width="100%">
                        </div>
                        <div class="team_photo">
                            <img src="css/destist2.png" height="100%" width="100%">
                        </div>
                        <div class="team_photo">
                            <img src="css/ceo.png" height="100%" width="100%">
                        </div>
                        <div class="team_photo">
                            <img src="css/wozny.png" height="100%" width="100%">
                        </div>
                        <div class="team_photo">
                            <img src="css/kadra.gif" height="100%" width="100%">
                        </div>
                    </div>
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