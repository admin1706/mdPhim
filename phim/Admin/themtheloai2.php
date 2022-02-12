<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if(!isset($_SESSION)) 
header('location:index.php');
include "conn.inc.php";
	$tl=$_POST['tentl'];
	$sql="insert into theloai(theloai) value('".$tl."')";
	mysqli_query($conn,$sql) or die(mysqli_error($conn));
	header("Refresh: 5; URL=index.php?id=quanlytl");
          echo "Thêm thành công. Bạn đang được chuyển đến trang quản lý thể loại!<br>";
          echo "(Nếu trình duyệt không hỗ trợ, <a href=\"index.php?id=quanlytl\">Nhấn vào đây</a>)";
     die();
?>

</body>
</html>
