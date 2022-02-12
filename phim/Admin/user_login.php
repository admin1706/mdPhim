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
if (isset($_POST['submit']))
{
     $query = "SELECT username, password FROM admin WHERE username = '" .
          $_POST['username'] . "' AND password ='". $_POST['password']
          ."';";
     $result = mysqli_query($conn,$query) or die(mysqli_error($conn));

     if (mysqli_num_rows($result) == 1)
     {
          $_SESSION["log_user"] = $_POST['username'];
          $_SESSION["log_password"] = $_POST['password'];
          header("Refresh: 5; URL=index.php");
          echo "Đăng nhập thành công. Bạn đang được chuyển đến trang chủ!<br>";
          echo "(Nếu thấy lâu có thể, <a href=\"index.php\">nhấn vào đây</a>)";
     }
     else
     {
?>
          Username hoặc password không hợp lệ<br>
          <form action="index.php?id=login" method="post">
          Username: <label>
                  <input type="text" name="username">
              </label><br>
          Password: <label>
                  <input type="password" name="password">
              </label><br><br>
          <input type="submit" name="submit" value="Login">
          <input type="reset" name="reset" value="Hủy">
          </form>
<?php
     }
}
else
{

?>
	<div align="center"><h1>&nbsp;&nbsp;&nbsp;&nbsp;Đăng nhập:</h1></div>
     Nhập username và Password...<br>
  
     <form action="index.php?id=login" method="post">    
     Username: <label>
             <input type="text" name="username">
         </label><br>
     Password: <label>
             <input type="password" name="password">
         </label><br><br>
     <div align="center">
     <input type="submit" name="submit" value="Login">
     <input type="reset" name="reset" value="Hủy">
     </div>
     </form>
     <?php 
	 }
?>
</body>
</html>
