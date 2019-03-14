<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link href="../css/bootstrap.min.css" rel="stylesheet" />
<title>PHP & MySQL To CSV</title>
</head>
<body>
<div class="container">
<?php
$filName = "edmmember.csv";
$objWrite = fopen("edmmember.csv", "w");

$objConnect = mysql_connect("localhost","root","097959710") or die("Error Connect to Database");
$objDB = mysql_select_db("system");
mysql_query("SET NAMES TIS620");
$strSQL = "SELECT * FROM edmmember";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");

while($objResult = mysql_fetch_array($objQuery))
{
	fwrite($objWrite, "\"$objResult[username]\",\"$objResult[email]\",\"$objResult[target]\",");
	fwrite($objWrite, "\"$objResult[Date]\",\"$objResult[edm]\" \n");
}
fclose($objWrite);
echo "<br><div class='alert alert-success' align='center'><strong>ไฟล์ CSV ถูกสร้างขึ้นเรียบร้อยแล้ว<br><a href=$filName>Download</a></strong>";
echo "<br> >> ระบบจะนำคุณกลับไปยังหน้าเดิมภายใน 10 วินาที << </div>";
echo "<meta http-equiv ='refresh'content='10;URL=index.php'>";
?>
</table>
</body>
</html>