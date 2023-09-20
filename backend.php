<?php
include_once "./base.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0057)?do=admin -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>┌精品電子商務網站」</title>
	<link href="./css/css.css" rel="stylesheet" type="text/css">
	<script src="./js/js.js"></script>
	<script src="./js/jquery-3.4.1.min.js"></script>
</head>

<body>
	<iframe name="back" style="display:none;"></iframe>
	<div id="main">
		<div id="top" style="background-color:#ffead0; padding:30px; margin:auto">
			
			<span style="font-size: 48px; ; ">後臺管理中心</span>
		</div>
		<div id="left" class="ct">
			<div style="min-height:400px;">
				<a href="./index.php">前台首頁</a>
				<a href="?do=admin">管理權限設置</a>
				<a href="?do=th">商品分類與管理</a>
				<a href="?do=order">訂單管理</a>
				<a href="?do=user">會員管理</a>
				<a href="?do=bot">頁尾版權管理</a>
				<a href="./api/logout.php?do=admin" style="color:#f00;">登出</a>
			</div>
		</div>
		<div id="right">
			<?php
                        $do = $_GET['do']??'admin';
                        $file = "./view/back/{$do}.php";
                        $table = ucfirst($do);

                        if(isset($$table)){
                                $$table->back();
                        }elseif(file_exists($file)){
                                include($file);
                        }else{
                                include "./view/back/admin.php";
                        }
                ?>
		</div>
		<div id="bottom" style="line-height:70px;background-color:#CE631C; color:#FFF;" class="ct">
            <?= $Bottom->bot(); ?> 
        </div>
	</div>

</body>

</html>