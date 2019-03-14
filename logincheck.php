<?php
	session_start();
	require_once("Config.php");
	$strSQL = "SELECT * FROM member WHERE Username = '".mysql_real_escape_string($_POST['txtUsername'])."' 
	and Password = '".mysql_real_escape_string($_POST['txtPassword'])."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "<script type='text/javascript'>alert('Username หรือ Password ไม่ถูกต้อง!')</script>";
			echo "<meta http-equiv ='refresh'content='0;URL=login.php'>";
	}
	else
	{
			$_SESSION["UserID"] = $objResult["UserID"];
			$_SESSION["Status"] = $objResult["Status"];

			session_write_close();
			
			if($objResult["Status"] == "ADMIN")
			{
				header("location:index_admin.php");
			}
			else
			{
				header("location:index.php");
			}
	}
	mysql_close();
?>