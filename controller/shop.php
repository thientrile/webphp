<?php
$note = "Create Amazing Digital Works";


if ($ctrl = "shop" && isset($_GET['cate'])) {
    $select = "select * from product, category where product.category_id=category.id and  product.category_id=" . $_GET['cate'];
    switch ($_GET['cate']) {

        case 1:
            $note = "Audio";
            break;
        case 2:
            $note = "Graphics";
            break;
        case 3:
            $note = "Themes";
            break;
        case 4: {
                $note = "Videos";
                break;
            }
        default: {
                $note = "Create Amazing Digital Works";
                break;
            }
    }
} else {
    $select = "select * from product";
}
if (isset($_GET['act']) && $_GET['act'] == "detail") {
    $view = $_GET['act'];
    $new = $cc->getonce("select * from product where id=" . $_GET['id']);
    $gallery = $cc->getlist("select * from gallery where product_id =" . $_GET['id']);
    // if (isset($_POST['addcart'])) {
    //     $insert = "insert into cart(user_id,product_id) values(1," . $_GET['id'] . ")";
    //     $cc->send($insert);
    // }
} else {
    $view = "shop";
    $new = $cc->getlist($select);
}

include 'view/' . $view . '.php';
