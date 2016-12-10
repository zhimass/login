<?php


$userName = $_POST['username'];
$passWord = $_POST['password'];
// echo $userName;
// echo'<br />';
// echo $passWord;


$dsn = 'mysql:dbname=database;host=localhost;charset=utf8';
$user = 'root';
$password = '';
try {
	$dbh = new PDO($dsn,$user,$password);
} catch (PDOException $e) {  //没有连接成功 报错
	echo $e -> getMessage();
}







// 调用数据库sql查询语句
$sql = 'SELECT * FROM user';
$sth = $dbh ->query($sql);
$flag = 0;
foreach ($sth as $key => $value) {
	if ($value['username'] == $userName && $value
		['password'] == $passWord){
		echo "<script>alert('登陆成功！');location='http://www.baidu.com';</script>";
		$flag = 1;
	}
}
if ($flag !=1){
	echo "<script>alert('登录失败!');history.go(-1);</script>";
};


//  注册
// $sql = 'INSERT INTO user (username,password) VALUES (?,?)';
// $sth = $dbh->prepare($sql);
// $sth -> execute([$userName,$passWord]);


?>


