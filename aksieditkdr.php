<?
include "librari/koneksi.php";
$kodekader = $_POST['kodekader'];
$namakader = $_POST['namakader'];
$jkkader = $_POST['jkkader'];
$alkader = $_POST['alkader'];
$tugaskader = $_POST['tugaskader'];

if (trim ($kodekader) == ""){
echo "<script>alert('isi kan data secara lengkap');window.location='editkader.php'</script>";
}
else {

mysql_query("UPDATE  kader_psd  SET kdkader = '$_POST[kodekader]', nama = '$_POST[namakader]', jk = '$_POST[jkkader]', alamat = '$_POST[alkader]', tugas = '$_POST[tugaskader]' WHERE kdkader = '$_POST[kodekader]'") ;

echo "<script language='javascript'>alert('nama $namakader dengan kode kader = $kodekader berhasil DIUBAH');
window.location= 'datakader.php'</script>";
}
?>
