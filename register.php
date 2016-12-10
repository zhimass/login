
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>

<style>
    .s_center {
        margin-left: auto;
        margin-right: auto;
    }
</style>
<div class="s_center container">

    <form class="form-signin" method="post" action="./regcheck.php">
        <h2 class="form-signin-heading">请注册</h2>
        <label class="sr-only">用户名</label>
        <input type="text"  class="form-control" name="username" placeholder="请填写用户名" required autofocus>
        <br />
        <label  class="sr-only">密码</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="密码" required>
        <br />
        <input class="btn btn-lg btn-primary btn-block" id="login-button" type="submit" name="submit" value="注册">
        </form>
</div>
</body>
</html>