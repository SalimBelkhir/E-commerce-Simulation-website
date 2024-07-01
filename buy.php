<?php
/*
session_start();

include 'db.php'; 

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
} else {
    echo "User not found.";
    exit();
}

$paymentData = [
    "receiverWalletId" => "667c66188fd6aa196113cb98",
    "token" => "TND",
    "amount" => 10000,
    "type" => "immediate",
    "description" => "Payment for product",
    "acceptedPaymentMethods" => ["wallet", "bank_card", "e-DINAR"],
    "lifespan" => 10,
    "checkoutForm" => true,
    "addPaymentFeesToAmount" => true,
    "firstName" => $user['username'],
    "lastName" => '',
    "phoneNumber" => '95276361',
    "email" => 'selim.belkhire@etudiant-enit.utm.tn', 
    "orderId" => uniqid(),
    "successUrl" => "success.php",
    "failUrl" => "fail.php",
    "theme" => "light"
];

$ch = curl_init('https://api.preprod.konnect.network/api/v2/payments/init-payment'); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($paymentData));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Token YOUR_API_KEY '
]);

$response = curl_exec($ch);

if ($response === false) {
    error_log('Curl error: ' . curl_error($ch));
    echo "Payment initiation failed due to a network error.";
    exit();
}

$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); // Get HTTP response code
curl_close($ch);

$responseData = json_decode($response, true);

echo '<pre>';
echo "HTTP Code: $httpCode\n";
echo "Raw Response: $response\n";
echo "Parsed Response:\n";
print_r($responseData);
echo '</pre>';

if ($httpCode === 200) {
    if (isset($responseData['success']) && $responseData['success']) {
        header("Location: " . $responseData['payment_url']);
    } else {
        echo "Payment initiation failed: " . (isset($responseData['message']) ? $responseData['message'] : 'Unknown error');
    }
} else {
    echo "Payment initiation failed: HTTP Code $httpCode";
}*/
?>
<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Simulate successful payment
    $_SESSION['payment_status'] = 'success';
    header("Location: success.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulated Payment</title>
</head>
<body>
    <h1>Simulated Payment Page</h1>
    <p>Click the button below to simulate a successful payment.</p>
    <form method="POST">
        <button type="submit">Simulate Payment</button>
    </form>
</body>
</html>
