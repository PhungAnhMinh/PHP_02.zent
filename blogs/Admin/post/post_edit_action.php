<?php 
	require_once('../../connection.php');
	$id = $_POST['id'];
	
	date_default_timezone_set('Asia/Ho_Chi_Minh');
// upload file
	$target_dir = "../../img/";  // thư mục chứa file upload
	$thumbnail="";

	$target_file = $target_dir . basename($_FILES['thumbnail']['name']); // link sẽ upload file lên

	if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
	    $thumbnail = "http://localhost:8080/php_zent/blogs/img/".basename($_FILES["thumbnail"]["name"]);
	}


	$title = $_POST['title'];
	$description = $_POST['description'];
	$contents = $_POST['contents'];

	$status = 0;

 	if(isset($_POST['status'])){
 		$status = $_POST['status'];
}
	
	$author_id = 1;
	$category_id = $_POST['category_id'];

	$created_at = date('Y-m-d H:i:s');
	$query = "UPDATE posts SET title='".$title."', description='".$description."', contents='".$contents."', thumbnail='".$thumbnail."' WHERE id=".$id;
	$row = $conn->query($query);
	if($row==true){
		
		setcookie('msg','Cập nhật thành công', time()+5);

 }else{
 	
		setcookie('msg','Cập nhật không thành công', time()+5);
 }
 header('location:posts.php');
 ?>