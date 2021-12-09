<?php

require_once "config.php";
session_start();

if ($query = $db -> prepare("SELECT * FROM doctor;")){
    $query -> execute();
    $result = $query->get_result();
    if ($result -> num_rows > 0) {
        while($row = $result -> fetch_assoc()) {
            $isChecked = !empty($_POST[$row['ID']]);
            if($isChecked){
            $deleteQuery = $db -> prepare("DELETE FROM doctor WHERE ID = '{$row['ID']}'");
            $deleteQuery -> execute();
            $deleteQuery = $db -> prepare("DELETE FROM account WHERE Email = '{$row['Email']}'");
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
        <title>Usuń Doktora</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div>
            <h2>USUN DOKTORA</h2>
            <form method = "post">
            <table style="border: 2px solid black;">
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                </tr>
                <?php
                if ($query = $db -> prepare("SELECT * FROM doctor ;")){
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
            <input type = "submit" name = "delete" value = "Usuń">
            </form>
        </div>
    </body>
</html>