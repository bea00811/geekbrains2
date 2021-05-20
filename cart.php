<h1>Корзина товаров</h1>


<?php
/**
* Распечатка массива
**/
function print_arr1($array){
  echo "<pre>" . print_r($array, true) . "</pre>";
}

print_arr1 ($_POST);

if(isset($_REQUEST['submit'])){

 $_SESSION['id'] = $_POST['id'];
$_SESSION['name'] = $_POST['name'];
$_SESSION['price'] = $_POST['price'];
$_SESSION['quantaty'] = $_POST['quantaty'];

}

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




