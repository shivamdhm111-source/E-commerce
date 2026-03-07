<?php

// Database Configuration
$username = 'root';            // Database username
$password = '';            // Database password (empty by default in XAMPP)
$servername = 'localhost';       // Database host
$dbname = 'ecommercedb';       // Database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$db_connected = $conn ? true : false;
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
?>