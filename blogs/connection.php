<?php 
	//Thông số kết nối đến csdl
	$servername = "localhost"; //địa chỉ ip kết nối đến máy chủ chứa csdl
	$username = "root"; //tên đăng nhập
	$password = "";
	$DBlocal = "blogs"; //tên csdl muốn kết nối đến

	//kết nối đến csdl
	$conn = new mysqli( $servername,$username, $password, $DBlocal);

	


 ?>
