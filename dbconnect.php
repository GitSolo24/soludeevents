<?php

//paramaters to connect to the database 
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "solude_events";

//Connection to database
$conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);

if (!$conn) 
{
    die("Database cant connect");
    echo "not connecting";

} 



?>