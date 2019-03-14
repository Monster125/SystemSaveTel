<html>
<head>
<title>System Add Users</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<link href="css/bootstrap.min.css" rel="stylesheet" />
<style type="text/css">
 @media (min-width: 768px) {
 .container {
 width: 350px;
 }
 }
 @media (min-width: 992px) {
 .container {
 width: 350px; 
 }
 }
 @media (min-width: 1200px) {
 .container {
 width: 350px;
 }
 }
 </style>
<body>

  <p>&nbsp;</p>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
     <p>&nbsp; </p>
	 
	 <div class="container">
	 <div class="span3 offset3 well">
	 
	 <legend align="center"  > <b> ระบบเพิ่ม User</b></legend>
	
		<form name="form1" method="post" action="registersave.php" class="form-inline">
		<div class="form-group">
		<label for="txtUsername">Username:</label>
          <input name="txtUsername" class="form-control" type="text" id="txtUsername">
       </div>
	   <p>
		<div class="form-group">
		<label for="txtPassword">Password:</label>
        <input name="txtPassword" class="form-control" type="password" id="txtPassword">
       </div>
      <p>
		<div class="form-group">
		<label for="txtConPassword">Confirm Password:</label>
        <input name="txtConPassword" class="form-control" type="password" id="txtConPassword">       
      </div>
	  <p>
		<div class="form-group">
		<label for="txtName">Name :</label>
        <input name="txtName" class="form-control" type="text" id="txtName">
      </div>
	  <p>
      <div class="form-group">
	  <label for="ddlStatus">Status:</label>
          <select name="ddlStatus" id="ddlStatus" class="form-control">
            <option value="ADMIN">ADMIN</option>
            <option value="USER">USER</option>
          </select>
		</div>
		<p>
  <br>
  <input type="submit" class="btn btn-success" name="Submit" value="Save">
</form>
</div>
</div>
</body>
</html>