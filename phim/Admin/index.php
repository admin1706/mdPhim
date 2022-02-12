<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css.css" type="text/css" rel="stylesheet"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản trị website xemphimpro.vn</title>
</head>

<body>
<?php
error_reporting(E_ERROR | E_PARSE);
if(!isset($_SESSION)) session_start();
?>
<table align="center" border="1" width="1000" cellpadding="0" cellspacing="0">
<tr><td>
<?php
include("top.php");
?>
</td></tr>
<tr>
<td width="1000" height="400"  bgcolor="#99CC99" align="center">
<?php
include("center.php")
?>
</td>
</tr>
<tr height="60">
<td colspan="3" bgcolor="#996600">
<?php
include("bottom.php")
?>
</td>
</tr>
</table>
</body>
</html>
