<?php
$servername = "mysql";
$username = "root";
$password = "root";
$database = 'app_uas';

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . "\n");
} else {
    echo "Connected successfully \n";
}
