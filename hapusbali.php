<?php
include "librari/koneksi.php";
mysql_query("DELETE FROM identitas_bayi_balita WHERE nokms = '$_GET[id]'");
header('location: databali.php');
?>
