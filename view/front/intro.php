<?php
$good = $Goods->find($_GET['id']);
?>
<div class="intro" style="display: flex">
    <div class="" style="width:60%"><a href="?do=intro&id=<?= $good['id']; ?>"><img src="<?= "./upload/{$good['img']}" ?>" style="width:90%;border:1px solid white"></a></div>
    <div class="" style="width:40%">
        <div>
            <h2> <?= $good['name'] ?></h2>
        </div>
        <div class="" style="border:1px solid white; font-size:18px">
            <?= $Type->find($good['big'])['name'] . ">" . $Type->find($good['mid'])['name'] ?>
        </div>
        <div class="" style="border:1px solid white; font-size:18px">
            編號：<?= $good['no'] ?>
        </div>
        <div class="" style="border:1px solid white; font-size:18px">
            價格：<?= $good['price'] ?>
        </div>
        <div class="" style="border:1px solid white; font-size:18px">
            說明：
            <pre><?= $good['intro'] ?></pre>
        </div>
        <div class="" style="border:1px solid white; font-size:18px">
            庫存量：<?= $good['stock'] ?>
        </div>
        <div class="">
            購買數量：
            <input type="number" name="qt" id="qt" value="1">
        </div>
        <div>
        <a ><button class="btn btn-outline-secondary btn-sm" onclick="location.href='Javascript:buy(<?= $good['id'] ?>)'">我要購買</button></a>
        </div>
    </div>
</div>


<script>
    function buy(id) {
        qt = $("#qt").val();
        $.post("./api/chkqt.php",{id,qt},(res)=>{
            if(parseInt(res)){
                location.href = `?do=buycart&id=${id}&qt=${qt}`;
            }else{
                alert("超過可訂購數量");
                location.reload();
            }
        })
    }
</script>