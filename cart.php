<h1>Корзина товаров</h1>


<?php


session_start();
/**
* Распечатка массива
**/
function print_arr1($array){
  echo "<pre>" . print_r($array, true) . "</pre>";
}

print_arr1 ($_POST);

$_SESSION = $_POST;
/*if(isset($_REQUEST['submit'])){

 $_SESSION['id'] = $_POST['id'];
$_SESSION['name'] = $_POST['name'];
$_SESSION['price'] = $_POST['price'];
$_SESSION['quantaty'] = $_POST['quantaty'];

}
*/



if(isset($_REQUEST['submit'])){
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = []; // тут создаем пустой массив корзины, если его еще нет.
    }
    if (!empty($_SESSION['cart'][$_POST['id']])) {
        $_SESSION['cart'][$_POST['id']]['quantaty']++; // продукт уже есть в корзине - увеличиваем количество на единичку
    } else {
        $_SESSION['cart'][$_POST['id']] = [
            'quantaty' => 1, // новый продукт добавляем в корзину
        ];
    }
}
print_arr1 ($_SESSION);
?>





<?php

if(isset($_SESSION['name']) && isset($_SESSION['quantaty'] )&& isset($_SESSION['price'] )){

  ?>


<table border="2">
  <tr>
 
    <td>Название</td>
    <td>Описание</td>
    <td>Цена</td>
    <td>Удалить</td>
  </tr>


  <tr>
   <td><?php echo $_SESSION['name'];?></td>
   <td><?php echo $_SESSION['price'];?></td>
   <td><?php echo $_SESSION['quantaty'];?></td>    
    <td><a href="cart.php?id=<?php echo $_SESSION['id']; ?>">удалить</a></td>    
    
  </tr>	

</table>





<?php


}
else{
  
  echo'В сессии ничего нет, поэтому и напечатали это сообщение';
}








