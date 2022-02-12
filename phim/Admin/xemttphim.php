<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Untitled Document</title>
</head>

<body>
<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if (!isset($_SESSION))
    header('location:index.php');
include "conn.inc.php";
$_get = $_GET['tenphim'];
?>
<table style="border-collapse: collapse;" align="center" width="750" border="1" bordercolor="#0000CC" cellpadding="1"
       cellspacing="1">
    <tr id="tieude">
        <td colspan="10" align="center"><strong>Thông tin chi tiết bộ phim</strong></td>
    </tr>

    <?php

    $sql = "Select * from tenphim where tenphim='$_get'";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    while ($row = mysqli_fetch_array($result))
    {
    ?>
    <tr>
        <td align="center">
            <img src="<?php echo "upload/" . $row['hinhanh']; ?>" width="128" hight="200"/><br/>
            <?php echo $row['tenphim']; ?><br/>
            <? echo $row['mota']; ?><br/>
            <? echo $row['theloai']; ?><br/>
            <?php } ?>
        </td>
    </tr>
    <tr>
        <td align="center"><a href="index.php?id=quanlyphim"><input type="button" value="Quay lai"/></a></td>
    </tr>
</table>
</body>
</html>
