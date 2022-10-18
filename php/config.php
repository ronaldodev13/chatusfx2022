<?php
$hostname = "www.db4free.net";
$username = "usfx202220";
$password = "abcd1234";
$dbname = "datosusfx2027";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn) {
  echo "Database connection error" . mysqli_connect_error();
}
