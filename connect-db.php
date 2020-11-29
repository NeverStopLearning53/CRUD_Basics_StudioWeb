<?php

// Step 1 - check to verify that MySQLI installed on your computer 
// - 11/27/2020 verified mysqli installed on system

// phpinfo();

$server = "localhost";
$user = "root";
$pass = "root";
$db = "records";



$mysqli = new mysqli($server, $user, $pass, $db);

mysqli_report(MYSQLI_REPORT_ERROR);




?>