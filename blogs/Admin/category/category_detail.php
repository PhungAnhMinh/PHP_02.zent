<?php 

	require_once('../../connection.php');
	$id = $_GET['id'];
	$query_category = "SELECT * FROM categories Where id =".$id;
	$result_cate = $conn->query($query_category)->fetch_assoc();
	
?>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome to Phung Anh Minh's blogs</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">Admin: Phùng Anh Minh</h3>
    <h3 align="center">Detail Category</h3>
    <h2>Title: <?= $result_cate['title'] ?></h2>
    <h2>Description: <?= $result_cate['description'] ?></h2>  
       
    
</body>
</html>