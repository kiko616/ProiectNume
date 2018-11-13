<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "my_website";

$conn = new mysqli($server, $username, $password, $database); 

if( $conn->connect_error) {
    die("Eroare la conectare: " . $conn->connect_error );
} 