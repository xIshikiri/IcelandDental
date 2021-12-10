<?php
require_once "config.php";

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $surname = trim($_POST['surname']);
    $dob = trim($_POST['dob']);
    $adress = trim($_POST['adress']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $password = "12345678";
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
            if (empty($error)) {
                $insertQuery = $db->prepare("INSERT INTO visit (Client_ID, Doctor_ID, Treatment_ID, Date, Treatment) VALUES (?, ?, ?, ?, ?);");
                $insertQuery->bind_param('ssssss', $name, $surname, $dob, $adress, $phone);
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
        <title>Dodaj wizytę</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div>
            <h2>DODAWANIE Wizyty</h2>
            <p>Wypełnij ten formularz, aby się dodać wizytę.</p>
            <?php   
            if(isset($_POST['submit'])) {
                echo $error; 
            }
            ?>
            <form action="" method="post">
                <div>
                    <label>Email klienta: </label>
                    <input type="text" name="client" required>
                </div>
                <div>
                    <label>Email dokotra: </label>
                    <input type="text" name="doctor" required>
                </div>
                <div>
                    <label>Typ wizyty: </label>
                    <input type="datalist" name="type" required>
                </div>
                <div>
                    <label>Data wizyty: </label>
                    <input type="date" name="date" required>
                </div>
                <div>
                    <label>Notatki: </label>
                    <input type="textarea" name="notes" required>
                </div>
                <div>
                    <input type="submit" name="submit" value="Dodaj">
                </div>
            </form>
        </div>
    </body>
</html>