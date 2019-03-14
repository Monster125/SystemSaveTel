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
<form name="form1" method="post" action="saveeditsms.php">
<p>&nbsp;</p>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
     <p>&nbsp; </p>
	 
<div class="container">
<div class="span3 offset3 well">

	<legend align="center"  > <b> แก้ไข SMS ตามกลุ่มเป้าหมาย</b></legend>
	  

      <label for="ddlTarget">กลุ่มเป้าหมาย :</label>
      <select class="form-control" name="ddlTarget" id="ddlTarget">
        <option>Member</option>
        <option>Guest</option>
      </select><p>
	  

      <label for="txtSMS">ข้อความ SMS :</label>
      <textarea class="form-control" rows="5" name="txtSMS" id="txtSMS" cols="45" rows="5" placeholder="ระบุรายละเอียดหัวข้อ SMS ใหม่"></textarea><p>

	  
<center>
        <input type="submit" class="btn btn-primary btn-sm" name="Submit" value="บันทึก">

        <input type="reset" class="btn btn-primary btn-sm" name="reset" id="reset" value="ล้าง">
		</center>
</form>

</div>
</div>
</body>
</html>