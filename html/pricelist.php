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
        
        <p> Cennik </p>

        <div class="pricebox-wrap">
            <div class="pricebox-name">
                <span> Stomatologia </span>
            </div>
            <div class="pricebox-offer">
                <span class="pricebox-offer-name">Badanie lekarskie stomatologiczne</span>
                <span class="pricebox-offer-cost">50 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="pricebox-offer-name">Konsultacje</span>
                <span class="pricebox-offer-cost">120 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="pricebox-offer-name">Wypełnienia – kompozyt światłoutwardzalny</span>
                <span class="pricebox-offer-cost">250 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="pricebox-offer-name">Wypełnienie w zębie mlecznym</span>
                <span class="pricebox-offer-cost">150 zł</span>
            </div>

            <div class="pricebox-name">
                <span> Znieczulenia </span>
            </div>
            <div class="pricebox-offer">
                <span class="pricebox-offer-name">Znieczulenie nasiękowe</span>
                <span class="pricebox-offer-cost">75 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="pricebox-offer-name">Znieczulenie przewodowe wewnątrzustne</span>
                <span class="pricebox-offer-cost">65 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="pricebox-offer-name">Znieczulenie aparatem WAND</span>
                <span class="pricebox-offer-cost">70 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="pricebox-offer-name">Znieczulenie podtlenkiem azotu</span>
                <span class="pricebox-offer-cost">100 zł</span>
            </div>

            <div class="pricebox-name">
                <span> Protetyka </span>
            </div>
            <div class="pricebox-offer">
                <span class="pricebox-offer-name">Korona porcelanowa</span>
                <span class="pricebox-offer-cost">800 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="pricebox-offer-name">Korona pełnoceramiczna</span>
                <span class="pricebox-offer-cost">1500 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="pricebox-offer-name">Licówka porcelanowa</span>
                <span class="pricebox-offer-cost">1700 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="pricebox-offer-name">Proteza całkowita</span>
                <span class="pricebox-offer-cost">2000 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="pricebox-offer-name">wkład koronowo-korzeniowy</span>
                <span class="pricebox-offer-cost">400 zł</span>
            </div>
            
            <div class="pricebox-name">
                <span> Ortodoncja </span>
            </div>
            <div class="pricebox-offer">
                <span class="pricebox-offer-name">Aparat ruchomy</span>
                <span class="pricebox-offer-cost">600 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="pricebox-offer-name">Aparat stały metalowy</span>
                <span class="pricebox-offer-cost">1700 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="pricebox-offer-name">Aparat stały kryształowy</span>
                <span class="pricebox-offer-cost">3000 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="pricebox-offer-name">Aparat lingwalny</span>
                <span class="pricebox-offer-cost">3500 zł</span>
            </div>

            <div class="pricebox-name">
                <span> Wybielanie </span>
            </div>
            <div class="pricebox-offer">
                <span class="pricebox-offer-name">Wybielanie zębów metodą nakładkową</span>
                <span class="pricebox-offer-cost">1000 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="pricebox-offer-name">Wybielanie zębów lampą Beyond</span>
                <span class="pricebox-offer-cost">1300 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="pricebox-offer-name">Wybielanie zębów laserem</span>
                <span class="pricebox-offer-cost">2000 zł</span>
            </div>

            <div class="pricebox-name">
                <span> Chirurgia stomatologiczna </span>
            </div>
            <div class="pricebox-offer">
                <span class="pricebox-offer-name">Usunięcie zęba</span>
                <span class="pricebox-offer-cost">100 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="pricebox-offer-name">Usunięcie zęba operacyjne</span>
                <span class="pricebox-offer-cost">500 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="pricebox-offer-name">Resekcje wierzchołka korzenia</span>
                <span class="pricebox-offer-cost">400 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="pricebox-offer-name">Odbudowa kości</span>
                <span class="pricebox-offer-cost">2200 zł</span>
            </div>

            <div class="pricebox-name">
                <span> Profilaktyka i Higiena </span>
            </div>
            <div class="pricebox-offer">
                <span class="pricebox-offer-name">Piaskowanie</span>
                <span class="pricebox-offer-cost">100 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="pricebox-offer-name">usunięcie kamienia nazębnego</span>
                <span class="pricebox-offer-cost">80 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="pricebox-offer-name">Fluoryzacja</span>
                <span class="pricebox-offer-cost">55 zł</span>
            </div>

            <div class="pricebox-name">
                <span> RTG </span>
            </div>
            <div class="pricebox-offer">
                <span class="pricebox-offer-name">Zdjęcie RTG małe</span>
                <span class="pricebox-offer-cost">49 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="pricebox-offer-name">Zdjęcie pantomograficzne</span>
                <span class="pricebox-offer-cost">75 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="pricebox-offer-name">Zdjęcie cefalometryczne</span>
                <span class="pricebox-offer-cost">85 zł</span>
            </div>
            <div class="pricebox-offer">
                <span class="pricebox-offer-name">Tomografia 3D</span>
                <span class="pricebox-offer-cost">200 zł</span>
            </div>

            <div class="pricebox-name">
                <span> Implantologia </span>
            </div>
            <div class="pricebox-offer">
                <span class="pricebox-offer-name">Wszczepienie implantu</span>
                <span class="pricebox-offer-cost">2000 zł</span>
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