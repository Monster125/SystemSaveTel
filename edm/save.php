<?php
	require_once("../Config.php");

	
	
	if(trim($_POST["txtUser"]) == "")
	{
		echo "<script type='text/javascript'>alert('กรุณาใส่ Username !!')</script>";
		echo "<meta http-equiv ='refresh'content='0;URL=add.php'>";
		exit();
	}	
		
	if(trim($_POST["txtEmail"]) == "")
	{
		echo "<script type='text/javascript'>alert('กรุณาใส่ อีเมล์ !!')</script>";
		echo "<meta http-equiv ='refresh'content='0;URL=add.php'>";
		exit();
	}
	
	
	if(trim($_POST["txtDate"]) == "")
	{
		echo "<script type='text/javascript'>alert('กรุณาใส่วันที่ส่ง EDM!!')</script>";
		echo "<meta http-equiv ='refresh'content='0;URL=add.php'>";
		exit();
	}
	
	if(trim($_POST["txtEDM"]) == "")
	{
		echo "<script type='text/javascript'>alert('กรุณาใส่ข้อความที่ใช้ส่ง EDM!!')</script>";
		echo "<meta http-equiv ='refresh'content='0;URL=add.php'>";
		exit();
	}
	
	
	$strSQL = "SELECT * FROM edmmember WHERE username = '".trim($_POST['txtUser'])."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);

	
	if($objResult)
	{
			echo "<script type='text/javascript'>alert('ตรวจพบ username ที่ซ้ำกัน!')</script>";
			echo "<meta http-equiv ='refresh'content='0;URL=add.php'>";
			exit();
	}
	
	$strSQL = "SELECT * FROM edmmember WHERE email = '".trim($_POST['txtEmail'])."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);

	if($objResult)
	{
			echo "<script type='text/javascript'>alert('ตรวจพบอีเมล์ที่ซ้ำกัน !')</script>";
			echo "<meta http-equiv ='refresh'content='0;URL=add.php'>";
			exit();
	}
	
	else
	{	
		
		$strSQL = "INSERT INTO edmmember (username,email,target,Date,edm) VALUES ('".$_POST["txtUser"]."','".$_POST["txtEmail"]."','".$_POST["ddlTarget"]."','".$_POST["txtDate"]."','".$_POST["txtEDM"]."')";
		$objQuery = mysql_query($strSQL);
		
		echo "<script type='text/javascript'>alert('ข้อมูลของท่านได้รับการบันทึกเรียบร้อยแล้ว')</script>";
		echo "<meta http-equiv ='refresh'content='0;URL=index.php'>";
		
	}

	mysql_close();
?>