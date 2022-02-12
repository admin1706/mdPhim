<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Liệt kê thông tin cá nhân</title>
</head>
<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if(!isset($_SESSION)) header('location:center.php');
include "conn.inc.php";
?>
<body>
<h1>Đây là trang quản lý thông tin cá nhân</h1>
Tại đây bạn có thể xem và chỉnh sửa thông tin cá nhân của <?php echo $_GET["username"];?>.<br>
Thông tin cá nhân hiện tại là như sau:<br>
<a href="index.php">Kích vào đây</a> để trở vể trang chủ<br><br>
<?php 
$user=$_GET["username"];
$sql="SELECT * FROM dangkythongtin WHERE username='$user'";
$kq=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$row=mysqli_fetch_array($kq);
?>
Username: <?php echo $row['username']; ?><br>
Họ: <?php echo $row['first_name']; ?><br>
Tên: <?php echo $row['last_name']; ?><br>
Mail: <?php echo $row['mail']; ?><br>
Ngày sinh: <?php echo $row['ngaysinh']; ?><br>
Giới tính: <?php echo $row['gioitinh']; ?><br>
Nơi ở: <?php echo $row['tinhtp']; ?><br>
Sở thích: <?php echo $row['sothich']; ?><br>
<a href="index.php?username=<?php echo $user ?>&id=update">Cập nhật thông tin tài khoản</a>&nbsp;|&nbsp;
<a href="index.php?id=listuser">Xem thông tin user khác</a>&nbsp;|&nbsp;
</body>
</html>
