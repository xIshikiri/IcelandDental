
<?php
require_once "config.php";
session_start();
?>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="icon" href="css/logo_square_120px.png" type="image/icon type">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>Iceland Dental</title>

</head>
<body>


<div class="AdminPanel" id="adminPanel">


    <div class="AdminPanelContent">
        Client
        <a href="create_client.php">Create</a>
        <a href="edit_client.php">Edit</a>
        <a href="delete_client.php">Delete</a>
    </div>
    <div class="AdminPanelContent">
        Dentist
        <a href="create_doctor.php">Create</a>
        <a href="edit_doctor.php">Edit</a>
        <a href="delete_doctor.php">Delete</a>

    </div>
    <div class="AdminPanelContent">
        Staff
        <a href="create_receptionist.php">Create</a>
        <a href="edit_receptionist.php">Edit</a>
        <a href="delete_receptionist.php">Delete</a>

    </div>




</div>

<script src="scripts/vue.js"></script>


</body>
