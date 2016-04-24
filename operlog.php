<?
$user = $_POST['user'];
$pass = $_POST['pass'];

//ECHO "$user , $pass";
//exit();
if(trim($user)==""){
echo "<script>alert('maaf username masih kosong tolong diisi');window.location='hallogin.php'</script>";
}
else if(trim($pass)==""){
echo "<script>alert('maaf kata sandi masih kosong tolong diisi');window.location='hallogin.php'</script>";
}
else if ($user == "Dennis" && $pass == "kd01" ){
echo"<script>alert('Selamat anda berhasil masuk...');window.location='homeposyandu.php'</script>";
}

else if ($user == "Widi" && $pass == "kd02" ){
echo"<script>alert('Selamat anda berhasil masuk...');window.location='homeposyandu.php'</script>";
}
else if ($user == "Davis" && $pass == "kd03" ){
echo"<script>alert('Selamat anda berhasil masuk...');window.location='homeposyandu.php'</script>";
}
else if ($user == "Asep" && $pass == "kd04" ){
echo"<script>alert('Selamat anda berhasil masuk...');window.location='homeposyandu.php'</script>";
}
else if ($user == "Tosin" && $pass == "kd05" ){
echo"<script>alert('Selamat anda berhasil masuk...');window.location='homeposyandu.php'</script>";
}
else if ($user == "admin" && $pass == "admin" ){
echo"<script>alert('Selamat admin berhasil masuk...');window.location='homeposyandu.php'</script>";
}

else{
echo "<script>alert('LOGIN GAGAL periksa kembali...');window.location='hallogin.php'</script>";
}

?>




