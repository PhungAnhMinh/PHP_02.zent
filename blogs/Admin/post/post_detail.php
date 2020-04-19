<?php 

	require_once('../../connection.php');
	$id = $_GET['id'];
	$query_post = "SELECT * FROM posts Where id =".$id;
	$result_post = $conn->query($query_post)->fetch_assoc();
	
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
    <h3 align="center">Detail Post</h3>
    <h2>Title: <?= $result_post['title'] ?></h2>
    <h2>Description: <?= $result_post['description'] ?></h2> 
    <h2>Contents: <?= $result_post['contents'] ?></h2> 
    <h2>thumbnail: <img src="<?= $result_post['thumbnail'] ?>"></h2> 
    <h2>created_at: <?= $result_post['created_at'] ?></h2>  
       
    
</body>
</html>