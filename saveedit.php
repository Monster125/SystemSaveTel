<?php
	require_once("Config.php");
	
	
	if(trim($_POST["txtMobile"]) == "")
	{
		echo "Please input Mobile!";
		exit();	
	}	
		
	if(trim($_POST["txtSMS"]) == "")
	{
		echo "Please in put Text SMS!";
		exit();
	}
	
	if($objResult)
	{
			echo "Mobile Number exists!";
	}
	else
	{	
		
		$strSQL = "UPDATE telmember SET Global = '".$_POST["ddlGlobal"]."',Mobile = '".$_POST["txtMobile"]."',Target = '".$_POST["ddlTarget"]."',SMS = '".$_POST["txtSMS"]."',Status = '".$_POST["ddlStatus"]."' WHERE Id='".$_POST['Id']."'";
		$objQuery = mysql_query($strSQL);
		
		echo "<script type='text/javascript'>alert('แก้ไขข้อมูลสำเร็จ!')</script>";
		echo "<meta http-equiv ='refresh'content='0;URL=index_admin.php'>";
		
	}

	mysql_close();
?>