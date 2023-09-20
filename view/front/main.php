
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
<div style="display: flex; flex-wrap:wrap; ">
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