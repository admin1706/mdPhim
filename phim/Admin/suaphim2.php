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
$get=$_POST['tenphim'];
$get2=$_POST['tenphim2'];
	$mota=$_POST['mota'];
	$tl=$_POST['theloai'];
	$hinh=$_POST['hinhanh'];
	
	  $allowedExts = array("jpg", "jpeg", "gif", "png"); // mang chua cac loai file co the duoc upload
   $hinhanh= $_FILES["hinhanh"]["name"]; // lay ten file
   if($hinhanh !=""){       //neu co hinh anh
	 $m=explode(".", $hinhanh); 
     $extension=$m[sizeof($m)-1]; // tach phan duoi mo rong cua hinh anh
	
	 if ((($_FILES["hinhanh"]["type"] == "image/gif")
	    || ($_FILES["hinhanh"]["type"] == "image/jpeg")
	    || ($_FILES["hinhanh"]["type"] == "image/png")
	    || ($_FILES["hinhanh"]["type"] == "image/jpg"))
	    && in_array($extension, $allowedExts)) // kiem tra loai hinh anh va duoi mo rong duoc cho phep upload
  	 {
  		if ($_FILES["hinhanh"]["error"] > 0) //neu hinh bi loi
    	{
    		echo "Return Code: " . $_FILES["hinhanh"]["error"] . "<br />";
    	}
  		else if (file_exists("images/" . $_FILES["hinhanh"]["name"])) //neu hinh anh da duoc upload
      	{
      		echo $_FILES["hinhanh"]["name"] . " da ton tai. ";
			die();
      	}
		else
		{
			move_uploaded_file($_FILES["hinhanh"]["tmp_name"],"upload/" . $_FILES["hinhanh"]["name"]); // copy hinh anh den thu muc chua web
		}
  	}
	}
	
	 $sql_edit="update tenphim set tenphim='".$get2."',mota='".$mota."', theloai = '" . $tl . "', hinhanh='".$hinh."' where tenphim = '" . $get . "'";
	mysqli_query($conn,$sql_edit) or die(mysqli_error($conn));
	echo "<script>alert('Sửa thành công')</script>";
	header("Location: index.php?id=quanlyphim");
?>

</body>
</html>
