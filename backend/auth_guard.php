<?php
/* Include this file at the top of any page that requires a signed-in user. */
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

if (empty($_SESSION["login"])) {
    header("Location: landing_page.php");
    exit();
}

$username = htmlspecialchars(
    $_SESSION["registered_username"] ?? "Student",
    ENT_QUOTES,
    "UTF-8"
);
