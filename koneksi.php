<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "_db_pterpan_mis";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection){
        die("Connection Failed:".mysqli_connect_error());
    }
?>