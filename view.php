<?php
	session_start();
	if($_SESSION['UserID'] == "")
	{
		echo "<meta http-equiv ='refresh'content='0;URL=login.php'>";
		exit();
	}	
	
	require_once("Config.php");
	$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
?>

<?php
$show_id=$_GET['show_id'];//รับค่าGETที่ส่งมาจากไฟล์โชว์
require_once("Config.php");
$sql="SELECT*FROM telmember WHERE Id=$show_id";//เรียกข้อมูลจากฟอร์มโดยกำหนดเงื่อนไข
$sql_query=mysql_query($sql); 
$row=mysql_fetch_assoc($sql_query);
mysql_close(); 
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.min.css" rel="stylesheet" />
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<title>รายละเอียด SMS</title>
</head>

<body>

	<div class="modal-content">
      <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<input type="hidden" name="Id" value="<?php echo"$row[Id]"; ?>"/>
		<h4 class="modal-title">รายละเอียด SMS</h4>
		</div>
		<div class="modal-body">
		<label for="txtSMS">ข้อความ SMS :</label>
		<textarea readonly class="form-control" rows="5" name="txtSMS" id="txtSMS" cols="45" rows="5"><?php echo"$row[SMS]"; ?></textarea>
		<div class="modal-footer">
		<a href="index_admin.php" class="btn btn-default" >Close</a>
		</div>
		</div>
      </div>

</form>
</div>
</body>
</html>