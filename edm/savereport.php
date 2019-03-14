<?php
	require_once("../Config.php");

	
	
	if(trim($_POST["txtEDM"]) == "")
	{
		echo "<script type='text/javascript'>alert('กรุณาใส่หัวข้อ EDM !!')</script>";
		echo "<meta http-equiv ='refresh'content='0;URL=addedm.php'>";
		exit();
	}	
		
	if(trim($_POST["txtDate"]) == "")
	{
		echo "<script type='text/javascript'>alert('กรุณาใส่วันที่ส่ง EDM!!')</script>";
		echo "<meta http-equiv ='refresh'content='0;URL=add.php'>";
		exit();
	}
	
	
	else
	{	
		
		$strSQL = "INSERT INTO report (topic_edm,date) VALUES ('".$_POST["txtEDM"]."','".$_POST["txtDate"]."')";
		$objQuery = mysql_query($strSQL);
		
		echo "<script type='text/javascript'>alert('ข้อมูลของท่านได้รับการบันทึกเรียบร้อยแล้ว')</script>";
		echo "<meta http-equiv ='refresh'content='0;URL=report.php'>";
		
	}

	mysql_close();
?>