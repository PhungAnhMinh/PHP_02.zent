<?php 
require_once('../../connection.php');
	$status = 0;

 	if(isset($_POST['status'])){
 		$status = $_POST['status'];
}
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	
	$id = $_POST['id'];
	$query = "UPDATE authors SET name='".$name."', email='".$email."', password='".$password."', status='".$status."' WHERE id=".$id;
	$result = $conn->query($query);
	if($result == true){
		setcookie('msg', 'Sửa thành công', time()+5);
		header('location:authors.php');
	}else{
		setcookie('msg','Sửa không thành công', time()+5);
		header('location:author_edit.php');
	}
 ?>