<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "company";

$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}



