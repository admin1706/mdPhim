<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nhập thông tin và lưu vào SQL</title>
</head>
<body>
<?php
include ("conn.inc.php");
?>
<?php
if (isset($_POST['submit']) && ($_POST['submit'] == "OK"))
{
     if ($_POST['username'] != "" && $_POST['password'] != "" &&
$_POST['first_name'] != "" && $_POST['last_name'] != "" &&
     $_POST['email'] != "")
     {
          $check_user = $_POST['username'];

          $query = "SELECT username FROM dangkythongtin WHERE username ='$check_user';";
          $result = mysqli_query($conn,$query) or die(mysqli_error($conn));

          if (mysqli_num_rows($result) != 0)
          {
?>
               <font color="#ff0000"><b>Username <?php echo $_POST['username']; ?> đã tồn tại, xin mời chọn username khác!</b></font>
               <form action="index.php?id=dangky" method="post">
               Username: <input type="text" name="username"><br /><br />
               Password:&nbsp;<input type="password" name="password" size="21" value="<?php echo $_POST['password']; ?>"><br /><br />
               Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="email" value="<?php echo $_POST['email']; ?>"><br><br />
               Họ: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="first_name" value="<?php echo $_POST['first_name']; ?>"><br><br />
               Tên: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="last_name" value="<?php echo $_POST['last_name']; ?>"><br/><br />
               Sinh ngày:&nbsp;<input type="text" name="ngay" value="<?php echo $_POST["ngay"]; ?>"  size="5"/> &nbsp; tháng:&nbsp; <input type="text" name="thang" value="<?php echo $_POST["thang"]			;?>"  size="5"/> &nbsp; năm:&nbsp; <input type="text" name="nam" value="<?php echo $_POST["nam"]; ?>"  size="5"/> <br /><br />
               Giới tính: <font color="#3333FF">Nam:</font> <input type="radio" name="gioitinh" value="nam"/> 
                           <font color="#3300FF">Nữ:</font> <input type="radio" name="gioitinh" value="nu"/> <br/><br/>
               Chỗ ở hiện tại: <input type="text" name="city" value="<?php echo $_POST['city']; ?>"><br /><br />
                          Sở thích: (Chọn ít nhất một cái)<br>
                <input type="checkbox" name="sothich[]" value="thethao"/> <font color="#3300FF"> Thể thao</font> &nbsp;&nbsp;<input type="checkbox" name="sothich[]" 			value="nghenhac"/><font color="#3300CC"> Nghe nhạc</font> <br /><br /> 
               <input type="checkbox" name="sothich[]" value="muasam"/> <font color="#3300CC">Mua sắm</font> &nbsp;&nbsp; <input type="checkbox" name="sothich[]" value="dulich" /> <font color="#3300CC"> Du lịch</font> &nbsp; <input type="checkbox" name="sothich[]" value="khac" /> <font color="#3300CC">Khác</font><br/><br />
				<p>Mô tả bản thân:</p>
 				<textarea rows="5" cols="30" name="mota"></textarea><br/><br/>
				<input type="submit" name="submit" value="OK" width="50" height="20"> &nbsp; <input type="reset" name="reset" value="Clear" width="50" height="20">
               </form>
<?php
          }
          else
          {
		  $u=$_POST['username'];
		  $p=$_POST['password'];
		  $f=$_POST['first_name'];
		  $l=$_POST['last_name'];
		  $e=$_POST['email'];
		  $ngay=$_POST['ngay'];
		  $thang=$_POST['thang'];
		  $nam=$_POST['nam'];
		  $ns=$nam."-".$thang."-".$ngay;
		  $ngaysinh=$ns;
		  $g=$_POST['gioitinh'];
		  $c=$_POST['city'];
		  $s=implode(",", $_POST['sothich']);
		  $mota=$_POST['mota'];
          $query = "INSERT INTO dangkythongtin(username, password, first_name,last_name,mail, ngaysinh, gioitinh, tinhtp, sothich,mota) VALUES ('$u', (password('$p')),'$f', '$l',  '$e', '$ngaysinh','$g','$c', '$s','$mota')";
          $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
          $_SESSION['user_logged'] = $_POST['username'];
          $_SESSION['user_password'] = $_POST['password'];
?>
         Đăng ký thành công!
         Chào mừng   <?php echo $_POST['username'];header("Refresh: 5; URL=index.php"); ?> đã đến với Website!<br>
         Bạn đang được chuyển đến trang chủ. Nếu thấy lâu có thể nhấn vào  <a href="index.php">đây </a>.
<?php
          }
     }
     else
     {
?>          <font color="#ff0000"><b>Các thông tin Username, Password, Email, First Name, và
          Last Name phải nhập đầy đủ!</b></font>
           <form action="index.php?id=dangky" method="post">
               Username: <input type="text" name="username"><br /><br />
               Password:&nbsp;<input type="password" name="password" size="21" value="<?php echo $_POST['password']; ?>"><br /><br />
               Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="email" value="<?php echo $_POST['email']; ?>"><br><br />
               Họ: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="first_name" value="<?php echo $_POST['first_name']; ?>"><br><br />
               Tên:&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="last_name" value="<?php echo $_POST['last_name']; ?>"><br/><br />
               Sinh ngày:&nbsp;<input type="text" name="ngay" value="<?php echo $_POST["ngay"]; ?>" size="5" /> &nbsp; tháng:&nbsp; <input type="text" name="thang" value="<?php echo $_POST["thang"]			;?>"  size="5"/> &nbsp; năm:&nbsp; <input type="text" name="nam" value="<?php echo $_POST["nam"]; ?>" size="5" /> <br /><br />
               Giới tính: <font color="#3333FF">Nam:</font> <input type="radio" name="gioitinh" value="nam"/> 
                           <font color="#3300FF">Nữ:</font> <input type="radio" name="gioitinh" value="nu"/> <br/><br/>
               Chỗ ở hiện tại: <input type="text" name="city" value="<?php echo $_POST['city']; ?>"><br /><br />
                          Sở thích: (Chọn ít nhất một cái)<br>
               <input type="checkbox" name="sothich[]" value="thethao"/> <font color="#3300FF"> Thểthao</font> &nbsp;&nbsp;<input type="checkbox" name="sothich[]" 			value="nghenhac"/><font color="#3300CC"> Nghe nhạc</font> <br /><br /> 
               <input type="checkbox" name="sothich[]" value="muasam"/> <font color="#3300CC">Mua sắm</font> &nbsp;&nbsp; <input type="checkbox" name="sothich[]" value="dulich" /> <font color="#3300CC"> Du lịch</font> &nbsp;  <input type="checkbox" name="sothich[]" value="khac" /> <font color="#3300CC">Khác</font><br/><br />
				<p>Mô tả bản thân:</p>
 				<textarea rows="5" cols="30" name="mota"></textarea><br/><br/>
				<input type="submit" name="submit" value="OK" width="50" height="20"> &nbsp; <input type="reset" name="reset" value="Clear" width="50" height="20">
               </form>
<?php
     }
}
else
{
?>
<h2>Chào mừng đến với trang đăng ký tài khoản!</h2>
Các thông tin Username, Password, Email, First Name, và Last Name phải nhập đầy đủ!<br><br />
			   <form action="index.php?id=dangky" method="post">
               Username: <input type="text" name="username"><br /><br />
               Password:&nbsp;<input type="password" name="password" size="21" ><br /><br />
               Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="email"><br><br />
               Họ: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="first_name" ><br><br />
               Tên: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="last_name"><br/><br />
               Sinh ngày:&nbsp;<input type="text" name="ngay" size="5" /> &nbsp; tháng:&nbsp; <input type="text" name="thang" size="5"/>  &nbsp; năm:&nbsp; <input type="text" name="nam"  size="5"/> <br /><br />
               Giới tính: <font color="#3333FF">Nam:</font> <input type="radio" name="gioitinh" value="nam"/> 
                           <font color="#3300FF">Nữ:</font> <input type="radio" name="gioitinh" value="nu"/> <br/><br/>
               Chỗ ở hiện tại: <input type="text" name="city" ><br /><br />
                          Sở thích: (Chọn ít nhất một cái)<br>
               <input type="checkbox" name="sothich[]" value="thethao"/> <font color="#3300FF"> Thểthao</font> &nbsp;&nbsp;<input type="checkbox" name="sothich[]" 			value="nghenhac"/><font color="#3300CC"> Nghe nhạc</font> <br /><br /> 
               <input type="checkbox" name="sothich[]" value="muasam"/> <font color="#3300CC">Mua sắm</font> &nbsp;&nbsp; <input type="checkbox" name="sothich[]" value="dulich" /> <font color="#3300CC"> Du lịch</font> &nbsp; <input type="checkbox" name="sothich[]" value="khac" /> <font color="#3300CC">Khác</font><br/><br />
				<p>Mô tả bản thân:</p>
 				<textarea rows="5" cols="30" name="mota"></textarea><br/><br/>
				<input type="submit" name="submit" value="OK" width="50" height="20"> &nbsp; <input type="reset" name="reset" value="Clear" width="50" height="20">
               </form>
<?php
}
?>
</body>
</html>
