<?
include "librari/koneksi.php";
$kodekader = $_POST['kodekader'];
$namakader = $_POST['namakader'];
$jkkader = $_POST['jkkader'];
$alkader = $_POST['alkader'];
$tugaskader = $_POST['tugaskader'];

if (trim ($kodekader) == ""){
echo "<script>alert('isi kan data secara lengkap');window.location='putkader.php'</script>";
}
ELSE {
$nyoblos=mysql_query("INSERT INTO kader_psd (kdkader,nama,jk,alamat,tugas) values('$kodekader','$namakader','$jkkader','$alkader','$tugaskader')");

echo "<script language='javascript'>alert('nama $namakader dengan kode kader = $kodekader berhasil ditambahkan');
window.location= 'datakader.php'</script>";
}
?>
