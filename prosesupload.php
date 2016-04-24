<?php
include "librari/koneksi.php";
$img = $_FILES['gambar']['name'];
$asal = $_FILES['gambar']['tmp_name'];
move_uploaded_file($asal, "img/".$img);
$select = "insert into galery VALUES(null,'$img')";
$q = mysql_query($select);
if($q){
	echo "Upload Gambar Sukses";
?>
	<meta http-equiv="refresh" content="2;url=homeposyandu.php">
<?php
}else{
	echo "Gagal";
}
?>
