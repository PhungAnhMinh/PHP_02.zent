<?php 
	
	require_once('../../connection.php');

	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$status = 0;
	if(isset($_POST['status'])){
		$status = $_POST;
	}
	$query_author = "INSERT INTO `authors`(name,email,password,status) VALUES ('".$name."','".$email."','".$password."','".$tatus."')";
	$result = $conn->query($query_author);
	if($result == true){
		setcookie('msg', 'Thêm tài khoản thành công!!!', time()+5);
		header('location:authors.php');
	}else{
		setcookie('msg', 'Thêm tài khoản thất bại!!!', time()+5);
		header('location:author_add.php');
	}

 ?>