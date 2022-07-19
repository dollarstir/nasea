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
    $do = customfetch('orders', [['token', '=', $token]]);

    foreach ($do as $ar) {
        $s = customfetch('authors', [['id', '=', $ar['authorid']]]);
        $mess = 'Dear '.$s[0]['authname'].', you have received an amount of GHS'.$ar['discountprice'].' on sales of your book '.$ar['bookname'];
        $mess2 = '<html><body><img src="https://naseabooks.com/yolkassets/upload/logo.png" style="width:150px;height:100px;"><p>Dear '.$s[0]['authname'].', you have received an amount of GHS'.$ar['discountprice'].' on sales of your book '.$ar['bookname'].'</p><p><table style="width:100%;  border-collapse: collapse;"><tr><th style="border-collapse: collapse;">Book Name</th><th style="border-collapse: collapse;">Price(GHS)</th><th style="border-collapse: collapse;">Discount Price(GHS)</th><th style="border-collapse: collapse;">Discount(%)</th></tr><tr><td style="border-collapse: collapse; border:1px solid;">'.$ar['bookname'].'</td><td style="border-collapse: collapse; border:1px solid;">'.$ar['price'].'</td><td style="border-collapse: collapse; border:1px solid;">'.$ar['discountprice'].'</td><td style="border-collapse: collapse; border:1px solid;">'.$ar['discount'].'</td></tr></table></p></body></html>';
        sms('Naseabooks', $s[0]['authnumber'], $mess);
        var_dump(sendmail('naseabooks.com', 'Book Purchase', $mess2, $from_name = 'Nasea Books', [$s[0]['authemail']], $reply_to = 'support@naseabooks.com', $reply_to_name = 'Nasea Books'));
    }
    unset($_SESSION['ref']);
    unset($_SESSION['amount']);
    unset($_SESSION['token']);
    echo '<script>window.location="account"</script>';
}
