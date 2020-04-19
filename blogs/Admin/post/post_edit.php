<?php 
	require_once('../../connection.php');
	$id = $_GET['id'];
	$query_post = "SELECT * FROM posts Where id =".$id;
	$result_post = $conn->query($query_post)->fetch_assoc();


    require_once('../../connection.php');
    $query_category = "SELECT * FROM categories";
    $result_cate = $conn->query($query_category);
    $categories = array();
    while ($row_cate = $result_cate->fetch_assoc()) {
        $categories[] = $row_cate;
    }


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
    <h3 align="center">Update Post</h3>
    <hr>
    <?php if(isset($_COOKIE['msg'])) {?>
        <div class="alert alert-warning">
          <strong>Thông báo</strong> <?=$_COOKIE['msg'] ?>
        </div>
    <?php } ?>
        <form action="post_edit_action.php" method="POST" role="form" enctype="multipart/form-data">
        	<input type="hidden" name="id" value="<?= $result_post['id'] ?>">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title" value="<?= $result_post['title'] ?>">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description" value="<?= $result_post['description'] ?>">
            </div>
            <div class="form-group" width="200px" height="150px">
                <label for="">Contents</label>
                <textarea rows="20px" class="form-control" id="" placeholder="" name="contents"><?= $result_post['contents'] ?></textarea>
            </div>
             <div class="form-group">
                <label for="">Category</label>
                <select name="category_id" class="form-control">
                <?php foreach ($categories as $cate) {?>
                  <option value="<?= $cate['id'] ?>"><?= $cate['title'] ?></option>
                <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail" value="<?= $result_post['thumbnail'] ?>">
            </div>
            <div class="form-group">
                <label for="">Hiển thị bài viết</label>
                <input type="Checkbox" id="" placeholder="" name="status" value="1" >
                <em>(Check để hiển thị bài viết)</em>
  
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>