<?php

    include '../config/functions.php';

    $transactionToken = $_POST['transactionToken'];
    $amount = $_POST['amount'];
    $purchase = $_POST['purchase'];

    $token = generateToken();
    $authorization = generateAuthorization($amount, $purchase, $transactionToken, $token);

    echo json_encode($authorization);

?>