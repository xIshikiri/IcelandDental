<?php
require_once "config.php";
require_once "session.php";

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $surname = trim($_POST['surname']);
    $dob = trim($_POST['dob']);
    $adress = trim($_POST['adress']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $password = trim($_POST['password']);
    $confirmpassword = trim($_POST['confirmPassword']);
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    $type = "Client";


    if($query = $db->prepare("SELECT * FROM account WHERE email = ?")) {
        $error = '';
        $query->bind_param('s', $email);
        $query->execute();
        $query->store_result();
        if($query-> num_rows > 0) {
            $error .= '<p>Konto o tym adresie email już istnieje.</p>';
        } else {
            if (strlen($password) < 8) {
                $error .= '<p>Hasło musi mieć przynajmniej 8 znaków.</p>';
            }
            if (empty($confirmpassword)) {
                $error .= '<p>Potwierdź hasło.</p>';
            } else {
                if (empty($error) && ($password != $confirmpassword)) {
                    $error .= '<p>Hasła się nie zgadzają.</p>';
                }
            }
            if (empty($error)) {
                $insertQuery = $db->prepare("INSERT INTO account (Email, Password, Type) VALUES (?, ?, ?);");
                $insertQuery->bind_param('sss', $email, $password_hash, $type);
                $result = $insertQuery->execute();
                $insertQuery = $db->prepare("INSERT INTO client (Name, Surname, DateOfBirth, Adress, PhoneNumber, Email) VALUES (?, ?, ?, ?, ?, ?);");
                $insertQuery->bind_param('ssssss', $name, $surname, $dob, $adress, $phone, $email);
                $result = $insertQuery->execute();
                if ($result) {
                    $error .='<p>Rejestracja powiodła się, możesz się teraz zalogować.</p>';
                } else {
                    $error .='<p>Wystąpił błąd. Spróbuj ponownie.</p>';
                }
                $insertQuery->close();
            }
        }
    }
    $query->close();
    mysqli_close($db);
}
?>

<html lang="pl-PL">
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
                        // echo "<a href='logout.php'><input type='button' name='logoutButton' value='Wyloguj się'></a>";
                    }
                    if(!isset($_SESSION['userid'])){
                        echo "<a href='login.php'><input type='button' class='lol' name='logoutButton' value='Zaloguj się'></a>";
                        echo "<div class='lol'></div>";
                    }
                    ?>
                </div>
            </button>
        </div>

        <!-- <div class="box_main">
            <a href="index.php" class="box_text">Iceland Dental</a>
            <div class="box_main_content"></div>
        </div> -->

        <div class="navbar">
            <a href="index.php" class="home"><div class="home_bttn"></div></a>
            <a href="updates.php" class="nav_bttn">Aktualności</a>
            <a href="pricelist.php" class="nav_bttn">Cennik</a>
            <a href="about.php" class="nav_bttn">O nas!</a>
            <a href="contact.php" class="nav_bttn">Kontakt</a>
        </div>

        <div class="main">
            <div>
                <p>REJESTRACJA</p>
                <?php   
                    if(isset($_POST['submit'])) {
                       echo $error; 
                    }
                ?>
                <div class="register_wrap">
                    <div class="register_block">
                        <form action="" method="post">
                        <span>Wypełnij ten formularz, aby się zarejestrować.</span>
                            <div>
                                <label>Imię: </label>
                                <input type="text" name="name" required>
                            </div>
                            <div>
                                <label>Nazwisko: </label>
                                <input type="text" name="surname" required>
                            </div>
                            <div>
                                <label>Data urodzenia: </label>
                                <input type="date" name="dob" required>
                            </div>
                            <div>
                                <label>Adres: </label>
                                <input type="text" name="adress" required>
                            </div>
                            <div>
                                <label>Adres email: </label>
                                <input type="email" name="email" required>
                            </div>
                            <div>
                                <label>Nr telefonu: </label>
                                <input type="text" name="phone" required>
                            </div>
                            <div>
                                <label>Hasło:  </label>
                                <input type="password" name="password" required>
                            </div>
                            <div>
                                <label>Potwierdź hasło:  </label>
                                <input type="password" name="confirmPassword" required>
                            </div>
                            <div>
                                <input type="submit" name="submit" value="Zarejestruj">
                            </div>
                            <span>Masz już konto? <a href="login.php">Zaloguj się</a>.</span>
                        </form>
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