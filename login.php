<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<title>Login to System</title>
</head>
<body>
<p>&nbsp;</p>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
     <p>&nbsp; </p>
<div class="container">
<div class="row">
    <div class="span4 offset4 well">
	<legend align="center"  > <b> เข้าสู่ระบบเพื่อดำเนินการ</b></legend>
            <div class="alert alert-info" align="center">Data System Management</div>
<form name="form1" method="post" action="logincheck.php" accept-charset="UTF-8" onsubmit="javascript:return checkNull();">
		<input type="text" id="txtUsername" class="form-control" name="txtUsername" placeholder="Username"><br>
		 <input type="password" id="txtPassword" class="form-control" name="txtPassword" placeholder="Password"><p><p>
		 <button type="submit" name="Submit" class="btn btn-info btn-block" value="Sign in" >เข้าสู่ระบบ</button>
</form>
<div id="footer">
  <div class="container text-center">
    <p class="text-muted credit" style="color:#000">&copy; 2016 BlitZRush</p>
  </div>
</div>
 </div>
    </div>
</div>
</body>
</html>