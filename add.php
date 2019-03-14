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
<html>
<head>
<title>ระบบจัดเก็บข้อมูล</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<link href="css/bootstrap.min.css" rel="stylesheet" />
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
<body>
<form name="form1" method="post" action="save.php">
<p>&nbsp;</p>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
     <p>&nbsp; </p>
	 
<div class="container">
<div class="span3 offset3 well">

	<legend align="center"  > <b> ระบบจัดเก็บข้อมูล</b></legend>
	  

      <label for="ddlGlobal">เครือข่าย :</label>
      <select class="form-control" name="ddlGlobal" id="ddlGlobal">
	  <option value="TRUE">TRUE</option>
      <option value="AIS">AIS</option>
	  <option value="DTAC">DTAC</option>
	  </select><p>
	  

      <label for="txtMobile">เบอร์โทร :</label>
      <input name="txtMobile" class="form-control" type="text" id="txtMobile" size="20" maxlength="12" placeholder="ระบุหมายเลขเบอร์โทรศัพท์"><p>
	

      <label for="ddlTarget">กลุ่มเป้าหมาย :</label>
      <select class="form-control" name="ddlTarget" id="ddlTarget">
        <option>Member</option>
        <option>Guest</option>
      </select><p>
	  

      <label for="txtSMS">ข้อความ SMS :</label>
      <textarea class="form-control" rows="5" name="txtSMS" id="txtSMS" cols="45" rows="5" placeholder="ข้อความสำหรับใช้เพื่อส่ง SMS ระบุเฉพาะหัวข้อ SMS ที่ส่งเท่านั้น"></textarea><p>


      <label for="ddlStatus">สถานะ :</label>
      <select class="form-control" name="ddlStatus" id="ddlStatus">
        <option>Success</option>
        <option>Block</option>
		<option>Processing</option>
		<option>Fail</option>
      </select><p>
	  
<center>
        <input type="submit" class="btn btn-primary btn-sm" name="Submit" value="บันทึก">

        <input type="reset" class="btn btn-primary btn-sm" name="reset" id="reset" value="ล้าง">
		</center>
</form>

</div>
</div>
</body>
</html>