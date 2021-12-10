<?php
require_once "config.php";
session_start();

$s=$_SESSION['user'];
$email=$s['email'];
echo "<p>$</p>";

$query = $db -> prepare("SELECT ID FROM Doctor WHERE Email = $email ");
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
                        if ($query = $db -> prepare("SELECT client.Name,client.Surname,treatment.Name,visit.Date,visit.Notes
                        FROM Visit 
                        INNER JOIN client on visit.Client_ID=client.ID
                        INNER JOIN treatment on visit.Treatment_ID=treatment.ID
                        WHERE DOCTOR_ID = $id AND date > NOW() ORDER BY Date")){
                            $query -> execute();
                                                    
                            $result = $query->get_result();
        
                            if ($result -> num_rows > 0) {
                                while($row = $result -> fetch_assoc()) {
                                        echo "<appointment-module patient='{$row['client.Name']} {$row['client.Surname']}' date='{$row['visit.Date']}' notes='{$row['visit.Notes']}' treatment='{$row['treatment.Name']}'></appointment-module>";
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