<?php 
require_once('../../connection.php');

	$id = $_GET['id'];
	$query = "DELETE FROM `authors` WHERE id =".$id;
	$result = $conn->query($query);
	if($result==true){
		setcookie('msg','Xóa tài khoản thành công!!!', time()+5);
		
	}else{
		setcookie('msg','Xóa tài khoản không thành công!!!', time()+5);
	}
	header('location:authors.php');
 ?>