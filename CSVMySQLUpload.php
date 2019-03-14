<html>
<head>
<title>PHP & CSV To MySQL</title>
<link href="css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<?php
if ($_FILES[fileCSV][size] > 0) {

move_uploaded_file($_FILES["fileCSV"]["tmp_name"],$_FILES["fileCSV"]["name"]); // Copy/Upload CSV

$objConnect = mysql_connect("localhost","root","097959710") or die("Error Connect to Database"); // Conect to MySQL
$objDB = mysql_select_db("system");
mysql_query("SET NAMES TIS620");
$objCSV = fopen($_FILES["fileCSV"]["name"], "r");
while (($objArr = fgetcsv($objCSV, 1000, ",")) !== FALSE) {
	
	$strSQL = " SELECT * FROM telmember WHERE Mobile = '".$objArr[1]."' ";
	$objQuery = mysql_query($strSQL);
	$numRows = mysql_num_rows($objQuery);
	if($numRows <= 0){
	
	$strSQL = "INSERT INTO telmember ";
	$strSQL .="(Global,Mobile,Target,SMS,Status) ";
	$strSQL .="VALUES ";
	$strSQL .="('".$objArr[0]."','".$objArr[1]."','".$objArr[2]."' ";
	$strSQL .=",'".$objArr[3]."','".$objArr[4]."') ";
	$objQuery = mysql_query($strSQL);
	}
	
	}
		
	} else {
		echo "<script type='text/javascript'>alert('คุณต้องเลือกไฟล์ ก่อนที่จะอัพโหลด!!')</script>";
		echo "<meta http-equiv ='refresh'content='0;URL=index_admin.php'>";
		exit();
	}
fclose($objCSV);

echo "<div class='alert alert-success' align='center'><strong>สำเร็จ!! การนำเข้าไฟล์เสร็จสมบูรณ์</strong><br>";
echo "  >> ระบบจะนำคุณกลับไปยังหน้าเดิมภายใน 3 วินาที << </div>";
echo "<meta http-equiv ='refresh'content='3;URL=index_admin.php'>";
?>
</table>
</body>
</html>