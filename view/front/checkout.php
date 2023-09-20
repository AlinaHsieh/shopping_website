<form action="./api/checkout.php" method="post">
    <?php
    $row = $User->find(['acc' => $_SESSION['user']]);
    ?>
    <table class="all">
        <tr>
            <td class="tt">訂購帳號</td>
            <td class="pp"><?= $row['acc'] ?></td>
        </tr>
        <tr>
            <td class="tt">收件人姓名</td>
            <td class="pp"><input type="text" name="name" value="<?= $row['name'] ?>"></td>
        </tr>
        <tr>
            <td class="tt">收件人信箱</td>
            <td class="pp"><input type="text" name="email" value="<?= $row['email'] ?>"></td>
        </tr>
        <tr>
            <td class="tt">收件地址</td>
            <td class="pp"><input type="text" name="addr" value="<?= $row['addr'] ?>"></td>
        </tr>
        <tr>
            <td class="tt">收件人電話</td>
            <td class="pp"><input type="text" name="tel" value="<?= $row['tel'] ?>"></td>
        </tr>
    </table>
    <table class="all">
        <tr class="tt ct">
            <td>編號</td>
            <td>商品名稱</td>
            <td>數量</td>
            <td>庫存量</td>
            <td>單價</td>
            <td>小計</td>

        </tr>
        <?php
        $sum = 0;
        foreach ($_SESSION['cart'] as $id => $qt) {
            $row = $Goods->find($id);
        ?>
            <tr class="pp ct">
                <td><?= $row['no']; ?></td>
                <td><?= $row['name']; ?></td>
                <td><?= $qt ?></td>
                <td><?= $row['stock']; ?></td>
                <td><?= $row['price']; ?></td>
                <td><?= $row['price'] * $qt; ?></td>
            </tr>
        <?php
            $sum = $sum + $row['price'] * $qt;
        }
        ?>
    </table>
    <div class="all" style="font-size: 24px;">總金額：<?= $sum; ?></div>
    <div class="ct">
        <input type="submit" value="確認訂購">
        <button type="button" onclick="location.href='?do=buycart'">返回修改訂單</button>
    </div>
</form>