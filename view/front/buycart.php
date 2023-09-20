<?php
// unset($_SESSION['cart']);
if(isset($_GET['id']) && isset($_GET['qt'])){ //先將拿到的值存進session裡,再判斷是否有登入
    $_SESSION['cart'][$_GET['id']]=$_GET['qt']; //商品id為Ｘ的有Ｙ件
}

if(!isset($_SESSION['user'])){
    to("?do=login");
}

echo "<h2 class='ct'>{$_SESSION['user']}的購物車</h2>";

if(!empty($_SESSION['cart'])){
?>
<table class="all">
    <tr class="tt ct">
        <td>編號</td>
        <td>商品名稱</td>
        <td>數量</td>
        <td>庫存量</td>
        <td>單價</td>
        <td>小計</td>
        <td>刪除</td>
    </tr>
    <?php
    foreach($_SESSION['cart'] as $id=>$qt){   
        $row = $Goods->find($id);     
    ?>
    <tr class="pp ct">
        <td><?=$row['no'];?></td>
        <td><?=$row['name'];?></td>
        <td><?=$qt?></td>
        <td><?=$row['stock'];?></td>
        <td><?=$row['price'];?></td>
        <td><?=$row['price']*$qt;?></td>
        <td><img src="./icon/0415.jpg" onclick="delCart(<?=$row['id']?>)"></td>
    </tr>
    <?php
    }
    ?>
</table>
<div class="ct">
<button type="button" class="btn btn-outline-secondary btn-sm" onclick="location.href='./index.php'">繼續選購商品</button>
<button type="button" class="btn btn-secondary btn-sm" onclick="location.href='?do=checkout'">結帳</button>

</div>
<?php
}else{
    echo "購物車中無商品";
    echo "<div class='ct'><a href='./index.php'><img src='./icon/0411.jpg'></a></div>";
}
?>

<script>
    function delCart(id){
        // console.log("ok");
    $.post("./api/delcart.php",{id},()=>{
        location.href='index.php?do=buycart';
    })
    }
</script>