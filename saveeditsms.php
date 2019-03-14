<?php
	require_once("Config.php");
	
		
	
		
	if(trim($_POST["txtSMS"]) == "")
	{
		echo "กรุณาใส่ข้อความก่อนการแก้ไข!";
		exit();
	}

	else
	{
		
		$strSQL = "UPDATE telmember SET SMS = '".$_POST["txtSMS"]."' WHERE Target='".$_POST["ddlTarget"]."'";
		$objQuery = mysql_query($strSQL);
		
		echo "<script type='text/javascript'>alert('แก้ไขข้อมูลสำเร็จ!')</script>";
		echo "<meta http-equiv ='refresh'content='0;URL=index_admin.php'>";
		
	}

	mysql_close();
?>