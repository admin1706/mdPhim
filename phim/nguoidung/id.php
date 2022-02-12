<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	if(isset($_GET["id"])){

    $bien=$_GET["id"];
	if($bien==phimbo) include('center.php');
	if($bien==phimle) include('center.php');
	if($bien==xemnhieu) include('center.php');
	if($bien==quocgia) include('center.php');
    ?>
    
    <div align="center">
    <table  width="700" cellpadding="0" cellspacing="0">
    <tr height="20" bgcolor="#FFFFFF"><td></td></tr>
    <tr bgcolor="#FFFFFF" align="center" height="300" valign="middle" align="center">
    <td>
    <?php
	if($bien==dangnhap) include('user_login.php');
	if($bien==lienhe) include('lienhe.php');
	if($bien==dangky) include('register.php');
			?>
       </td>
    </tr>
    <tr height="50" bgcolor="#FFFFFF" valign="top" align="center"><td></td></tr>
    </table>
    </div>
    <?php
	}
	else
include("center.php")
?>
</body>
</html>
