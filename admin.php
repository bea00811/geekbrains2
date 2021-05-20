

	<?php

 


?>
<table border="2">
  <tr>
    <td>Sr.No.</td>
    <td>Название</td>
    <td>Описание</td>
    <td>Редактировать</td>
    <td>Удалить</td>
  </tr>

<?php

include 'connect.php'; // Using database connection file here

$sql = "SELECT * FROM photo_main ";
$result1 = mysqli_query($connection, $sql);

while($data = mysqli_fetch_array($result1))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
   <td><?php echo $data['Title_good']; ?></td>
    <td><?php echo $data['descriptione']; ?></td>    
    <td><a href="edit.php?id=<?php echo $data['id']; ?>">Редактировать</a></td>
    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Удалить</a></td>
  </tr>	
<?php
}
?>
</table>





<h3>Добавить товар</h3>

<form method="POST" enctype="multipart/form-data" >
  <input type="text" name="title_good_create" value="" placeholder="Название товара" Required>
  <input type="text" name="descriptione_create" value="" placeholder="Описание товара" Required>
  <input type="text" name="price_create" value="" placeholder="Цена товара" Required>
   <input type="file" name="photos" />
  <input type="submit" name="create" value="Create">
</form>


<?php include 'create.php'; ?>








</body>
</html>