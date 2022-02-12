<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Cập nhật thông tin tài khoản</title>
</head>
<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if (!isset($_SESSION))
    header('location:index.php');
include "conn.inc.php";
?>
<body>
<h1>Cập nhật thông tin tài khoản</h1>
Tại đây bạn có thể chỉnh sửa thông tin của người dùng.<br>
<a href="index.php">Kich day</a> để trở về trang chủ. <br>
<?php
if (isset($_POST['submit']) && ($_POST['submit'] == "Update")) {
    $query_update = "UPDATE dangkythongtin SET first_name = '" . $_POST['first_name'] . "',
	  last_name= '" . $_POST['last_name'] . "', mail = '" . $_POST['mail'] . "',  gioitinh = '" . $_POST['gioitinh'] . "', tinhtp = '" . $_POST['tinh'] . "', sothich ='" . implode(",", $_POST['sothich']) . "'  WHERE username = '" . $_POST["username"] . "'";
    $result_update = mysqli_query($conn, $query_update) or die(mysqli_error($conn));
    $query = "SELECT * FROM dangkythongtin WHERE username = '" . $_POST["username"] . "'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $row = mysqli_fetch_array($result);
    $m = explode(",", $row["sothich"]);

    ?>
    <b>Tài khoản của bạn vừa được cập nhật.</b><br>
    <form action="index.php?id=update" method="post">

        Họ: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="first_name"
                                                                               value="<?php echo $row["first_name"]; ?>"/><br/><br/>
        Tên: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="last_name"
                                                                    value="<?php echo $row["last_name"]; ?>"/><br/><br/>
        Mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mail"
                                                        value="<?php echo $row["mail"]; ?>"/><br/><br/>
        Giới tính:<input type="text" name="gioitinh" value="<?php echo $row["gioitinh"]; ?>"/><br/><br/>
        Nơi ở: &nbsp;&nbsp;&nbsp;<input type="text" name="tinh" value="<?php echo $row["tinhtp"]; ?> "/><br/><br/>
        Sở thích:<br/>

        <input type="checkbox" name="sothich[]" value="thethao" <?php if (in_array("thethao", $m)) echo "checked"; ?>/>Thể
        thao &nbsp;&nbsp;
        <input type="checkbox" name="sothich[]"
               value="nghenhac" <?php if (in_array("nghenhac", $m)) echo "checked"; ?>/> Nghe nhạc &nbsp;&nbsp;<br/>
        <input type="checkbox" name="sothich[]" value="dulich" <?php if (in_array("dulich", $m)) echo "checked"; ?>/> Du
        lịch &nbsp;&nbsp;
        <input type="checkbox" name="sothich[]" value="khac" <?php if (in_array("khac", $m)) echo "checked"; ?>/> Khác
        &nbsp;&nbsp;<br/><br/>
        <input type="text" name="mota" value="<?php echo $row["mota"]; ?>"/> <br/><br/>
        <input type="submit" name="submit" value="Update"> &nbsp; &nbsp;
        <input type="button" value="Cancel" onClick="history.go(-1);">
    </form>
    <?php
} else {
    $username = $_GET["username"];
    $query = "SELECT * FROM dangkythongtin WHERE username = '$username'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $row = mysqli_fetch_array($result);
    $m = explode(",", $row["sothich"]);
    ?>
    <form action="index.php?id=update" method="post">

        <input type="hidden" name="username" value="<?php echo $username ?>"/><br/><br/>
        Họ: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
            <input type="text" name="first_name" value="<?php echo $row["first_name"]; ?>"/>
        </label><br/><br/>
        Tên: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
            <input type="text" name="last_name" value="<?php echo $row["last_name"]; ?>"/>
        </label><br/><br/>
        Mail: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
            <input type="text" name="mail" value="<?php echo $row["mail"]; ?>"/>
        </label><br/><br/>
        Giới tính: <label>
            <input type="text" name="gioitinh" value="<?php echo $row["gioitinh"]; ?>"/>
        </label><br/><br/>
        Nơi ở: &nbsp;&nbsp;&nbsp; <label>
            <input type="text" name="tinh" value="<?php echo $row["tinhtp"]; ?> "/>
        </label><br/><br/>
        Sở thích: <br/>

        <label>
            <input type="checkbox" name="sothich[]"
                   value="thethao" <?php if (in_array("thethao", $m)) echo "checked"; ?>/>
        </label>Thể thao &nbsp;&nbsp;
        <label>
            <input type="checkbox" name="sothich[]"
                   value="nghenhac" <?php if (in_array("nghenhac", $m)) echo "checked"; ?>/>
        </label> Nghe nhạc &nbsp;&nbsp;<br/>
        <label>
            <input type="checkbox" name="sothich[]"
                   value="dulich" <?php if (in_array("dulich", $m)) echo "checked"; ?>/>
        </label> Du lịch &nbsp;&nbsp;
        <label>
            <input type="checkbox" name="sothich[]" value="khac" <?php if (in_array("khac", $m)) echo "checked"; ?>/>
        </label> Khác &nbsp;&nbsp;<br/><br/>
        <label>
            <input type="text" name="mota" value="<?php echo $row["mota"]; ?>"/>
        </label><br/><br/>
        <input type="submit" name="submit" value="Update"> &nbsp; &nbsp;
        <input type="button" value="Cancel" onClick="history.go(-1);">
    </form>
    <?php
}
?>
</body>
</html>