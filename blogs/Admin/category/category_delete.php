<?php 
	require_once('../../connection.php');
	$id = $_GET['id'];
	$query = "DELETE FROM categories WHERE id =".$id;
	$row = $conn->query($query);
	if($row==true){
		setcookie('msg','Xóa thành công', time()+5);

 }else{
 	
		setcookie('msg','Xóa không thành công', time()+5);
 }
 header('location:categories.php');
 ?>