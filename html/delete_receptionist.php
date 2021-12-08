<?php

require_once "config.php";
session_start();

if ($query = $db -> prepare("SELECT * FROM Receptionist;")){
    $query -> execute();
    $result = $query->get_result();
    if ($result -> num_rows > 0) {
        while($row = $result -> fetch_assoc()) {
            $isChecked = !empty($_POST[$row['ID']]);
            if($isChecked){
            $deleteQuery = $db -> prepare("DELETE FROM receptionist WHERE ID = '{$row['ID']}';");
            $deleteQuery -> execute();
            $deleteQuery = $db -> prepare("DELETE FROM account WHERE email = '{$row['Email']}';");
            $deleteQuery -> execute();
            }
        }
    }
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
            <h2>USUŃ RECEPCJONISTĘ</h2>
            <form method="post">
                <table style="border:solid">
                    <?php
                        if ($query = $db -> prepare("SELECT * FROM Receptionist ;")){
                            $query -> execute();
                                    
                            $result = $query->get_result();

                            if ($result -> num_rows > 0) {
                                while($row = $result -> fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td><input type='checkbox' name='{$row['ID']}'></td>";
                                        echo "<td>{$row['Name']}</td>";
                                        echo "<td>{$row['Surname']}</td>";
                                        echo "<td>{$row['DateOfBirth']}</td>";
                                        echo "<td>{$row['Adress']}</td>";
                                        echo "<td>{$row['PhoneNumber']}</td>";
                                        echo "<td>{$row['Email']}</td>";
                                        echo "</tr>";
                                }
                            } else {
                                    echo "0 results";
                            }
                            $query -> close();
                        }
                    mysqli_close($db);
                    ?>
                </table>
                <br>
                <input type="submit" name="delete" value="Usuń zaznaczone">
            </form>
        </div>
    </body>
</html>