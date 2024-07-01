<?php include 'header.php'; ?>
<?php
if(session_status()==PHP_SESSION_NONE){
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the E-commerce Website</title>
    <link rel="stylesheet" href="CSS/styles.css"> 
</head>
<body>
    <div class="Title">
    <header>
        <h1>Welcome to the E-commerce Website</h1>
    </header>
    </div>
    <main>
        <p><div class="Tuto"><?php echo isset($_SESSION['username']) ? 'Hello, ' . $_SESSION['username'] . '! ' : 'Login or Register so '; ?>you can buy our products here</p>
    </div>
        <?php if (isset($_SESSION['username'])): ?>
            <div class="Tuto">
            <?php
                include 'db.php' ; 
                $username = $_SESSION['username'];
                $user_money = "SELECT money FROM users WHERE username='$username' ";
                $user_money_res =mysqli_query($conn,$user_money);
                $row=mysqli_fetch_assoc($user_money_res);
                echo "Your money : " . $row['money'] . "DT" ;
            ?>
            </div>
            <p><div class="hyper"><button><a href="product.php">Go to Product Page</a></button></div>
            <div class="Tuto">or</div>
            <div class="hyper"><button><a href="logout.php">logout</a></button></div>
        </p>
        <?php else: ?>
            <p><div class="hyper"><button><a href="login.php">Login</a></button></div> <div class="Tuto">or</div> <div class="hyper"><button><a href="register.php">Register</a></button></div></p>
        <?php endif; ?>
        <div class="shopping-trolley"><img src="images/ShoppingTrolley.png" height="300px" width="300px" ></div>
    </main>
    <footer>
           <div class="credit"><p>&copy; <?php echo date('Y'); ?> E-commerce Website. All rights reserved.</p></div>
    </footer>
</body>
</html>
