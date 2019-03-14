<?php
require_once("Config.php");
$delete_id=$_GET['delete_id'];//รับค่าGET ที่ส่งมาจากไฟล์ show
$sql="DELETE FROM telmember WHERE Id ='$delete_id'";//คำสั่งลบข้อมูล
$result = mysql_query($sql);
if($result){
    echo"<script type='text/javascript'>alert('ลบข้อมูลสำเร็จ')</script>";//javascript แจ้ง alert ข้อความ
    echo "<meta http-equiv ='refresh'content='0;URL=index.php'>";// คำสั่งให้ refreshหน้าไปหน้าที่เราต้องการ
} else {
    echo"<script type='text/javascript'>alert('ลบข้อมูลไม่สำเร็จ');window.history.go(-1);</script>";//javascript แจ้ง alert ข้อความ และคำสั่งให้ refresh หน้าเดิมถ้าลบข้อความไม่สำเร็จ
}    

?>