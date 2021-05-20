
<?php

include 'connect.php'; // Using database connection file here




if (!empty($_FILES['photos'])) {
  move_uploaded_file($_FILES['photos']['tmp_name'], 'images/'.$_FILES['photos']['name']);
   echo "фотография успешно загружена";
}
else {
    echo "фотография не загружена";
}
?>






<?php

if(isset($_POST['create'])) // when click on Update button
{

    $title_good_create = $_POST['title_good_create'];
    $descriptione_create = $_POST['descriptione_create'];
     $price_create = $_POST['price_create'];
    $photo_name1 = $_FILES['photos']['name'];
    
  
    $edit1 = mysqli_query($connection, "INSERT INTO photo_main (filename,path,Title_good,descriptione, price)
     VALUES ('$photo_name1','images', '$title_good_create','$descriptione_create', '$price_create')");


     if($edit1)
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




