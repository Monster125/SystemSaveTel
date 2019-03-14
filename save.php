<?php
	require_once("Config.php");
	
	
	if(trim($_POST["txtMobile"]) == "")
	{
		echo "<script type='text/javascript'>alert('กรุณาใส่ เบอร์โทรศัพท์!!')</script>";
		echo "<meta http-equiv ='refresh'content='0;URL=add.php'>";
		exit();
	}	
		
	if(trim($_POST["txtSMS"]) == "")
	{
		echo "<script type='text/javascript'>alert('กรุณาใส่ ข้อความ SMS ที่ต้องการเก็บข้อมูล!!')</script>";
		echo "<meta http-equiv ='refresh'content='0;URL=add.php'>";
		exit();
	}
	
	
	$strSQL = "SELECT * FROM telmember WHERE Mobile = '".trim($_POST['txtMobile'])."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if($objResult)
	{
			echo "<script type='text/javascript'>alert('ตรวจพบเบอร์โทรศัพท์ที่ ซ้ำกัน กรุณาลองใหม่ !')</script>";
			echo "<meta http-equiv ='refresh'content='0;URL=add.php'>";
			exit();
	}
	else
	{	
		
		$strSQL = "INSERT INTO telmember (Global,Mobile,Target,SMS,Status) VALUES ('".$_POST["ddlGlobal"]."','".$_POST["txtMobile"]."','".$_POST["ddlTarget"]."','".$_POST["txtSMS"]."','".$_POST["ddlStatus"]."')";
		$objQuery = mysql_query($strSQL);
		
		echo "<script type='text/javascript'>alert('ข้อมูลของท่านได้รับการบันทึกเรียบร้อยแล้ว')</script>";
		echo "<meta http-equiv ='refresh'content='0;URL=index_admin.php'>";
		
	}

	mysql_close();
?>