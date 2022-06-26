<?php

session_start();
$ref = $_SESSION['ref'];
$amount = $_SESSION['amount'];
$token = $_SESSION['token'];
$uid = $_SESSION['user']['id'];
$dateadded = date('jS F, Y');
$timepaid = date('h : i : s a');
if ($amount == '' || $token == '' || $ref == '') {
    echo '<script>window.location="home"</script>';
} else {
    $rec = [
        'uid' => $uid,
        'token' => $token,
        'transid' => $ref,
        'dateadded' => $dateadded,
        'timepaid' => $timepaid,
    ];
    insert('transactions', $rec);
    update('orders', ['paystatus' => 'paid', 'status' => 'complete'], ['token' => $token]);
    unset($_SESSION['ref']);
    unset($_SESSION['amount']);
    unset($_SESSION['token']);
    echo '<script>window.location="account"</script>';
}
