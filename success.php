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
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}

if(isset($_SESSION['payment_status']) && $_SESSION['payment_status'] === 'success'){
    echo "<h2>Success</h2>
          <h2>Thank you for your purchase!</h2>
          </body>
          </html>" ;
    unset($_SESSION['Payment_status']);      
}else {
    header("Location: fail.php");
    exit();
}
?>

