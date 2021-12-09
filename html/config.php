<?php
define('DBSERVER', 'localhost');
define('DBUSERNAME', 'admin');
define('DBPASSWORD', 'StefHoga87');
define('DBNAME', 'IcelandDental');

$db = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME);

if($db === false){
    die("Błąd: błąd połączenia." . mysqli_connect_error());
}
?>