<?php
	require_once("../Config.php");
		
	if(trim($_POST["txtEDM"]) == "")
	{
		echo "กรุณาใส่ข้อความก่อนการแก้ไข!";
		exit();
	}

	else
	{
		
		$strSQL = "UPDATE edmmember SET edm = '".$_POST["txtEDM"]."' WHERE target='".$_POST["ddlTarget"]."'";
		$objQuery = mysql_query($strSQL);
		
		echo "<script type='text/javascript'>alert('แก้ไขข้อมูลสำเร็จ!')</script>";
		echo "<meta http-equiv ='refresh'content='0;URL=index.php'>";
		
	}

	mysql_close();
?>