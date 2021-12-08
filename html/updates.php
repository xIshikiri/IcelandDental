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
        
        <p>Aktualności</p>

        <div class="updates-body">
            <div class="updates">
                <div class="updates-block">
                    <a href="#" class="updates-title">Lubie marmolade</a>
                    <a href="#" class="updates-date">17.01.2021</a>
                    <a href="#" class="updates-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam illo excepturi velit fuga fugiat, exercitationem molestiae voluptates quaerat, nostrum labore inventore, ad dolorum voluptatibus officiis ea veritatis. Corporis, eos similique?</a>
                </div>
                <div class="updates-block">
                    <a href="#" class="updates-title">Przepis na spaghetti</a>
                    <a href="#" class="updates-date">08.12.2021</a>
                    <a href="#" class="updates-content">
Przepis na spaghetti bolognese
Składniki:

opakowanie makaronu spaghetti,
2 puszki krojonych pomidorów bez skórki,
1 opakowanie passaty pomidorowej,
1 duża marchewka, obrana i pokrojona w kostkę,
1 duża cebula, pokrojona w kostkę,
2 ząbki czosnku, przeciśnięte przez praskę,
500 g mielonej wołowiny,
3 łyżki oliwy z oliwek,
0,5 łyżeczki tymianku,
0,5 łyżeczki bazylii,
0,5 łyżeczki cukru,
sól i pieprz do smaku.
Sposób przygotowania:

W dużej patelni rozgrzej olej. Podsmaż cebulę. Gdy zacznie się szklić, dodaj czosnek i chwilę razem podsmażaj.
odaj na patelnię mięso wołowe. Smaż tak długo, aż stanie się brązowe.
Zalej mięso pomidorami i passatą, dodaj wszystkie przyprawy oraz marchewkę. Duś przez 10-15 minut, by dokładnie przegryzły się smaki.
Spaghetti ugotuj al dente - będziesz je podgrzewać później w sosie i w przeciwnym razie może się rozgotować.
Dodaj ugotowany makaron do sosu i chwilę podgrzewaj, ciągle mieszając. Jeśli spaghetti będzie zbyt suche, dodaj trochę wody po gotowaniu makaronu.
Podawaj ze świeżą bazylią oraz startym parmezanem. Smacznego!
Spaghetti nadaje się też do wielu innych sosów. Spróbuj zrobić je w wersji aglio e olio, z warzywami lub zrób drugie najsłynniejsze włoskie danie - makaron carbonara.
                    </a>
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