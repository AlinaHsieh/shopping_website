
<?php
$row = $Order->find(['no'=>$_GET['no']]);
$row['cart'] = unserialize($row['cart']);
?>
<table class="all">
    <tr>
        <td class="tt">訂單編號</td>
        <td class="pp"><?=$row['no'];?></td>
    </tr>
    <tr>
        <td class="tt">訂購會員</td>
        <td class="pp"><?=$row['acc'];?></td>
    </tr>
    <tr>
        <td class="tt">收件人姓名</td>
        <td class="pp"><?=$row['name'];?></td>
    </tr>
    <tr>
        <td class="tt">收件人地址</td>
        <td class="pp"><?=$row['addr'];?></td>
    </tr>
    <tr>
        <td class="tt">收件人電話</td>
        <td class="pp"><?=$row['tel'];?></td>
    </tr>
    <tr>
        <td class="tt">訂購商品明細</td>
        <td class="pp">
            <?php
            foreach($row['cart'] as $id=>$qt){
                $good = $Goods->find($id);
                echo "<p>";
                echo $good['name'] . " X ". $qt ;
                echo "</p>";
            }
            ?>
        </td>
    </tr>
</table>