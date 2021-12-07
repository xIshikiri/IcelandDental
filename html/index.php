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
        <div class="section">
            <div class="section_left">
                <div class="container">
                    <img src="css/main2.png">
                </div>   <!-- 1 -->

                <div class="container">
                    <span class="container_text"> Karta klienta </span>
                    <span class="container_text"> już od 3 wizyty! </span>
                </div>   <!-- 2 -->
            </div>
            <div class="section_right">
                <div class="container">
                    <span class="container_text"> Nie czekaj! </span>
                    <span class="container_text"> Umów się już teraz! </span>
                </div>   <!-- 1 --> 
                <div class="container">
                    <img src="css/main1.png">
                </div>   <!-- 2 -->
            </div>
        </div>
        <div class="section">
            <div class="section_text_box">
                <span class="section_text"> TOP Pracownicy </span>
                <div class="section_in_section">
                    <div class="team_photo_section">
                        <div class="team_photo">
                            <img src="css/dentist1.png">
                            <span class="team_text">Dentysta</span> 
                        </div>
                        <div class="team_photo">
                            <img src="css/destist2.png">
                            <span class="team_text">Dentysta</span> 
                        </div>
                        <div class="team_photo">
                            <img src="css/ceo.png"> 
                            <span class="team_text">CEO</span>  
                        </div>
                        <div class="team_photo">
                            <img src="css/wozny.png">
                            <span class="team_text">Woźny</span> 
                        </div>
                        <div class="team_photo">
                            <img src="css/plumber.png">
                            <span class="team_text">Hydraulik</span> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div>
                <span class="section_text"> 98% KLIENTÓW ZADOWOLONYCH </span>
            </div>
            <div>
                <div class="recom_grid">
                    <div class="photo_box1">
                        <img src="css/okayDude.png">
                    </div>
                    <div class="speech_box1">
                        <span class="speech_text">
                             "Mój ostatni zabieg był bezbolesny, a różnicę widzę od razu!"
                        </span>
                        <span class="speech_author"> ~Patryk P. </span>
                    </div>
                    <div class="speech_box2">
                        <span class="speech_text"> "Ząb przestał mnie boleć zaraz po wizycie! Zdolności waszych dentystów są nie z tej Ziemi!" </span>
                        <span class="speech_author"> ~Hubert M. </span>
                    </div>
                    <div class="photo_box2">
                    <img src="css/okayMan2.png">
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