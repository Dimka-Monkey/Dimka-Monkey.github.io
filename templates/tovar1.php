<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tovar</title>
	<link rel="stylesheet" type="text/css" href="templates/style/style2.css">
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
	<div class="info">
		<div ><img class="foto" src="<?php echo $good['img']; ?>" alt="Tovar"></div>
		<div class="inform">
			<h1><?php echo $good['name']; ?></h1>
			<p class="infa"><?php echo $good['desc']; ?></p>
			<p class="price">Цена: <?php echo $good['price']; ?></p>
		</div>
	</div>
</body>
</html>