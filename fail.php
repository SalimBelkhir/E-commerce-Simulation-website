<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

echo 'Payment was canceled or failed. Please try again.';
?>
