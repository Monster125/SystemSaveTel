<?php
	require_once("Config.php");
	
	if(trim($_POST["txtUsername"]) == "")
	{
		echo "<script type='text/javascript'>alert('กรุณาใส่  Username ที่ต้องการ ')</script>";
		echo "<meta http-equiv ='refresh'content='0;URL=register.php'>";
		exit();	
	}
	
	if(trim($_POST["txtPassword"]) == "")
	{
		echo "<script type='text/javascript'>alert('กรุณาใส่  Password ที่ต้องการ ')</script>";
		echo "<meta http-equiv ='refresh'content='0;URL=register.php'>";
	}	
		
	if($_POST["txtPassword"] != $_POST["txtConPassword"])
	{
		echo "<script type='text/javascript'>alert('Password ไม่ตรงกัน')</script>";
		echo "<meta http-equiv ='refresh'content='0;URL=register.php'>";
	}
	
	if(trim($_POST["txtName"]) == "")
	{
		echo "<script type='text/javascript'>alert('กรุณาใส่ชื่อที่ต้องการ ')</script>";
		echo "<meta http-equiv ='refresh'content='0;URL=register.php'>";	
	}	
	
	$strSQL = "SELECT * FROM member WHERE Username = '".trim($_POST['txtUsername'])."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if($objResult)
	{
			echo "มี Username นี้ซ้ำอยู่ในระบบแล้ว!";
	}
	else
	{	
		
		$strSQL = "INSERT INTO member (Username,Password,Name,Status) VALUES ('".$_POST["txtUsername"]."', 
		'".$_POST["txtPassword"]."','".$_POST["txtName"]."','".$_POST["ddlStatus"]."')";
		$objQuery = mysql_query($strSQL);
		
		echo "<script type='text/javascript'>alert('สำเร็จ!! ระบบได้ทำการเพิ่ม User ลงในฐานข้อมูลแล้ว')</script>";
		echo "<meta http-equiv ='refresh'content='0;URL=index.php'>";
		
	}

	mysql_close();
?>