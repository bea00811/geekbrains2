


<?php

session_start();


include 'connect.php';

$id_tovara = (int)$_GET['id'];
$get_one_product = get_one_product ($id_tovara);


/**
* Получение отдельного товара
**/
function get_one_product($product_id_ira){
	global $connection;
	$query = "SELECT * FROM photo_main WHERE id = $product_id_ira";
	$res = mysqli_query($connection, $query);
	return mysqli_fetch_assoc($res);
}


?>

<h1>Карточка товара</h1>





 <img src="<?= $get_one_product['path'].'/'.$get_one_product['filename']?>" alt="">


   <li><?= $get_one_product['Title_good']?></li>
    <li><?= $get_one_product['descriptione']?></li>
    <li><?= $get_one_product['price']?>руб.</li>



<form action="cart.php" method="post">
    <input type="hidden"  name="id" value="<?= $get_one_product['id']?>">
    <input type="hidden"  name="name" value="<?= $get_one_product['Title_good']?>">
    <input type="hidden"  name="price" value="<?= $get_one_product['price']?>">
    <input type="number" name="quantaty">

    <button type="submit" name="submit">Добавить в корзину</button>
</form>




<?php
echo __DIR__;




