<?php
	if(!isset($_SESSION['masuk'])){
		echo "<script>alert('Silahkan Login Kembali !!');
			location.href='login.php';</script>";
	}
?>