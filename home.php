<!--?php /*fungsi script ini sama seperta yang ada pada file login.php cuma ini kebalikannya jika user sudah login maka akan mengarah ke home.php dan jika belum maka akan kembali ke login.php */ session_start(); $username = $_SESSION['username']; if (isset($username)){ ?--><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
Home</pre>
<div>Selamat Datang</div>
<div><a href="logout.php">Logout</a></div>
<pre><!--?php } else {  header ('location:login.php');  exit();  } ?-->