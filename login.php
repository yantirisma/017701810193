<?php
	if(isset($_POST["kirim"])){
		$user=$_POST["username"];
		$pass=$_POST["password"];
		
		if ($user=="ftik" AND $pass=="usm"){
			echo"<h1>Selamat Datang</h1>";
			}else{
				echo"<h1>Anda tidak diijinkan masuk ke halaman ini!</h1>";
			}
		}
?>