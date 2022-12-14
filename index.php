<?php
$goods = [['id' => 1,
'name' => 'Шоколад "Весна"',
'desc' => 'Самый вкусный шоколад весеннего настроения. С легкими нотками майских цветочков. Подойдет в качестве подорка на весенние праздники.',
'img' => '/templates/img/goods/Весна.jpg',
'price' => '150 p.'],
['id' => 2,
'name' => 'Шоколад праздничный',
'desc' => 'Шоколад подойдет в качестве отличного подарка на любой праздник каждому. Сочетание главных праздничных вкусов подарит не забываемые ощущения.',
'img' => '/templates/img/goods/праздник.jpg',
'price' => '200 р.'],
['id' => 3,
'name' => 'Шоколад "Летняя поляна"',
'desc' => 'Микс летних ягод с шоколадом обеспечивает взрыв вкусовых рецепторов, что дает вам незабываемые ощущения от нашего шоколада.',
'img' => '/templates/img/goods/поляна.jpg',
'price' => '165 р.'],
];

$page = $_GET ['page'];
if (!isset($page)){
	require('templates/main.php');
}
elseif ($page == 'shop') {
	require('templates/shop.php');
}

elseif ($page == 'product') {
	$id= $_GET['id'];
	$good= [];
foreach ($goods as $product) {
	if ($product['id'] == $id) {
		$good = $product;
		break;}}
		require('templates/tovar1.php');
	}
?>