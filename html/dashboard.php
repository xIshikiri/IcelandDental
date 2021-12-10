<?php
require_once "config.php";
session_start();

$s=$_SESSION['user'];
$email=$s['Email'];

$query = $db -> prepare("SELECT ID FROM Doctor WHERE Email = ?;");
$query -> bind_param("s", $email);
$query -> execute();
$id = $query->get_result();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link rel="stylesheet" href="css/dashboard.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



</head>
<body>


<header>
    <h1>Iceland Dental</h1>
</header>


<section id="mainSection">

<div class="dashboardMenu">



</div>

<div id="appointmentsContainer" class="appointmentsContainer">
<?php
                        if ($query = $db -> prepare("SELECT client.Name,client.Surname,treatment.Named,visit.Date,visit.Notes
                        FROM Visit 
                        INNER JOIN client on visit.Client_ID=client.ID
                        INNER JOIN treatment on visit.Treatment_ID=treatment.ID
                        WHERE DOCTOR_ID = ? AND date > NOW() ORDER BY Date")){
                            $query -> bind_param("i", $id);
                            $query -> execute();
                                                    
                            $result = $query->get_result();
        
                            if ($result -> num_rows > 0) {
                                while($row = $result -> fetch_assoc()) {
                                        echo "<appointment-module patient='{$row['Name']} {$row['Surname']}' date='{$row['Date']}' notes='{$row['Notes']}' treatment='{$row['Named']}'></appointment-module>";
                                        echo "<td></td>";
                                }
                            } else {
                                    echo "0 results";
                            }
                            $query -> close();
                        }
                        mysqli_close($db);
                    ?>

</div>

</section>


<script src="scripts/dashboard-vue.js"></script>
</body>
</html>