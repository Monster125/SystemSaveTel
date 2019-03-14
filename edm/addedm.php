<?php
	session_start();
	if($_SESSION['UserID'] == "")
	{
		echo "<meta http-equiv ='refresh'content='0;URL=login.php'>";
		exit();
	}	
	
	require_once("../Config.php");
	$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
?>
<html>
<head>
<title>เพิ่ม EDM ใหม่</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<link href="../css/bootstrap.min.css" rel="stylesheet" />
<link href="css/datepicker.css" rel="stylesheet" media="screen">
<link href="css/prettify.css" rel="stylesheet">

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
<form name="form1" method="post" action="savereport.php">
<p>&nbsp;</p>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
     <p>&nbsp; </p>
	 
<div class="container">
<div class="span3 offset3 well">

	<legend align="center"  > <b> เพิ่ม EDM ใหม่</b></legend>
	  

      <label for="txtEDM">หัวข้อ EDM :</label>
      <input class="form-control" name="txtEDM" id="txtEDM" maxlength="100" placeholder="ใส่หัวข้อ EDM"><p><p>  
	  
	 <label for="txtDate">วันที่ส่ง EDM :</label>
     <input class="form-control" type="text" name="txtDate" id="txtDate" data-provide="datepicker" data-date-language="th" placeholder="วัน/เดือน/ปี" maxlength="10">
<p>
	  
<center>
        <input type="submit" class="btn btn-primary btn-sm" name="Submit" value="บันทึก">

        <input type="reset" class="btn btn-primary btn-sm" name="reset" id="reset" value="ล้าง">
		</center>
</form>

</div>
</div>
<script src="js/jquery.js"></script>
<script src="js/prettify.js"></script>

<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="js/bootstrap-datepicker-thai.js"></script>
<script type="text/javascript" src="js/locales/bootstrap-datepicker.th.js"></script>

</body>
</html>