<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
   <link href="css/main.css" rel="stylesheet" />
</head>
<body>

	<?php

 
include 'connect.php';



$sql = "SELECT * FROM photo_main ";
$result1 = mysqli_query($connection, $sql);


/*выбирает с помощью встроенной функции mysqli_fetch_all   все строки из переменной $res и помещает их в массив, с помощью MYSQLI_ASSOC делаем из простого ассоциативный массив  */
$datas = mysqli_fetch_all($result1, MYSQLI_ASSOC);
?>





<div>
	<h1>Галерея</h1>
	<ul class="wrapper box" class="width:500px;">
		<?php


		foreach( $datas as $c ) {

?>
		<li>

			<?php 
				echo '<img height="150"  src="'.$c['path'].'/'.$c['filename'].'" alt="">';
				echo '<a href="item.php?id='.$c['id'].'"><p>'.$c['Title_good'].'<br></p></a>';
				echo '<p>'.$c['descriptione'].'<br></p>';

			?>	

		</li>

<?php

	}
 ?>

     </ul>
	

</div>







	
</body>
</html>