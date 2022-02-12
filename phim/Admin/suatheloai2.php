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
	$_get=$_POST['theloai2'];
	 $ten=$_POST['tentl'];
	 $sql_edit="update theloai set theloai='".$ten."' where theloai='".$_get."'";
	 mysqli_query($conn,$sql_edit) or die(mysqli_error($conn));
	header("Location: index.php?id=quanlytl");
?>
</body>
</html>
