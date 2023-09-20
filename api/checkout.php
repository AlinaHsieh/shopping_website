<?php include_once "../base.php";
$_POST['orddate'] = date("Y-m-d");
$_POST['cart'] = ($_SESSION['cart']);
$ids= array_keys($_POST['cart']);
// dd($ids);
foreach($ids as $id){
    $good = $Goods->find($id);
    // dd($good);
    $good['stock']= $good['stock']-$_POST['cart'][$id];
    // echo $good['stock'];
    $Goods->save($good);
}

$_POST['cart'] = serialize($_SESSION['cart']);
$_POST['no'] = date("Ymd").rand(1000,9999);
$_POST['acc'] = $_SESSION['user'];
$Order->save($_POST);

unset($_SESSION['cart']);
?>
    <script>
        alert("訂購成功!");
        location.href='../index.php';
    </script>