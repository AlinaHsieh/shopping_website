<table class="all">
    <tr>
        <td class="tt">訂單編號</td>
        <td class="tt">訂購會員</td>
        <td class="tt">訂購日期</td>
        <td class="tt">操作</td>
    </tr>
<?php
foreach($rows as $row){
?>
    <tr>
        <td class="pp"><a href="?do=order_detail&no=<?=$row['no'];?>" style='color:blue'><?=$row['no'];?></a></td>
        <td class="pp"><?=$row['acc'];?></td>
        <td class="pp"><?=$row['orddate']?></td>
        <td class="pp">
            <button onclick="del('Order',<?=$row['id']?>)">刪除</button>
        </td>
    </tr>
<?php
}
?>
</table>