<?php 

	require_once('../../connection.php');
	$query_author = "SELECT * FROM authors";
	$result_author = $conn->query($query_author);
	$authors = array();
	while ($row_author = $result_author->fetch_assoc()) {
		$authors[] = $row_author;
	}

 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Wellcom to Phung Anh Minh's blogs </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">Admin - Phùng Anh Minh</h3>
    <h3 align="center">Author List</h3>
    <a href="author_add.php" type="button" class="btn btn-primary">Thêm mới</a>
<?php if(isset($_COOKIE['msg'])){ ?>
    <div class="alert alert-success">
      <strong>Thông báo! </strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
    <hr>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col">Status</th>
          <th scope="col">Option</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        	<?php foreach ($authors as $author) {?>
          <th scope="row"><?= $author['id'] ?></th>
          <td><?= $author['name'] ?></td>
          <td><?= $author['email'] ?></td>
          <td><?= $author['password'] ?></td>
          <td><?= $author['status'] ?></td>
      
          <td>
            <a href="author_detail.php?id=<?= $author['id'] ?>" type="button" class="btn btn-default">Xem</a>
            <a href="author_edit.php?id=<?= $author['id'] ?>" type="button" class="btn btn-success">Sửa</a>
            <a href="author_delete.php?id=<?= $author['id'] ?>" onclick="return confirm('Bạn chắc chắn muốn xóa tài khoản này?');" type="button" class="btn btn-warning">Xóa</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    </div>
</body>
</html>