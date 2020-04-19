<?php 
	require_once('../../connection.php');
	$id = $_POST['id'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	$query = "UPDATE categories SET title='".$title."', description='".$description."' WHERE id=".$id;
	$row = $conn->query($query);
	if($row==true){
		
		setcookie('msg','Cập nhật thành công', time()+5);

 }else{
 	
		setcookie('msg','Cập nhật không thành công', time()+5);
 }
 header('location:categories.php');
 ?>