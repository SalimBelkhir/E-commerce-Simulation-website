<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the E-commerce Website</title>
    <link rel="stylesheet" href="CSS/style.css"> 
</head>
<?php
session_start();
session_destroy();
header("Location: index.php");
exit();
?>
