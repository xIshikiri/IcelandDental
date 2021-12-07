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

            $rows = $result -> num_rows;
            $pwd = $user['password'];

            if($result) {
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

<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <title>Zaloguj się</title>
    </head>
    <body>
        <div>
            <h2>Zaloguj się</h2>
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
                <?php 
                
                echo $error;
                echo "email: " . $email;
                echo "Wyników: " . $rows;
                echo "Hash: " . $pwd;
                echo "Haslo: " . $password;

                ?>
                <p>Nie masz konta? <a href="register.php">Zarejestruj się</a>.</p>
            </form>
        </div>
    </body>
</html>