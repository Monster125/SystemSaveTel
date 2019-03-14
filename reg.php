<html>
<head>
<title>ระบบสมัครสมาชิก</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<form name="form1" method="post" action="savereg.php">
  สมัครสมาชิก <br>
  <table width="400" border="1" style="width: 400px">
    <tbody>
      <tr>
        <td width="145"> &nbsp;Username</td>
        <td width="180">
          <input name="txtUsername" type="text" id="txtUsername" size="20">
        </td>
      </tr>
      <tr>
        <td> &nbsp;Password</td>
        <td><input name="txtPassword" type="password" id="txtPassword">
        </td>
      </tr>
      <tr>
        <td> &nbsp;Confirm Password</td>
        <td><input name="txtConPassword" type="password" id="txtConPassword">
        </td>
      </tr>
      <tr>
        <td>&nbsp;Name</td>
        <td><input name="txtName" type="text" id="txtName" size="35"></td>
      </tr>
       <input type="hidden" name="ddlStatus" value="USER">
    </tbody>
  </table>
  <br>
  <input type="submit" name="Submit" value="ลงทะเบียน">
</form>
</body>
</html>