<?php

session_start();
$ref = $_SESSION['ref'];
$amount = $_SESSION['amount'];
$token = $_SESSION['token'];
$uid = $_SESSION['user']['id'];
$dateadded = date('jS F, Y');
$timepaid = date('h : i : s a');
$a = insert('transactions');
