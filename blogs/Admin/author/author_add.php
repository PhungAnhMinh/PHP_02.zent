
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
    <h3 align="center">Add New Author</h3>
    <hr>
    <?php if(isset($_COOKIE['msg'])){ ?>
        <div class="alert alert-warning">
          <strong>Thất bại</strong> <?= $_COOKIE['msg']?>
        </div>
    <?php } ?>
        <form action="author_add_action.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name">
            </div>
            <div class="form-group">
                <label for="">email</label>
                <input type="email" class="form-control" id="" placeholder="" name="email">
            </div>
            <div class="form-group">
                <label for="">password</label>
                <input type="password" class="form-control" id="" placeholder="" name="password">
                <input type="button" id="showPassword" value="show" class="button" />
            </div>

            <div class="form-group">
                 <label for="">Quyền truy cập</label>
                <input type="Checkbox" id="" placeholder="" name="status" value="1" >
                <em>(Check để cấp quyền truy cập)</em>
                
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>