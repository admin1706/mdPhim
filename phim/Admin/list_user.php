<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Xuất danh sách người dùng đăng ký</title>
</head>

<body>
<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if(!isset($_SESSION)) 
header('location:center.php');
?>
<div align="center">
<font size="+3">Quản lý người dùng:</font><br />
<a href="index.php">Kích vào đây</a> để trở vể trang chủ<br><br>
</div>
<?php 
	require("conn.inc.php");
	$sql="select * from dangkythongtin order by username asc";
	$kq=mysqli_query($conn,$sql)or die(mysqli_error($conn));
	if(mysqli_num_rows($kq)>0)
	{
?>
<table width="100%" border="1">
<tr> <td>Tên đăng nhập</td>
	<td>Họ</td>
    <td>Tên</td>
    <td>Ngày sinh</td>
    <td>Giới tính</td>
    <td>Tỉnh thành phố</td>
     <td>Sửa</td>
    <td>Xóa</td>
    <td>xem</td>
</tr>
<?php 
while ($row=mysqli_fetch_array($kq))
{
echo"
 <tr><td>$row[username]</td>
	 <td>$row[first_name]</td>
	 <td>$row[last_name]</td>
	 <td>$row[ngaysinh]</td>
	 <td>$row[gioitinh]</td>
	 <td>$row[tinhtp]</td>
	 <td><a href=index.php?username=$row[username]&id=update>update</a></td>
	 <td><a href=\"delete_user.php?username=$row[username]\" onClick=\"return confirm('Ban chac chan muon xoa?');\">delete</a></td>
	 <td><a href=index.php?username=$row[username]&id=xem>Xem</a></td>
</tr>";
}
echo"</table>";
}
?>
</body>
</html>