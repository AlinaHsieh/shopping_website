<?php include_once "../base.php";
$_POST['regdate'] = date("Y-m-d");
$_POST['cart'] = serialize($_SESSION['cart']);
dd($_POST);
$Order->save($_POST);
unset($_SESSION['cart']);
to("../index.php");