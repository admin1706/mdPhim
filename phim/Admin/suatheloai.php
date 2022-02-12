<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if(!isset($_SESSION)) 
header('location:index.php');
include "conn.inc.php";
?>
<body>
<?php 
	$get=$_GET['loaiphim'];
	$array=array(50);
	$sql="Select * from theloai where theloai='".$get."'";
	$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
	$row=mysqli_fetch_array($result);
?>
<form name="f" action="index.php?id=suatheloai2" method="POST">
	<table width="500"  border="1" cellspacing="0" cellpadding="0"  align="center">
    <tr id="tieude"  ><td  colspan="2" align="center"  >&nbsp;&nbsp;&nbsp;<span id="TextLeftCenter2m">Sửa thể loại phim </span> </td>  </tr>
    <tr>
    			<td height="28"><div align="center">Tên thể loại:&nbsp;&nbsp;</div></td>
	   			<td>
	    			<input type="text" name="tentl"  value="<?php echo $row['theloai']?>"   size="40">   </td>
    </tr>
    <tr><td align="center" colspan="2">
    <input type="hidden" value="<?php echo $row['theloai'];?>" name="theloai2"/>
        <input type="submit" value="Sua" name="submit" />
       <a href="index.php?id=quanlytl"><input type="button" value="Quay lai" name="back" /></a>
       </td></tr>
    </table>
</form>
</body>
</html>
