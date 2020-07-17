<?php
	//Start session
	session_start();
?>
<html>
<head>
<title>
Login
</title>
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>

</head>
<body>
    <div class="container-fluid">
      <div class="row-fluid">
		<div class="span4">
		</div>
	
</div>
<div>
<?php
// menampilkan pesan error
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
	foreach($_SESSION['ERRMSG_ARR'] as $msg) {
		echo '<div style="color: red; text-align: center;">' . $msg . '</div><br>'; 
	}
	unset($_SESSION['ERRMSG_ARR']);
}
?>
	<!-- form input login -->
<center><form action="login.php" method="post">

			<h1 style="font-family: calibri;"><center><span class="glyphicon glyphicon-qrcode"></span>LOGIN</center></h1>
		<br>

		
<div class="qwe">
<input style="height:40px; width: 245px; margin-bottom: 10px;" type="text" name="username" Placeholder="Username" required/><br>
</div>
<div class="qwe">
<input type="password" style="height:40px; width: 245px;margin-bottom: 30px;" name="password" Placeholder="Password" required/><br>
		</div>
		<div class="qwe">
		 <button class="btn btn-large btn-primary btn-block pull-right" href="dashboard.html" type="submit"><i class="glyphicon glyphicon-edit"></i><b> Login</b></button>
</div>
		 </form></center>
</div>
</div>
</div>
</div>
</body>
</html>