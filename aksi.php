<?php
	session_start();

	if(isset($_POST['masuk'])){
		$user=$_POST['username'];
		$pwd=$_POST['password'];
		
		if($user=="rasya" and $pwd=="rasya123"){
			$_SESSION['masuk']=true;
			echo "<script>alert('Welcome!');
			location.href='index.php';</script>";
		}
		else{
			echo "<script>alert('Gagal Login !!');
			location.href='login.php';</script>";
		}
	}

