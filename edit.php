
<?php

include 'connect.php'; // Using database connection file here

$id = $_GET['id']; // get id through query string

$sql = "SELECT * FROM photo_main ";
$result1 = mysqli_query($connection, $sql);




/*выбирает с помощью встроенной функции mysqli_fetch_all   все строки из переменной $res и помещает их в массив, с помощью MYSQLI_ASSOC делаем из простого ассоциативный массив  */
$data = mysqli_fetch_all($result1, MYSQLI_ASSOC);



$sql = "SELECT * FROM photo_main ORDER BY opened DESC";
$result1 = mysqli_query($connection, $sql);


?>




<h3>Редактировать товар</h3>

<form method="POST" enctype="multipart/form-data" >
  <input type="text" name="Title_good" value="" placeholder="Введите название" Required>
  <input type="text" name="descriptione" value="" placeholder="Введите описание" Required>
   <input type="text" name="price" value="" placeholder="Введите цену" Required>
   <input type="file" name="photos" />
  <input type="submit" name="update" value="Редактировать товар">
</form>


<h3>Добавить товар</h3>

<form method="POST" enctype="multipart/form-data" >
  <input type="text" name="title_good_create" value="" placeholder="Введите название" Required>
  <input type="text" name="descriptione_create" value="" placeholder="Введите описание" Required>
   <input type="text" name="price" value="" placeholder="Введите цену" Required>
   <input type="file" name="photos" />
  <input type="submit" name="create" value="Добавить товар">
</form>

<?php

if (!empty ($_FILES)) {
    echo "массив не пуст";

} else {
    echo "ошибка <br>";
}



if (!empty($_FILES['photos'])) {
  move_uploaded_file($_FILES['photos']['tmp_name'], 'images/'.$_FILES['photos']['name']);
   echo "фотография успешно загружена";
}
else {
    echo "фотография не загружена";
}

 


if(isset($_POST['update'])) // when click on Update button
{
    $Title_good = $_POST['Title_good'];
    $descriptione = $_POST['descriptione'];
    $price = $_POST['price'];
    $photo_name1 = $_FILES['photos']['name'];
	
       $edit = mysqli_query($connection,"update photo_main set filename='$photo_name1',price='$price',Title_good='$Title_good', descriptione='$descriptione' where id='$id'");
	
    if($edit)
    {
        mysqli_close($connection); // Close connection
    
        exit;
    }

   
    else
    {
        echo mysqli_error();
    }    	
}
?>




<?php

if(isset($_POST['create'])) // when click on Update button
{

    $title_good_create = $_POST['title_good_create'];
    $descriptione_create = $_POST['descriptione_create'];
     $price_create = $_POST['price_create'];
    $photo_name = $_FILES['photos']['name'];
    
  
    $edit1 = mysqli_query($connection, "INSERT INTO photo_main (filename,path,Title_good,descriptione, price)
     VALUES ('$photo_name','images', '$title_good_create','$descriptione_create', '$price_create')");


     if($edit)
    {
        mysqli_close($connection); // Close connection
 
        exit;
    }

   
    else
    {
        echo mysqli_error();
    }     
  
    
}


?>




