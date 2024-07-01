<?php include 'header.php'; ?>
<?php
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}

if(isset($_SESSION['payment_status']) && $_SESSION['payment_status'] === 'success'){
    echo "<h2>Success</h2>
          <p>Thank you for your purchase!</p>
          </body>
          </html>" ;
    unset($_SESSION['Payment_status']);      
}else {
    header("Location: fail.php");
    exit();
}
?>

