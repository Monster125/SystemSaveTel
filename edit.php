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
<title>แก้ไขข้อมูล</title>
<style type="text/css">
 @media (min-width: 768px) {
 .container {
 width: 350px;
 }
 }
 @media (min-width: 992px) {
 .container {
 width: 350px; 
 }
 }
 @media (min-width: 1200px) {
 .container {
 width: 350px;
 }
 }
 </style>
</head>

<body>
<form id="form1" name="form1" method="post" action="saveedit.php">
  <p>&nbsp;</p>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
     <p>&nbsp; </p>
	 
<div class="container">
<div class="span3 offset3 well">

	<legend align="center"  > <b> จัดการแก้ไขข้อมูล</b></legend>
	
    <input type="hidden" name="Id" value="<?php echo"$row[Id]"; ?>"/>
  </p>
  
    
        <div class="form-group">
		
          <label for="ddlGlobal">เครือข่าย :</label>
      <select name="ddlGlobal" class="form-control" id="ddlGlobal">
	  <option value="TRUE">TRUE</option>
      <option value="AIS">AIS</option>
	  <option value="DTAC">DTAC</option>
	  </select><p></div>
	  
	  <div class="form-group">
		<label for="txtMobile">เบอร์โทร :</label>
      <input name="txtMobile" class="form-control" type="text" id="txtMobile" value="<?php echo"$row[Mobile]"; ?>" />
	  </div>

	  <div class="form-group">
      <label for="ddlTarget">กลุ่มเป้าหมาย :</label>
      <select class="form-control" name="ddlTarget" id="ddlTarget">
        <option>Member</option>
        <option>Guest</option>
      </select>
	  </div>
	  
	  <div class="form-group">
      <label for="txtSMS">ข้อความ SMS :</label>
      <textarea class="form-control" rows="5" name="txtSMS" id="txtSMS" cols="45" rows="5"><?php echo"$row[SMS]"; ?></textarea>
		</div>
		
		<div class="form-group">
   <label for="ddlStatus">สถานะ :</label>
        <select class="form-control" name="ddlStatus" id="ddlStatus">
        <option>Success</option>
        <option>Block</option>
		<option>Processing</option>
		<option>Fail</option>
        </select>
		</div>
<center>
        <input type="submit" class="btn btn-primary" name="button" id="button" value="ยืนยัน"  />
		<a href="index_admin.php" class="btn btn-primary" role="button" onclick="return confirm('คุณแน่ใจหรือไม่ว่าต้องการละทิ้งค่าที่แก้ไขไว้ทั้งหมด !!')" >ยกเลิก</a></center>
      </div>

  <p>&nbsp;</p>
  </p>
</form>
</body>
</html>