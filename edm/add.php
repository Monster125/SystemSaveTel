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
<title>ระบบจัดเก็บข้อมูล EDM</title>
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
<form name="form1" method="post" action="save.php" onSubmit="return checkemail()">
<p>&nbsp;</p>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
     <p>&nbsp; </p>
	 
<div class="container">
<div class="span3 offset3 well">

	<legend align="center"  > <b> ระบบจัดเก็บข้อมูล EDM</b></legend>
	  

      <label for="txtUser">Username :</label>
      <input class="form-control" name="txtUser" id="txtUser" maxlength="25" placeholder="ระบุ Username"><p><p>
	  

      <label for="txtEmail">E-Mail :</label>
	  <script type='text/javascript'>
		function check_email(elm){
		var regex_email=/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*\@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.([a-zA-Z]){2,4})$/
		if(!elm.value.match(regex_email)){
        alert('รูปแบบ E-Mail ไม่ถูกต้อง');
		location.reload();
		}
	}
	  </script>
      <input name="txtEmail" class="form-control" type="text" id="txtEmail" onblur='check_email(this)' maxlength="50" placeholder="ระบุ E-Mail"></span><p>

      <label for="ddlTarget">กลุ่มเป้าหมาย :</label>
      <select class="form-control" name="ddlTarget" id="ddlTarget">
        <option>Member</option>
        <option>Guest</option>
		<option>Other</option>
      </select><p>
	  
	 <label for="txtDate">วันที่ส่ง EDM :</label>
     <input class="form-control" type="text" name="txtDate" id="txtDate" data-provide="datepicker" data-date-language="th" placeholder="วัน/เดือน/ปี" maxlength="10">

      <label for="txtEDM">ข้อความที่ส่ง EDM :</label>
      <textarea class="form-control" rows="5" name="txtEDM" id="txtEDM" cols="45" rows="5" placeholder="ระบุหัวข้อที่ใช้ในการส่ง EDM"></textarea><p>
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