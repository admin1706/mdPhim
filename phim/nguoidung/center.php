<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
error_reporting(E_ERROR | E_PARSE);
if(!isset($_SESSION)) session_start();
include "conn.inc.php";
if(!isset($_GET['id'])){
	echo " <div align=\"left\"><font color=\"#FFFFFF\" size=\"+2\"> Phim mới cập nhật:</font></div>";
	$sql = "select * from tenphim";
	$query = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($query)){

								echo "<div style=\"width: 190px; height: 260px; float: left; margin: 10px 20px 10px 20px; border:solid 1px #0099CC\">";
								echo "<img src=\"../Admin/upload/" . $row['hinhanh'] . "\" width=190px height=200px style=\"margin: 0px 0px 0px 0px\" alt=\"<p>Phim mới</p>\" />";
								echo "<span style=\"margin: 10px\"><font color=\"#FFFFFF\">Tên phim: " . $row['tenphim'] . "</font></span><br>
								<span style=\"margin: 28px\">lượt xem: " . $row['id'] . "</span>";
								echo "</div>";
							}
							echo "</div>";
							echo "<div style=\"clear: both\"></div>";
							}
							else
						{		
							$tl=$_GET['id'];
							if($tl=="phimbo")echo "<font color=\"#FFFFFF\" size=\"+2\"> Phim bộ:</font>"; 
							else if($tl=="phimle")echo "<font color=\"#FFFFFF\" size=\"+2\">Phim lẻ:</font>";
							else if($tl=="xemnhieu")echo "<font color=\"#FFFFFF\" size=\"+2\">Phim xem nhiều:</font>";
							$sql1 = "select * from tenphim where theloai = '$tl'";  
							$query1 = mysqli_query($conn,$sql1);
							echo "<div>";
							while($row1 = mysqli_fetch_array($query1))
							{
								echo "<div style=\"width: 190px; float: left; margin: 10px 20px 10px 20px; border:solid 1px #0099CC\">";
								echo "<img src=\"../Admin/upload/" . $row1['hinhanh'] . "\" width=190px height=200px style=\"margin: 0px 0px 0px 0px\" alt=\"<p>Phim mới</p>\" />";
								echo "<span style=\"margin: 10px\"><font color=\"#FFFFFF\">Tên phim: " . $row['tenphim'] . "</font></span><br>
								<span style=\"margin: 28px\">lượt xem: " . $row1['id'] . "</span>";
								echo "</div>";
							}
							echo "</div>";
							echo "<div style=\"clear: both\"></div>";
						}
									echo "</div>";
					echo "<div style=\"clear: both\"></div>";
				
 ?>

	<div align="center"><a href="#top"></a><a href="#" class="vedautrang"><font color="#CCCCFF">Về đầu trang</font></a></div>

</body>
</html>
