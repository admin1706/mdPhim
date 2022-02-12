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
header('location:center.php');
include "conn.inc.php";
?>
<body>
<table align="center" width="500" border="1" bordercolor="#660033" cellpadding="1" cellspacing="1" >
                    <tr id="tieude"><td colspan="10" > <strong>Quản lí thể loại phim</strong></td>
    				</tr>
                    <tr><td colspan="10">
                    <form>
                    	<a href="index.php?id=themtheloai"><input type="button" value="Them the loai"/></a>
                        
                    </form>
                    </td></tr>
					<tr id="tieude">
                         <td width="5%" height="27" ><div align="center">Tên danh mục</div></td>
                        <td width="3%" ><div align="center">Thao Tác</div></td>
                    </tr>
                    <?php	
                    	$sql="select * from theloai";
						$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
						while($row=mysqli_fetch_array($result))
					{
					?>
								<tr>
                           			<td><div align="center"><?php echo $row['theloai']; ?></td></div>
                                    <td><div align="center">
					 				<a href="index.php?loaiphim=<?php echo $row['theloai'];?>&id=suatheloai">Sửa</a>
                                    <a href="xoatheloai.php?theloai=<?php echo $row['theloai'];?>" onClick="return confirm('Bạn có chắc chắn muốn xóa không?');">Xóa</a>	
                        </div>
                            		</td>
                                </tr>
                      <?php } ?>
					  </table><br />
                      <a href="index.php">Trở vể trang chủ</a><br><br>
 </body>
</html>
