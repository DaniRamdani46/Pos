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
		echo "<script language='javascript'>alert('Isikan No KMS');
					window.location = 'putbalita.php'</script>";
		}
		else {
			mysql_query("INSERT INTO identitas_bayi_balita (nokms,nama,namaayah,alamat,ttl,jk,umur,berat,tinggi,kdvaksin,kdkader) VALUES ('$_POST[nokms]','$_POST[nama]','$_POST[namaay]','$_POST[alamat]','$_POST[ttl]','$_POST[jk]','$_POST[umur]','$_POST[berat]','$_POST[tinggi]','$_POST[kdvaksin]','$_POST[kdkader]')");

			echo "<script language='javascript'>alert('dengan no kms = $nokms berhasil ditambahkan');
			window.location= 'databali.php'</script>";
}
?>
