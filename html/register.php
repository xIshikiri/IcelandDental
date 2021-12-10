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
        <meta charset="UTF-8">
        <title>Zarejestruj się</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div>
            <h2>REJESTRACJA</h2>
            <p>Wypełnij ten formularz, aby się zarejestrować.</p>
            <?php   
            if(isset($_POST['submit'])) {
                echo $error; 
            }
            ?>
            <form action="" method="post">
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
                <p>Masz już konto? <a href="login.php">Zaloguj się</a>.</p>
            </form>
        </div>
    </body>
</html>