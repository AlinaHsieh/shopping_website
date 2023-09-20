<?php
$rows = $Order->all(['acc' => $_SESSION['user']]);
$user = $User->find(['acc'=>$_SESSION['user']]);
?>

<h2>會員中心</h2>

<table class="all">
    <tr>
        <td class="tt" colspan="2">會員資料</td>
    </tr>
    <tr>
        <td class="pp">帳號名稱</td>
        <td class="pp"><?=$user['acc']?></a></td>
        
    </tr>
    <tr>

        <td class="pp">姓名</td>
        <td class="pp"><?=$user['name']?></td>
        
    </tr>
    <tr>

        <td class="pp">email</td>
        <td class="pp"><?=$user['email']?></td>

    </tr>
    <tr>

        <td class="pp">電話</td>
        <td class="pp"><?=$user['tel']?></td>

    </tr>
    <tr>
        <td class="pp">地址</td>
        <td class="pp"><?=$user['addr']?></td>

    </tr>
    <?php
    if (isset($rows)) {
        foreach ($rows as $row) {
    ?>

    <?php
        }
    }
    ?>
</table>

<table class="all">
    <tr>
        <td class="tt" colspan="2">歷史訂單</td>
    </tr>
    <tr>
        <td class="pp">訂單編號</td>
        <td class="pp">訂購日期</td>
    </tr>
    <?php
    if (isset($rows)) {
        foreach ($rows as $row) {
    ?>
            <tr>
                <td class="pp"><a href="?do=order_detail&no=<?=$row['no']?>" style='color:blue'><?=$row['no']?></a></td>
                <td class="pp"><?=$row['orddate']?></td>
            </tr>
    <?php
        }
    }
    ?>
</table>
