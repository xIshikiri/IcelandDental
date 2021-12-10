<?php
require_once "config.php";
session_start();

$s=$_SESSION['user'];
$email=$_SESSION['email'];

$query = $db -> prepare("SELECT ID FROM Doctor WHERE Email = $email ");
$query -> execute();
$id = $query->get_result();
?>

<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <title>Wizyty</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h2>Wizyty</h2>
        <div> 
        <table>
                    <tr>
                        <th></th>
                        <th>Imię klienta</th>
                        <th>Nazwisko klienta</th>
                        <th>Imię doktora</th>
                        <th>Nazwisko doktora</th>
                        <th>Rodzaj leczenia</th>
                        <th>Data wizyty</th>
                        <th>Notatki</th>
                    </tr>
                    <?php
                        if ($query = $db -> prepare("SELECT client.Name,client.Surname,doctor.Name,doctor.Surname,treatment.Name,visit.Date,visit.Notes
                        FROM Visit 
                        INNER JOIN client on visit.Client_ID=client.ID
                        INNER JOIN doctor on visit.Doctor_ID=doctor.ID
                        INNER JOIN treatment on visit.Treatment_ID=treatment.ID
                        WHERE DOCTOR_ID = $id AND date > NOW() ORDER BY Date")){
                            $query -> execute();
                                                    
                            $result = $query->get_result();
        
                            if ($result -> num_rows > 0) {
                                while($row = $result -> fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>{$row['client.Name']}</td>";
                                        echo "<td>{$row['client.Surname']}</td>";
                                        echo "<td>{$row['doctor.Name']}</td>";
                                        echo "<td>{$row['doctor.Surname']}</td>";
                                        echo "<td>{$row['treatment.Name']}</td>";
                                        echo "<td>{$row['visit.Date']}</td>";
                                        echo "<td>{$row['visit.Notes']}</td>";
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
        </div>
    </body>
</html>