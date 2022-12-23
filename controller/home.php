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


$new = $cc->getlist($select);
include 'view/home.php';
?>