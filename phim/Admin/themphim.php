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
?>
<form name="f" action="index.php?id=themphim2" method="post" enctype="multipart/form-data">
<table style="border-collapse: collapse;"  align="center" width="500" border="1" bordercolor="#003366" cellpadding="1" cellspacing="1" >
  <tr id="tieude">
  	<td colspan="10" align="center" ><strong>Thêm phim mới</strong></td>
  </tr>

    <tr>
		<td>Tên phim:</td>
        <td><input type="text" name="tenphim" /></td>
    </tr>
    <tr>
    	<td>Mô Tả:</td>
        <td> <textarea name="mota" rows="2" cols="40"></textarea>
        </td>
     </tr>
	<tr>
    	<td>Loại phim</td>
        <td><select name="theloai" size="1" onChange="replace(this.options.selectedIndex)">
    						<?php $sqlstr2=mysqli_query($conn,"SELECT * FROM theloai");
	   											static $i=0;
												
	   											while($row_2=mysqli_fetch_array($sqlstr2))
												{ 
													$array[$i]=	$row_2['theloai'];
													$i=$i+1;	
													echo  "<option  value=".$row_2['theloai'].">".$row_2['theloai']."</option>";	
												}
											
									?>	
    				</select>
        </td>
    </tr>

	
    <tr>
		<td>Hình ảnh:</td>
        <td><input type="file" name="hinhanh" /></td>
    </tr>
 
</table><br />
    <input type="submit" name="submit" value="Them" />
 			<a href="index.php?id=quanlyphim"><input type="button" value="Quay lai"/></a>	
 
 </form>
</body>
</html>
