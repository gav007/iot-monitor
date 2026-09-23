<?php
/*
 * Shared MySQL connection for the authentication pages.
 * Copy config.example.php to config.php and add your own local details.
 * config.php is ignored by Git so passwords are not committed.
 */
$config_file = __DIR__ . "/config.php";

if (file_exists($config_file)) {
    $db_config = require $config_file;
} else {
    $db_config = [
        "host" => getenv("IOT_DB_HOST") ?: "",
        "username" => getenv("IOT_DB_USERNAME") ?: "",
        "password" => getenv("IOT_DB_PASSWORD") ?: "",
        "database" => getenv("IOT_DB_NAME") ?: "",
        "port" => (int) (getenv("IOT_DB_PORT") ?: 3306),
    ];
}

$required_keys = ["host", "username", "password", "database", "port"];
foreach ($required_keys as $key) {
    if (!array_key_exists($key, $db_config)) {
        die("Database configuration is incomplete. See README.md.");
    }
}

mysqli_report(MYSQLI_REPORT_OFF);
$conn = new mysqli(
    $db_config["host"],
    $db_config["username"],
    $db_config["password"],
    $db_config["database"],
    (int) $db_config["port"]
);

if ($conn->connect_error) {
    error_log("IoT Monitor database connection failed: " . $conn->connect_error);
    die("Database connection failed. Check backend/config.php and make sure MySQL is running.");
}

$conn->set_charset("utf8mb4");
