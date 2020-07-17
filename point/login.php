<?php
	//Start session
	session_start();
	
	//Array untuk menyimpan validasi error
	$errmsg_arr = array();
	
	//bendera validasi error
	$errflag = false;
	
	//konek ke database mysql
	$link = mysqli_connect('localhost','id14363643_deryali','Chiliarch_330');
	if(!$link) {
		die('Failed to connect to server: ' . mysqli_error());
	}
	
	//memilih datab0ase
	$db = mysqli_select_db($link , 'id14363643_baru');
	if(!$db) {
		die("Unable to select database");
	}
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($str);
	}
	
	//mengambil data yang di POST dari form
	$login = $_POST['username'];
	$password = $_POST['password'];
	
	//validasi inputan
	if($login == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
	
	//membuat query
	$qry="SELECT * FROM tb_user WHERE username='$login' AND password='$password'";
	$result=mysqli_query($link , $qry);
	
	//check query benar atau salah
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login sukses
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['name'];
			$_SESSION['SESS_LAST_NAME'] = $member['position'];
			session_write_close();
			header("location: main/index.php");
			exit();
		}else {
			//Login failed
			header("location: index.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>