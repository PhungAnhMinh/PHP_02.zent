
<?php 
require_once('../../connection.php');
	$title = $_POST['title'];
	$description = $_POST['description'];
	$query = "INSERT INTO categories(title,description) VALUES ('".$title."', '".$description."')";
	$row = $conn->query($query);
	if($row==true){
		header('location:categories.php');
		setcookie('msg','Thêm mới thành công', time()+5);

 }else{
 	header('location:category_add.php');
		setcookie('msg','Thêm mới không thành công', time()+5);
 }
 ?>