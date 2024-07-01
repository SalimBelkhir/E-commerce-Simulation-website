<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<?php
if(session_status()==PHP_SESSION_NONE){
    session_start();
}
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

echo '<h2>You don\'t have enough money bruh, GET A JOB! </h2>';
?>
