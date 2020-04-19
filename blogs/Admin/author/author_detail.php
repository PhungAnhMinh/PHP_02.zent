<?php 
require_once('../../connection.php');
	$id = $_GET['id'];
	$query_author = "SELECT * FROM authors where id=".$id;
	$result_author = $conn->query($query_author)->fetch_assoc();

	
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
    <h3 align="center">Detail Author</h3>
    <h2>Name: <?= $result_author['name'] ?></h2>
    <h2>Email: <?= $result_author['email'] ?></h2>  
    <h2>Password: <?= $result_author['password'] ?></h2>
    <h2>Status: <?= $result_author['status'] ?></h2>
       
    
</body>
</html>