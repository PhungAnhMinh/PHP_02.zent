<?php 
	require_once('../../connection.php');
	$query_post = "SELECT * FROM posts";
	$result_post = $conn->query($query_post);
	$posts = array();
	while ($row_post = $result_post->fetch_assoc()) {
		$posts[] = $row_post;
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
    <h3 align="center">Post List</h3>
    <a href="post_add.php" type="button" class="btn btn-primary">Thêm mới</a>
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
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Thumbnail</th>
          <th scope="col">Created_at</th>
          <th scope="col">Option</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        	<?php foreach ($posts as $post) {?>
          <th scope="row"><?= $post['id'] ?></th>
          <td><?= $post['title'] ?></td>
          <td><?= $post['description'] ?></td>
          <td><img width="200px" height="150px" src="<?= $post['thumbnail'] ?>"></td>
          <td><?= $post['created_at'] ?></td>
      
          <td>
            <a href="post_detail.php?id=<?= $post['id'] ?>" type="button" class="btn btn-default">Xem</a>
            <a href="post_edit.php?id=<?= $post['id'] ?>" type="button" class="btn btn-success">Sửa</a>
            <a href="post_delete.php?id=<?= $post['id'] ?>" onclick="return confirm('Bạn chắc chắn muốn xóa bản ghi này?');" type="button" class="btn btn-warning">Xóa</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    </div>
</body>
</html>