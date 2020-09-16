<?php

    include '../config/functions.php';

    $amount = $_GET['amount'];

    $token = generateToken();
    $sesion = generateSesion($amount, $token);
    $purchaseNumber = generatePurchaseNumber();

    $data = array(
        "sesionKey" => $sesion,
        "merchantId" => VISA_MERCHANT_ID,
        "purchaseNumber" => $purchaseNumber,
        "amount" => $amount
    );

    echo json_encode($data);

?>