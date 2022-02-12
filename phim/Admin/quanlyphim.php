<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>quản lý sản phẩm</title>
</head>

<body>
<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if(!isset($_SESSION)) 
header('location:index.php');
include "conn.inc.php";
?>
<font size="+3">Đây là trang quản lý phim</font><br />
Tại đây bạn có thể xem thông tin phim, thêm, sửa, xóa phim. <br />
Trở về <a href="index.php">trang chủ</a>
<table  align="center" width="700" border="1" bordercolor="#003300" cellpadding="1" cellspacing="1" >
					<tr id="tieude"><td  class="height_row" colspan="10" > <strong>Quản lý phim</strong></td>
    				</tr>
                    <tr><td colspan="10">
                    <form>
                    	<a href="index.php?id=themphim"><input type="button" value="Thêm phim mới"/></a>
                       
                    </form>
                    </td></tr>
                    
					<tr id="tieude" align="center">
                        <td >Tên phim</td>
                        <td >Mô tả</td>
                        <td>thể loại</td>
      					<td width="13%">Hình Ảnh </td>
                        <td width="25%">Thao Tác</td>   
                    </tr>
					<?php
						//đoạn lệnh để phân trang
			$baitren_mottrang = 10;
			//lấy biến trang
			if(empty($_REQUEST['page']))
				$page = 0 ;
			else
				$page = $_REQUEST['page'];
			//Lấy tổng số hàng để chia số bài trên 1 trang sẽ ra số trang	
			$sodu_lieu = mysqli_num_rows(mysqli_query($conn,"select * from tenphim") ) or die(mysqli_error($conn));
			$sotrang = $sodu_lieu/$baitren_mottrang;
			
                    	$sql="select * from tenphim limit ".$page*$baitren_mottrang." , ". $baitren_mottrang;
						$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
						while($row=mysqli_fetch_array($result))
					{
					?>
                    		
                            <tr align="center">
                                <td><?php echo $row['tenphim']; ?></td>
                                <td><?php echo $row['mota']; ?></td>
                        		<td><?php echo $row['theloai']; ?></td>
                                <td><img src="<?php echo "upload/" . $row['hinhanh'];?>" height="40" border="0" width="40"/></td>
                                <td><div align="center">
                                	<a href="index.php?id=xemttphim&tenphim=<?php echo $row['tenphim'];?>">Xem</a>
   					 				<a href="index.php?id=suaphim&tenphim=<?php echo $row['tenphim'];?>">Sửa</a>
                                    <a href="xoaphim.php?tenphim=<?php echo $row['tenphim'];?>" onClick="return confirm('Bạn có chắc chắn muốn xóa không?');">Xóa</a>	
                        	</div></td>
                            </tr>
                    <?php } ?>
                    </table>
                    
                    <table align="center" border="1">
                    <tr>
                    <td align="right">
                    <?php
						echo "Trang : ";
			for ( $page = 0; $page <= $sotrang; $page ++ )
			{
				echo " <a href='index.php?page=$page&id=quanlyphim'>". ($page+1) ."</a> ";
			}
					?>
                    </td>
                    </tr>
                    </table><br />
                    	
           </body>
</html>
