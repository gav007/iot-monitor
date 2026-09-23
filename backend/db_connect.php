<?php
// Load the local database details.
// config.php is ignored by Git so the password is not uploaded.
include("config.php");

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
