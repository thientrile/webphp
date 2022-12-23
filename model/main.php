<?php
/* It's starting a session. */
session_start();
/* It's creating a new instance of the `connect` class. */
$cc = new connect();
// tạo điều hướng controllers
$ctrl = 'home';
if (isset($_GET['action'])) {
    $ctrl = $_GET['action'];
}


/* It's checking if the function `currency_format` exists. If it doesn't, it creates it. */
if (!function_exists('currency_format')) {

    /**
     * It formats the number to a currency format.
     * 
     * @param number The number you want to format.
     * @param suffix The currency symbol to be used.
     */
    function currency_format($number, $suffix = '$')
    {
        if (!empty($number)) {
            return "{$suffix}" . number_format($number, 0, ',', '.');
        }
    }
}
// 
// số lượng giỏ hàng;
$cart = 0;
if (isset($_POST['addcart'])) {
    $temp = $cc->getonce("select * from product where id=" . $_POST['id']);
    $cartArry = array(
        "id" => $temp['id'],
        "title" => $temp['title'],
        "img" => $temp['img']
    );
    $_SESSION['cart'][] = $cartArry;
    $cart = count($_SESSION['cart']);
}
$cart = count($_SESSION['cart']);
