<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "dbbeyondthebrush";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>