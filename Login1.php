<!--?php /*script ini berfungsi untuk mengecek apakah user sudah login atau belum, jika sudah maka akan mengarah ke home.php dan jika belum akan kembali ke login.php */ session_start(); $username = $_SESSION['username']; if (isset($username)){  header ('location:home.php'); } else { ?-->
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<h1>Login</h1></pre>
<form action="log.php" method="post">
<div>Username :</div>
<input type="text" name="username" />
<div>Password :</div>
<input type="password" name="password" />
<input type="submit" value="Login" />
<div><a href="register.php">register</a></div>
</form>
<pre>
<!--?php } ?-->