<?php 
	//Thông số kết nối đến csdl
	$servername = "localhost"; //địa chỉ ip kết nối đến máy chủ chứa csdl
	$username = "root"; //tên đăng nhập
	$password = "";
	$DBlocal = "blogs"; //tên csdl muốn kết nối đến

	//kết nối đến csdl
	$conn = new mysqli( $servername,$username, $password, $DBlocal);
	//truy vấn query
	$query = "SELECT * FROM posts";
	//thực thi câu lệnh
	$result = $conn->query($query);
	//tạo một mảng chứa csdl
	$posts = array();
	
	while ($row = $result->fetch_assoc()) {
			$posts[] = $row;
		}	
	foreach ($posts as $post) {

	
	echo"<pre>";
		print_r($post);
	echo"</pre>";
}

 ?>
 