<?php

// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    // Redirect the user to the login page
    header("Location: login.php");
    exit;
}

// Destroy the session
session_destroy();

// Redirect the user to the login page
header("Location: login.php");
exit;

