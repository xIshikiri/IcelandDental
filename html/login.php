<?php

require_once "config.php";
require_once "session.php";

$error = '';
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if(empty($email)){
        $error .= '<p>Proszę podać adres email.</p>';
    }

    if(empty($password)){
        $error .= '<p>Proszę podać hasło.</p>';
    }

    if(empty($error)){
        if ($query = $db -> prepare("SELECT * FROM account WHERE email = ?;")){
            $query -> bind_param('s', $email);
            $query -> execute();
            $result = $query->get_result();
            $user = $result->fetch_assoc();

            if(!empty($user)) {
                if (password_verify($password, $user['Password'])){
                    $_SESSION["userid"] = $user['ID'];
                    $_SESSION["user"] = $user;

                    header("location: index.php");
                    exit;
                }
                else {
                    $error .= '<p>Błędne hasło.</p>';
                }
            }
            else {
                $error .= '<p>Nie ma konta o tym adresie email.</p>';
            }
            $query -> close();
        }
    }
    mysqli_close($db);
}
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
        <?php 
            if(isset($_SESSION['userid'])) {?>
                    <button class="login_button" onclick="show_login_box()">ZALOGUJ
                        <div class="login_dropdown" id="loginDropdown">
                            <div class="dropdown_box">
                                <div class="dropdown_content_logo_contener">
                                    <div class="dropdown_content_logo"></div>
                                </div>
                                <div class="dropdown_content">
                                    <span> [NAZWA UZYTKOWNIKA] </span>
                                    <a href="#"> PROFIL </a>
                                    <a href="#"> USTAWIENIA </a>
                                </div>
                            </div>
                        </div>
                    </button>
            <?php
            }
            if(!isset($_SESSION['userid'])){?>
                <a href='login.php'><input type='button' class='login_button' name='logoutButton' value='Zaloguj'></a>
            <?php
            }
        ?>
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
        <p>Zaloguj się</p>
        <div class="login_wrap">
            <div class="login_block">
                <form action="" method="post">
                    <div>
                        <label>Email: </label>
                        <input type="email" name="email" required>
                    </div>
                    <div>
                        <label>Hasło: </label>
                        <input type="password" name="password" required>
                    </div>
                    <div>
                        <input type="submit" name="submit" required>
                    </div>
                    <?php echo $error;?>
                    <span>Nie masz konta? <a href="register.php">Zarejestruj się</a>.</span>
                </form>
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