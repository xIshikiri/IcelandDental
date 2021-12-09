<?php
require_once "config.php";
session_start();

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
            <form method="post" action="edit.php">
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
                                        echo "<td><input type='submit' name='{$row['ID']}' value='Otwórz'></td>";
                                        echo "<td>{$row['Name']}</td>";
                                        echo "<td>{$row['Surname']}</td>";
                                        echo "<td>{$row['DateOfBirth']}</td>";
                                        echo "<td>{$row['Adress']}</td>";
                                        echo "<td>{$row['PhoneNumber']}</td>";
                                        echo "<td name='email'><input name='email' value='{$row['Email']}'></td>";
                                        echo "</tr>";
                                }
                            } else {
                                    echo "0 results";
                            }
                            $query -> close();
                        }

                        mysqli_close($db);
                        $_SESSION['post array']=$_POST;
                    ?>
                </table>
            </form>
        </div>
    </body>
</html>