<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="1000">
<tr align="center">
<td>
<?php
error_reporting(E_ERROR | E_PARSE);
if(!isset($_SESSION)) session_start();

	if(isset($_GET["id"])){
	$bien=$_GET["id"];

	if($bien==listuser) include ('list_user.php');
	if($bien==login) include ('user_login.php');
	if($bien==update) include ('update_user.php');
	if($bien==xem) include ('xem_user.php');
	if($bien==quanlytl) include ('quanlytl.php');
	if($bien==suatheloai) include ('suatheloai.php');
	if($bien==suatheloai2) include ('suatheloai2.php');	
	if($bien==themtheloai) include ('themtheloai.php');
	if($bien==themtheloai2) include ('themtheloai2.php');
	if($bien==quanlyphim) include ('quanlyphim.php');
	if($bien==themphim) include ('themphim.php');
	if($bien==themphim2) include ('themphim2.php');
	if($bien==xemttphim) include ('xemttphim.php');
	if($bien==suaphim) include ('suaphim.php');
	if($bien==suaphim2) include ('suaphim2.php');
			
?>

<?php
	}
	else
if (!isset($_SESSION["log_user"])  || !isset($_SESSION["log_password"]))
include("user_login.php");
else
include("logged_user.php");
?>
</td>
</tr>
</table>
</body>
</html>
