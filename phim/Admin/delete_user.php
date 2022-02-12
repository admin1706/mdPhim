<?php
     include "conn.inc.php";
	$u=$_GET["username"];
     $query_delete = "DELETE FROM dangkythongtin WHERE username = '$u'";
     $result_delete = mysqli_query($conn,$query_delete) or die(mysqli_error($conn));
	 if($result_delete)  header("Location:index.php?id=listuser");
	 else echo "loi";
?>
