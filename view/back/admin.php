<div class="ct">
    <button class="btn btn-outline-secondary" onclick="location.href='?do=add_admin'">新增管理員</button>
</div>
<table class="all">
    <tr>
        <td class="tt">帳號</td>
        <td class="tt">密碼</td>
        <td class="tt">管理</td>
    </tr>
    <?php
    foreach($rows as $row){
    ?>
    <tr>
        <td class="pp"><?=$row['acc']?></td>
        <td class="pp"><?=str_repeat("*",strlen($row['pw']))?></td>
        <td class="pp">
            <?php
            if($row['acc']!='admin'){
            ?>
                <button class="btn btn-outline-secondary" onclick="location.href='?do=edit_admin&id=<?=$row['id']?>'">修改</button>
                <button class="btn btn-outline-secondary" onclick="del('Admin',<?=$row['id']?>)">刪除</button>
            <?php
            }else{
                echo "此帳號為最高權限";
            }
            ?>
        </td>
    </tr>
    <?php     } ?>
</table>