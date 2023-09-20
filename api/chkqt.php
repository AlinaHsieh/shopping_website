<?php include_once "../base.php";
$good = $Goods->find($_POST['id']);
if ($_POST['qt'] > $good['stock']) {
    echo 0;
}else{
    echo 1;
}
