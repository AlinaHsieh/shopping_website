<!-- 輪播 -->
<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./upload/slider02.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="./upload/slider01.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="./upload/slider03.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<?php
$type = $_GET['type'] ?? 0;
?>
<?php
if ($type == 0) {
    $goods = $Goods->all();
} else {
    $rows = $Type->find($_GET['type']);
    if ($rows['big'] == 0) { //代表大分類 $Good撈大分類id
        $goods = $Goods->all(['big' => $rows['id']]);
    } else {
        $goods = $Goods->all(['mid' => $rows['id']]);
    }
}
?>
<div style="display: flex; flex-wrap:wrap; justify-content:center; margin-top:30px;">
    <?php
    foreach ($goods as $good) {
    ?>

        <div style="padding:15px">
            <div class="" style=""><a href="?do=intro&id=<?= $good['id']; ?>"><img src="<?= "./upload/{$good['img']}" ?>" style="width:300px;border:1px solid white"></a></div>
            <div class="" style="">
                <div class="" style="font-size:18px;padding:5px;">
                    <?= $good['name'] ?>
                </div>
                <div class="" style="">
                    NTD：<?= $good['price'] ?>

                </div>


            </div>
        </div>

    <?php } ?>
</div>