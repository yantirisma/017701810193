</pre>
<?php
//ini adalah membuat sessionnya
session_start();
include "db.php";
function anti_injection($data){
 $filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
 return $filter;
}
$username = anti_injection($_POST['username']);
$password = anti_injection($_POST['password']);
//script berikut berfungsi untuk mengecek apakah form sudah terisi dengan benar
if (!ctype_alnum($username) OR !ctype_alnum($password)){
 echo "Maaf masukan dahulu Akun anda yaaaaaa .Coba lagi!!!!!!!."
 ;
}
else{
if ($username&&$password){
 $get_sql = mysql_query ("SELECT * FROM users WHERE username = '$username'");
 $num = mysql_num_rows($get_sql);
 //script ini berfungsi untuk mengecek apakah usernama sudah ada atau belum
 if ($num==0){
 echo "Username Belum terdaftar";
 }
 else {
 while($row = mysql_fetch_assoc($get_sql)){
 $dbusername = $row ['username'];
 $dbpassword = $row ['password'];
 }
 
 /*Script ini berfungsi untuk mengecek kebenaran username dan password,
 jika sudah benar maka program akan membuat sessiojn login
 */
 $pass = md5($password);
 if ($username == $dbusername && ($pass==$dbpassword)){
 $_SESSION['username'] = $username;
 header ('location:home.php');
 }
 else {
 echo "Password Salah";
 }
 
 }
 }
 else {
 echo "Tolong penuhi field";
 }
}
?>
<pre>