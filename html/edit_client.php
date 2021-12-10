<?php
require_once "config.php";
require_once "session.php";

?>

<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <title>Dodaj klienta</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h2>Lista kont</h2>
        <div> 
            <form method="post" action="edit_c.php">
                <table>
                    <tr>
                        <th></th>
                        <th>Imię</th>
                        <th>Nazwisko</th>
                        <th>Data urodzenia</th>
                        <th>Adres</th>
                        <th>Telefon</th>
                        <th>Email</th>
                    </tr>
                    <?php
                        if ($query = $db -> prepare("SELECT * FROM Client ;")){
                            $query -> execute();
                                    
                            $result = $query->get_result();

                            if ($result -> num_rows > 0) {
                                while($row = $result -> fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td><input type='radio' name='radio' value='{$row['ID']}'></td>";
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
                <input type="submit" value="Wybierz">
            </form>
        </div>
    </body>
</html>