
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-commerce Website</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<nav>
    <ul>
        <li><a href="index.php" style="color: white">Home</a></li>
        <?php if (isset($_SESSION['username'])): ?>
            <li><a href="product.php" style="color: white">Product</a></li>
            <li><a href="logout.php" style="color: white">Logout</a></li>
        <?php else: ?>
            <li><a href="login.php" style="color: white">Login</a></li>
            <li><a href="register.php" style="color: white">Register</a></li>
        <?php endif; ?>
        <li><a href="about.php" style="color: white">About</a></li>
        <li><a href="contact.php" style="color: white">Contact</a></li>
    </ul>
</nav>
