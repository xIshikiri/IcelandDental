<?php
require_once "config.php";
require_once "session.php";

$id=$_POST['radio'];

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
        <?php
            if ($query = $db -> prepare("SELECT * FROM Client WHERE ID = $id ;")){
            $query -> execute();
                                    
            $result = $query->get_result();

            if ($result -> num_rows > 0) {
                while($row = $result -> fetch_assoc()) {
                    echo "{$row['Name']}<br>";
                    echo "{$row['Surname']}<br>";
                    echo "{$row['DateOfBirth']}<br>";
                    echo "{$row['Adress']}<br>";
                    echo "{$row['PhoneNumber']}<br>";
                    echo "{$row['Email']}<br>";
                }
                } else {
                    echo "0 results";
                }
                $query -> close();
            }

            mysqli_close($db);              
        ?>
        </div>
        <div>

        </div>
    </body>
</html>