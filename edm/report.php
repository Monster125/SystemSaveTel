<p>&nbsp; </p>

<div class="container">
<div class="span8 well">
<?php
	session_start();
	if($_SESSION['UserID'] == "")
	{
		echo "<meta http-equiv ='refresh'content='0;URL=login.php'>";
		exit();
	}

	if($_SESSION['UserID'] == "ADMIN")
	{
		echo "<meta http-equiv ='refresh'content='0;URL=index.php'>";
		exit();
	}	
	
	require_once("../Config.php");
	$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
?>

<?php 
	
$limit=80;//กำหนดข้อมูลที่จะแสดงในหนึ่งหน้า

if (isset($_GET['page'])){
    $page = $_GET['page'];
} else {
    $page = 0;
}
$sql = "SELECT COUNT(*) AS num_rows FROM report";//เรียกข้อมูลจากฐานข้อมูลมาใช้งานและนับข้อมูลในฐานข้อมูล
$re = mysql_query($sql);
$num_rows = mysql_result($re ,0, 'num_rows');
$sum_page = ceil($num_rows/$limit);

$sql = mysql_query("SELECT * FROM report");
$records = mysql_num_rows($sql);
echo "<div class='alert alert-info' align='center'>";
echo "<strong>รายงานการส่ง EDM</strong><br>";
echo "<strong>ขณะนี้!</strong> มี EDM ทั้งหมด ";
echo "<strong>$records</strong>";
echo "  ฉบับ<br> ";
echo "</div>";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/bootstrap.min.css" rel="stylesheet" />
<style type="text/css">
.well {
            background-color: rgb(237, 247, 236);
        }
</style>
<title>รายงานข้อมูลการส่ง EDM</title>
</head>

<body>
<p>
 <?php 
    if(!$page or $page==1){
        $page=0;
    } else{ 
        $page=($page *$limit)-$limit;
    }
    $link="";
    for($i=1;$i<=$sum_page;$i++) { 
        $link.="[ <a href='?page=$i'>".$i."</a> ] ";
    }//การส่งค่าแบบ GET
	
	echo $link="หน้า : ".$link;
		

    $sql = "SELECT * FROM report limit $page,$limit";
    $re = mysql_query($sql);//การเรียกใช้ข้อมูลจากฐานข้อมูลมาใช้งานโดยกำหนดค่าการเรียกใช้
?>	

	<form action="CSVMySQLUpload.php" method="post" enctype="multipart/form-data" name="form1">
	<a class="btn btn-success" href="addedm.php" role="button">เพิ่ม EDM ใหม่</a> | ดึงฐานข้อมูลเป็น CSV : <input class="btn btn-primary" name="btnExport" type="button" value="Export" onClick="JavaScript:window.location='CSVMySQLExport.php';">
	 | <a class="btn btn-danger" href="index.php" role="button">ออกจากระบบ</a>
</p>
<table class="table table-bordered">
    <thead>
      <tr>
    <th width="35%"><center><p style='font-size:13px;'>หัวข้อ EDM</p></center></th>
    <th width="5%" ><center><p style='font-size:13px;'>วันที่ส่ง</p></center></th>
	<th width="3%"><center><p style='font-size:13px;'>แก้ไข</p></center></th>
	<th width="3%"><center><p style='font-size:13px;'>ลบ</p></center></th>
  </tr>
  </thead>
 
<?php
    while($row= mysql_fetch_assoc($re))// คำสั่งให้แสดงข้อมูล
    {
        echo "<tbody>";
        echo "<tr><td><p style='font-size:16px;'>$row[topic_edm]</p></td>";
        echo "<td><p style='font-size:16px;'><center>$row[date]</center></p></td>";
        echo"<td><a class='btn btn-warning' href='editreport.php?show_id=$row[Id]' role='button'>แก้ไขข้อมูล</a></td>";//ลิงค์และส่งค่าเพื่อไปแก้ไขข้อมูล
        echo"<td><center><a class='btn btn-danger' href='delete.php?delete_id=$row[Id]' onclick=\"return confirm('คุณต้องการลบข้อมูลนี้ใช่ไหม?')\" role='button'>ลบ</a></center></td>";//ลิงค์และส่งค่าข้อูมูลเพื่อทำการลบข้อมูล
        echo"</tbody></tr>";
    }
mysql_close();
?>
</table>
<?php
echo $link;
?>
<p align="right" class="text-muted credit" style="color:#000">&copy; 2016 Livinginsider Co., Ltd.</p>
</div></div>
<p>&nbsp;</p>
</body>
</html>