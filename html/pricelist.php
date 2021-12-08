<?php
    session_start();
?>
<!DOCTYPE html lang="pl-PL">
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="icon" href="css/logo_square_120px.png" type="image/icon type">
    <link rel="stylesheet" href="css/pricelist.css">
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
        
        <p> Cennik </p>

        <div class="wrap">
            <div class="pricebox-name">
                <span> Stomatologia </span>
            </div>
            <div class="pricebox-offer">
                <span class="offer-name">Badanie lekarskie stomatologiczne</span>
                <span class="offer-cost">50 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="offer-name">Konsultacje</span>
                <span class="offer-cost">120 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="offer-name">Wypełnienia – kompozyt światłoutwardzalny</span>
                <span class="offer-cost">250 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="offer-name">Wypełnienie w zębie mlecznym</span>
                <span class="offer-cost">150 zł</span>
            </div>

            <div class="pricebox-name">
                <span> Znieczulenia </span>
            </div>
            <div class="pricebox-offer">
                <span class="offer-name">Znieczulenie nasiękowe</span>
                <span class="offer-cost">75 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="offer-name">Znieczulenie przewodowe wewnątrzustne</span>
                <span class="offer-cost">65 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="offer-name">Znieczulenie aparatem WAND</span>
                <span class="offer-cost">70 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="offer-name">Znieczulenie podtlenkiem azotu</span>
                <span class="offer-cost">100 zł</span>
            </div>

            <div class="pricebox-name">
                <span> Protetyka </span>
            </div>
            <div class="pricebox-offer">
                <span class="offer-name">Korona porcelanowa</span>
                <span class="offer-cost">800 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="offer-name">Korona pełnoceramiczna</span>
                <span class="offer-cost">1500 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="offer-name">Licówka porcelanowa</span>
                <span class="offer-cost">1700 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="offer-name">Proteza całkowita</span>
                <span class="offer-cost">2000 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="offer-name">wkład koronowo-korzeniowy</span>
                <span class="offer-cost">400 zł</span>
            </div>
            
            <div class="pricebox-name">
                <span> Ortodoncja </span>
            </div>
            <div class="pricebox-offer">
                <span class="offer-name">Aparat ruchomy</span>
                <span class="offer-cost">600 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="offer-name">Aparat stały metalowy</span>
                <span class="offer-cost">1700 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="offer-name">Aparat stały kryształowy</span>
                <span class="offer-cost">3000 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="offer-name">Aparat lingwalny</span>
                <span class="offer-cost">3500 zł</span>
            </div>

            <div class="pricebox-name">
                <span> Wybielanie </span>
            </div>
            <div class="pricebox-offer">
                <span class="offer-name">Wybielanie zębów metodą nakładkową</span>
                <span class="offer-cost">1000 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="offer-name">Wybielanie zębów lampą Beyond</span>
                <span class="offer-cost">1300 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="offer-name">Wybielanie zębów laserem</span>
                <span class="offer-cost">2000 zł</span>
            </div>

            <div class="pricebox-name">
                <span> Chirurgia stomatologiczna </span>
            </div>
            <div class="pricebox-offer">
                <span class="offer-name">Usunięcie zęba</span>
                <span class="offer-cost">100 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="offer-name">Usunięcie zęba operacyjne</span>
                <span class="offer-cost">500 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="offer-name">Resekcje wierzchołka korzenia</span>
                <span class="offer-cost">400 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="offer-name">Odbudowa kości</span>
                <span class="offer-cost">2200 zł</span>
            </div>

            <div class="pricebox-name">
                <span> Profilaktyka i Higiena </span>
            </div>
            <div class="pricebox-offer">
                <span class="offer-name">Piaskowanie</span>
                <span class="offer-cost">100 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="offer-name">usunięcie kamienia nazębnego</span>
                <span class="offer-cost">80 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="offer-name">Fluoryzacja</span>
                <span class="offer-cost">55 zł</span>
            </div>

            <div class="pricebox-name">
                <span> RTG </span>
            </div>
            <div class="pricebox-offer">
                <span class="offer-name">Zdjęcie RTG małe</span>
                <span class="offer-cost">49 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="offer-name">Zdjęcie pantomograficzne</span>
                <span class="offer-cost">75 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="offer-name">Zdjęcie cefalometryczne</span>
                <span class="offer-cost">85 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="offer-name">Tomografia 3D</span>
                <span class="offer-cost">200 zł</span>
            </div>

            <div class="pricebox-name">
                <span> Implantologia </span>
            </div>
            <div class="pricebox-offer">
                <span class="offer-name">Wszczepienie implantu</span>
                <span class="offer-cost">2000 zł</span>
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