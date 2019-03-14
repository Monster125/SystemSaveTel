<?php 
$mtime = microtime();
$mtime = explode(" ",$mtime);
$mtime = $mtime[1] + $mtime[0];
$starttime = $mtime;
?>
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
	
		if($_SESSION['Status'] != "ADMIN")
	{
		echo "<meta http-equiv ='refresh'content='0;URL=index.php'>";
		exit();
	}
	
	require_once("Config.php");
	$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
?>

<?php 
	require_once("Config.php");
	
$limit=80;//กำหนดข้อมูลที่จะแสดงในหนึ่งหน้า

if (isset($_GET['page'])){
    $page = $_GET['page'];
} else {
    $page = 0;
}
$sql = "SELECT COUNT(*) AS num_rows FROM telmember";//เรียกข้อมูลจากฐานข้อมูลมาใช้งานและนับข้อมูลในฐานข้อมูล
$re = mysql_query($sql);
$num_rows = mysql_result($re ,0, 'num_rows');
$sum_page = ceil($num_rows/$limit);

$sql = mysql_query("SELECT * FROM telmember");
$records = mysql_num_rows($sql);

echo "<div class='alert alert-info' align='center'>";
echo "<strong>ระบบจัดการบันทึกข้อมูลเบอร์โทรศัพท์พร้อมแสดงผล</strong><br>";
echo "<strong>ขณะนี้!</strong> มีเบอร์โทรศัพท์ทั้งหมด  ";
echo "<strong>$records</strong>";
echo "    เบอร์<br> ";
echo "<strong>สถานะ การส่งทั้งหมด </strong><br>";

$db = new mysqli('localhost', 'root', '097959710', 'system');
	$db->set_charset('utf-8');
	$sql="select Status, count(Status) from telmember group by Status";
	$result=$db->query($sql);
	echo "<table>"; $fst=true;
	while( $row=$result->fetch_assoc()){
    $hd=''; $td='<strong>';
    foreach($row as $key=>$vl){
    if( $fst ) $hd .= '<th></th>';
	$td .= ''.$vl.'&nbsp;&nbsp;&nbsp;';
    }
    if($hd) echo '<tr>',$hd,'</tr>';
    echo '<tr>',$td,'</tr>';
	echo "เบอร์  | </strong>";
    $fst=false;
}
echo '</table>';

echo "<strong>กลุ่มเป้าหมายทั้งหมด :  </strong>";
$db = new mysqli('localhost', 'root', '097959710', 'system');
	$db->set_charset('utf-8');
	$sql="select Target, count(Target) from telmember group by Target";
	$result=$db->query($sql);
	echo "<table>"; $fst=true;
	while( $row=$result->fetch_assoc()){
    $hd=''; $td='<strong>';
    foreach($row as $key=>$vl){
    if( $fst ) $hd .= '<th></th>';
	$td .= ''.$vl.'&nbsp;&nbsp;&nbsp;';
    }
    if($hd) echo '<tr>',$hd,'</tr>';
    echo '<tr>',$td,'</tr>';
	echo "เบอร์  | </strong>";
    $fst=false;
}
echo '</table></div>';


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet" />
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dotdotdot.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
    $('.textcut').dotdotdot({
        ellipsis: '...', /* The HTML to add as ellipsis. */
        wrap : 'word', /* How to cut off the text/html: 'word'/'letter'/'children' */
        watch : true /* Whether to update the ellipsis: true/'window' */
    });
});
</script>
<style type="text/css">
.well {
            background-color: rgb(237, 247, 236);
        }
		
.textcut
{
width:480px;
white-space: wrap;
height: 3em;
font-size:13px;
text-overflow: ellipsis;
}
</style>
<title>ระบบจัดการบันทึกข้อมูลเบอร์โทรศัพท์พร้อมแสดงผล</title>
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
    
    $sql = "SELECT * FROM telmember limit $page,$limit";
    $re = mysql_query($sql);//การเรียกใช้ข้อมูลจากฐานข้อมูลมาใช้งานโดยกำหนดค่าการเรียกใช้

