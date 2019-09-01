<?php

$host = "192.168.2.12"; /* Host name */
$user = "webuser";
$password = "insecure_db_pw";
$dbname = "fvision"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
