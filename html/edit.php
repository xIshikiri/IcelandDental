<?php
require_once "config.php";
require_once "session.php";

$id=$_POST['radio'];


if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $editQuery = $db -> prepare("UPDATE client SET Name = {$_POST['name']}, Surname = {$_POST['surname']}, DateOfBirth = {$_POST['date']}, Adress = {$_POST['adress']}, PhoneNumber = {$_POST['phone']} WHERE ID = {$id};");
    $editQuery -> execute();
    header("location: edit_client.php");
    exit;
}

?>



<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <title>Edycja</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
    <h2>Edycja</h2>
        <div>
            <form>
                <?php
                    if ($query = $db -> prepare("SELECT * FROM Client WHERE ID = $id ;")){
                    $query -> execute();
                                            
                    $result = $query->get_result();

                    if ($result -> num_rows > 0) {
                        while($row = $result -> fetch_assoc()) {
                            echo "<input type='text' name='name' value='{$row['Name']}'><br>";
                            echo "<input type='text' name='surname' value='{$row['Surname']}'><br>";
                            echo "<input type='date' name='date' value='{$row['DateOfBirth']}'><br>";
                            echo "<input type='text' name='adress' value='{$row['Adress']}'><br>";
                            echo "<input type='text' name='phone' value='{$row['PhoneNumber']}'><br>";
                            echo "{$row['Email']}<br>";
                        }
                        } else {
                            echo "0 results";
                        }
                        $query -> close();
                    }
                    echo '<input type="hidden" name="radio" value="{$id}">';
                    mysqli_close($db);              
                ?>
                <input type="submit" name="submit" value="Prześlij">
            </form>
        </div>
    </body>
</html>