?>	

	<form action="CSVMySQLUpload.php" method="post" enctype="multipart/form-data" name="form1">
	<a class="btn btn-success" href="add.php" role="button">เพิ่มข้อมูลใหม่</a> | ดึงฐานข้อมูลเป็น CSV : <input class="btn btn-primary" name="btnExport" type="button" value="Export" onClick="JavaScript:window.location='CSVMySQLExport.php';">
	| <a class="btn btn-success" href="register.php" role="button">เพิ่ม User</a> | <a class="btn btn-warning" href="editsms.php" role="button">แก้ไข SMS</a> | <a class="btn btn-danger" href="logout.php" role="button">ออกจากระบบ</a> | <a class='btn btn-danger' href='delall.php' onclick="return confirm('คุณแน่ใจหรือไม่ว่าต้องการลบข้อมูลทั้งหมด !!')" role='button'>ลบข้อมูลทั้งหมด</a>
	<hr><h5>นำเข้าฐานข้อมูล CSV</h5>
	<div class="form-inline">
              <div class="form-group">
                <input type="file" name="fileCSV" id="fileCSV" enctype="multipart/form-data">
              </div>
              <button type="submit" class="btn btn-sm btn-primary" id="btnSubmit">Upload</button>
            </div>
</p>
<?php 
echo $link="หน้า : ".$link."<br><p><p>";
?>
<table class="table table-bordered">
    <thead>
      <tr>
    <th width="1%"><p style='font-size:13px;'>เครื่อข่าย</p></th>
    <th width="9%"><p style='font-size:13px;'>เเบอร์โทรศัพท์</p></th>
    <th width="5%"><center><p style='font-size:13px;'>กลุ่ม</p></center></th>
    <th width="18%"><center><p style='font-size:13px;'>ข้อความ SMS</p></center></th>
    <th width="1%"><center><p style='font-size:13px;'>สถานะ</p></center></th>
	<th width="1%"><center><p style='font-size:13px;'>ข้อมูล</p></center></th>
    <th width="7%"><center><p style='font-size:13px;'>แก้ไข</p></center></th>
    <th width="7%"><p style='font-size:13px;'>ลบข้อมูล</p></th>
  </tr>
  </thead>
 
<?php
    while($row= mysql_fetch_assoc($re))// คำสั่งให้แสดงข้อมูล
    {
        echo "<tbody>";
        echo "<tr><td><p style='font-size:13px;'>$row[Global]</p></td>";
        echo "<td><p style='font-size:14px;'>$row[Mobile]</p></td>";
        echo "<td><p style='font-size:14px;'>$row[Target]</p></td>";
        echo "<td><div class='textcut'>$row[SMS]</div></td>";
        echo "<td><p style='font-size:14px;'>$row[Status]</p></td>";
		echo "<td><a class='btn btn-warning' href='view.php?show_id=$row[Id]' data-toggle='modal' data-target='#myModal' role='button'>ดู</a></td>";
        echo"<td><center><a class='btn btn-warning' href='edit.php?show_id=$row[Id]' role='button'>แก้ไข</a></center></td>";//ลิงค์และส่งค่าเพื่อไปแก้ไขข้อมูล
        echo"<td><center><a class='btn btn-danger' href='delete.php?delete_id=$row[Id]' onclick=\"return confirm('คุณต้องการลบข้อมูล!!!!')\" role='button'>ลบ</a></center></td>";//ลิงค์และส่งค่าข้อูมูลเพื่อทำการลบข้อมูล
        echo"</tbody></tr>";
    }
mysql_close();
?>

</table>

<?php
echo $link;
?>
<?php
$mtime = microtime();
$mtime = explode(" ",$mtime);
$mtime = $mtime[1] + $mtime[0];
$endtime = $mtime;
$totaltime = ($endtime - $starttime);
echo "<p align='right'>หน้านี้ประมวลผล ".$totaltime." วินาที</p>";
?>
<p align="right" class="text-muted credit" style="color:#000">&copy; 2016 BlitZRush</p>
</div></div>
<p>&nbsp;</p>

<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">โหลดข้อมูล..</h4>
      </div>
      <div class="modal-body">
        <p>กำลังโหลดข้อมูล...</p>
      </div>
    </div>
      
    </div>
  </div>
  
</div>
</body>
</html>