<?php
include "librari/koneksi.php";
$nokms = $_POST['nokms'];
$nama = $_POST['nama'];
$namaay = $_POST['namaay'];
$alamat = $_POST['alamat'];
$ttl = $_POST['ttl'];
$jk = $_POST['jk'];
$umur = $_POST['umur'];
$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];
$kdkader = $_POST['kdkader'];
$kdvaksin = $_POST['kdvaksin'];

if (trim ($nokms) == ""){
echo "<script>alert('isi kan data secara lengkap');window.location='editbali.php'</script>";
}
else {

mysql_query("UPDATE identitas_bayi_balita SET nokms = '$_POST[nokms]', nama = '$_POST[nama]', namaayah = '$_POST[namaay]', alamat = '$_POST[alamat]', ttl = '$_POST[ttl]', jk = '$_POST[jk]', umur = '$_POST[umur]', berat = '$_POST[berat]', tinggi = '$_POST[tinggi]', kdvaksin = '$_POST[kdvaksin]' , kdkader = '$_POST[kdkader]' WHERE nokms = '$_POST[nokms]'");

echo "<script language='javascript'>alert('nama $nama dengan kode kader = $nokms berhasil DIUBAH');
window.location= 'databali.php'</script>";
}
?>
