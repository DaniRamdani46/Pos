<?php
include "librari/koneksi.php";
$kdbulan = $_POST['kdbulan'];
$bulan = $_POST['bulan'];
$waktu = $_POST['waktu'];
$kdkader = $_POST['kdkader'];
$hadir = $_POST['hadir'];


if (trim ($kdbulan) == ""){
		echo "<script language='javascript'>alert('Isikan kdbulan');
					window.location = 'puthadir.php'</script>";
		}
		else {
			mysql_query("INSERT INTO jadwalpiket (kdbulan,bulan,waktu,kdkader,hadir) VALUES ('$_POST[kdbulan]','$_POST[bulan]','$_POST[waktu]','$_POST[kdkader]','$_POST[hadir]')");

			echo "<script language='javascript'>alert('Kode kader $kdkader berhasil mengisi data hadir piket  ');
			window.location= 'puthadir.php'</script>";
}
?>
