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
$_get=$_GET['tenphim'];
	$array=array(50);
	$sql="Select * from tenphim where tenphim='$_get'";
	$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
	$row=mysqli_fetch_array($result);
?>
<form name="f" action="index.php?id=suaphim2" method="POST" enctype="multipart/form-data">
<table style="border-collapse: collapse;"  align="center" width="500" border="1" bordercolor="#003333" cellpadding="1" cellspacing="1" >
	<tr id="tieude"><td align="center" colspan="10" > <strong>Sửa thông tin phim</strong></td>
    				</tr>
    <tr >
	   			<td><div align="right">Tên phim:&nbsp;&nbsp;</div></td>
	   			<td>
	    			<input type="text" name="tenphim2"  value="<?php echo $row['tenphim']; ?>"   size="40">   </td>
	</tr>
     <tr >
	   			<td><div align="right"> thể loại:&nbsp;&nbsp;</div></td>
    			<td>
                    <label>
                        <select name="theloai" size="1" onchange="replace(this.options.selectedIndex)">
                                <?php $sqlstr2=mysqli_query($conn,"SELECT * FROM theloai");
                                                       static $i=0;

                                                       while($row_2=mysqli_fetch_array($sqlstr2))
                                                    {
                                                        $array[$i]=	$row_2['theloai'];
                                                        $i=$i+1;
                                                        echo  "<option value=".$row_2['theloai']." ".($row_2['theloai']==$row['theloai']?'Selected':'').">".$row_2['theloai']."</option>";
                                                    }

                                        ?>
                        </select>
                    </label>
                </td>
      </tr>
	<tr style="border:solid 1px #0099CC">
    	<td>Mô Tả:</td>
        <td><label>
                <textarea name="mota" rows="2" cols="40"><?php echo $row['mota']; ?></textarea>
            </label>
        </td>
     </tr>
	    <tr>
		<td>Hình ảnh:</td>
        <td><input type="file" name="hinhanh"  value="<?php echo "upload/" . $row['hinhanh']; ?>"/></td>
    </tr>
       
           <tr>
        	<td>&nbsp;</td>
            <input type="hidden" value="<?php echo $row['tenphim'];?>" name="tenphim" />
        	<td><input type="submit" value="Sua" name="submit" />
       			<a href="index.php?id=quanlyphim"><input type="button" value="Quay lai"/></a>
         	</td>
         </tr>
     </table> 
</form>

</body>
</html>
