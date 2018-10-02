<?php

$host = "localhost";
$db = "publications";
$user = "root";

$conn = new mysqli($host,$user,$pwd,$db);

if($conn->connect_error) die($conn->error);

$query = "SELECT * FROM classics";
$result = $conn->query()
    
    
?>

