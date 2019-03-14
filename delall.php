<html>
<head>
<title>Delete All</title>
</head>
<body>
<?php
require_once("Config.php");
$strSQL = "DELETE FROM telmember ";
$objQuery = mysql_query($strSQL);
if($objQuery)
{
	echo "<script type='text/javascript'>alert('ลบข้อมูลในฐานข้อมูลทั้งหมดเรียบร้อยแล้ว')</script>";
	echo "<meta http-equiv ='refresh'content='0;URL=index_admin.php'>";
}
else
{
	echo "<script type='text/javascript'>alert('เกิดข้อผิดพลาดในการลบข้อมูล')</script>";
}
mysql_close($objConnect);
?>
</body>
</html>