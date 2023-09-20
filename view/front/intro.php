<?php
$good = $Goods->find($_GET['id']);
?>
<div class="intro" style="display: flex">
    <div class="" style="width:50%"><a href="?do=intro&id=<?= $good['id']; ?>"><img src="<?= "./upload/{$good['img']}" ?>" style="width:90%;border:1px solid white"></a></div>
    <div class="" style="width:50%">
        <div>
            <h2> <?= $good['name'] ?></h2>
        </div>
        <div class="" style="border:1px solid white">
            <?= $Type->find($good['big'])['name'] . ">" . $Type->find($good['mid'])['name'] ?>
        </div>
        <div class="" style="border:1px solid white">
            編號：<?= $good['no'] ?>
        </div>
        <div class="" style="border:1px solid white">
            價格：<?= $good['price'] ?>
        </div>
        <div class="" style="border:1px solid white">
            說明：
            <pre><?= $good['intro'] ?></pre>
        </div>
        <div class="" style="border:1px solid white">
            庫存量：<?= $good['stock'] ?>
        </div>
        <div class="">
            購買數量：
            <input type="number" name="qt" id="qt" value="1">
        </div>
        <div>
        <a href="Javascript:buy(<?= $good['id'] ?>)"><img src="./icon/0402.jpg"></a>
        </div>
    </div>
</div>


<script>
    function buy(id) {
        qt = $("#qt").val();
        location.href = `?do=buycart&id=${id}&qt=${qt}`;
    }
</script>