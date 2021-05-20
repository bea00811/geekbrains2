
<?php

include 'connect.php'; // Using database connection file here

$id = $_GET['id']; // get id through query string

print_r($_GET['id']);

$sql = "SELECT * FROM photo_main ORDER BY opened DESC";
$result1 = mysqli_query($connection, $sql);





if(isset($_GET['id'])) // when click on Update button
{
	
   
	
    $edit = mysqli_query($connection,"DELETE FROM photo_main where id='$id'");
	
    if($edit)
    {
        mysqli_close($connection); // Close connection
        header("location:admin.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>
