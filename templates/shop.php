<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CL</title>
	<link rel="stylesheet" type="text/css" href="templates/style/style1.css">
</head>
<body>
	<div class="header">
		<a href="/"><p id="Logo">Ch<img id="logo" src="templates/img/logo.svg" alt="Logo">colate LIFE</p></a>
		<div class="but">
			<div id="icon" class="container">
				<a id="sic" href="/"><img id="ic" src="templates/img/home.svg"><p id="tic">Home</p></a>
			</div>
			<div id="icon" class="container">
				<a id="sic" href="index.php?page=shop"><img id="ic" src="templates/img/shop.svg"><p id="tic">Shop</p></a>
			</div>
		</div>
	</div>
	<div class="katalog">
		<h1 id="kat">Каталог</h1>
		<div class="tovari"><?php foreach ($goods as $good): ?>
			<div class="tovar">
				<img id="tov1" src="<?php echo $good['img']; ?>">
				<div class="shopUnitName"><?php echo $good['name']; ?></div>
				<div class="shopUnitShortDesc"><?php echo $good['desc']; ?></div>
				<div class="shopUnitPrice">Цена: <?php echo $good['price']; ?></div>
				<a href="index.php?page=product&id=<?php   echo   $good['id'];   ?>" class="ss">Подробнее...</a>
			</div>
		<?php endforeach; ?></div>
	</div>
</body>
</html>