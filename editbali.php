<html>
	<head>
		<title>input data</title>
	</head>
<body Background="img/1000.jpg">
<br>
<table align="center"  width="907"border=1 bordercolor=#84faea >
<tr>

			<th colspan=5 ><img src="img/PPIEU.jpg" width="907" height="208"></th>
			</tr>
			
			</table>
			<table align="center"  width="917"border=1 bordercolor=#84faea >
			<tr>
			<td width="137">
			<a href="homeposyandu.php" title="halaman home">
			<b><center><font size=2 font face="comic sans Ms" font color=#063b48>
			Home</a> </b></center></td>
	
			
			<TD width="146"><a href="inputdata.php" title="Silahkan Klik untuk input data">
			<center><font size=2 font face="Capture it" font color=#063b48>
			Input Data </center></td>
			
			<TD width="146"><a href="datakader.php" title="Silahkan Klik untuk melihat data">
			<center><font size=2 font face="Capture it" font color=#063b48>
			Data Kader</center></td>
			
			<TD width="146"><a href="datahadir.php" title="Silahkan Klik untuk melihat data">
			<center><font size=2 font face="Capture it" font color=#063b48>
			Data hadir</center></td>
			<TD width="170"><a href="databali.php" title="Silahkan Klik untuk melihat data">
			<center><font size=2 font face="comic sans ms" font color=#063b48><b><center>
			Data Balita dan Imunisasi</b></center></td>
			</TABLE>
		
			
			
			<table align="center"  width="920" >
			
			<tr><th Background="img/kl.gif" width="920" height="23" ></th></tr>
			</table>
			
			
			<table align="center"  width="910" >
			<tr><td><font size=3 font face="Harlow Solid Italic" font color=#063b48><center><marquee>
			Silahkan Pilih Input Datanya</marquee></center></td></tr>
			</table>
			
			<table align="center"  width="920" >
			<tr><td background="img/1000.jpg" >
			
			<table align="center"  width="190" border=1 bordercolor=#84faea >
			
			<tr><TD width="100" HEIGHT="36" BGCOLOR=#063b48><a href="putkader.php" title="Silahkan Klik untuk input data Kader">
			<center><font size=2 font face="Capture it" font color=#84faea>
			INPUT DATA KADER</center></td>
			 </td>
			</TR>
			<TR><TD width="100" HEIGHT="36" BGCOLOR=#063b48><a href="puthadir.php" title="Silahkan Klik untuk input data hadir piket">
			<center><font size=2 font face="Capture it" font color=#84faea>
			INPUT HADIR PIKET</center></td>
			</TR>
			<TR><TD width="100" HEIGHT="36" BGCOLOR=#063b48><a href="putbalita.php" title="Silahkan Klik untuk input data balita dan imunisasi">
			<center><font size=2 font face="Capture it" font color=#84faea>
			Input Data Balita dan imunisasi</center></td></TR>
			</TABLE> 
			<br> <br> <br> <br><br><br><br>
			
			</td> 
			<td>
			<table width="700">
			<tr WIDTH="700" >
			 <TD  >
			 <table border=1  bordercolor=#84faea WIDTH="720" >
							<tr><td>			 
				<font size=5 font face="Freehand521 BT" font color=#063b48>
					Data Kader Posyandu Bina Sejahtera</td>
					</tr>
			<tr WIDTH="700">
					<td >
			
			<?php
			include "librari/koneksi.php";
			
			$data = mysql_fetch_array(mysql_query("SELECT * FROM identitas_bayi_balita WHERE nokms = '$_GET[id]'")); 
					
			echo "<br><span>Ubah</span>";
			echo "<form method ='POST' action='aksieditbali.php'>
			
			 <table>
			 <tr>
			 <td width='200'><font color=#063b48><b> No Kms</b></td>
			 <td  width='15'> <font color=#063b48><b>:</b> </td>
			 <td><input type='text' name='nokms' size='10' value='$data[nokms]'><font color=#063b48><b>*)</b></td>
			 </tr>
			 <tr> <td><font color=#063b48><b> Nama</b> </td>
			 <td><font color=#063b48><b>:</b></td>
			 <td><input type='text' name='nama' size='60' value='$data[nama]'><font color=#063b48><b>*)</b></td>
			 </tr>
			 
			 <tr> <td> <font color=#063b48><b>Nama Ayah</b> </td>
			 <td><font color=#063b48><b>:</b></td>
			 <td><input type='text' name='namaay' size='60' value='$data[namaayah]'><font color=#063b48><b>*)</b></td>
			 </tr>
			 <tr> <td> <font color=#063b48><b>Alamat</b></td>
			 <td><font color=#063b48><b>:</b></td>
			 <td><input type='text' name='alamat' size='60' value='$data[alamat]'></b></td>
			 </tr>
			 <tr> <td><font color=#063b48><b>ttl</b></td>
			 <td><font color=#063b48><b>:</b></td>
			 <td><input type='text' name='ttl' size='40' value='$data[ttl]'></b></td>
			 </tr>
			 <tr> <td><font color=#063b48><b>JK</b></td>
			 <td><font color=#063b48><b>:</b></td>
			 <td><input type='text' name='jk' size='5' value='$data[jk]'></b></td>
			 </tr>
			 <tr> <td><font color=#063b48><b>umur</b></td>
			 <td><font color=#063b48><b>:</b></td>
			 <td><input type='text' name='umur' size='6' value='$data[umur]'></b></td>
			 </tr>
			 <tr> <td><font color=#063b48><b>berat</b></td>
			 <td><font color=#063b48><b>:</b></td>
			 <td><input type='text' name='berat' size='6' value='$data[berat]'><font color=#063b48><b>*)</b></td>
			 </tr>
			 <tr> <td><font color=#063b48><b>tinggi</b></td>
			 <td><font color=#063b48><b>:</b></td>
			 <td><input type='text' name='tinggi' size='6' value='$data[tinggi]'><font color=#063b48><b>*)</b></td>
			 </tr>
			 <tr>
			 <td><font color=#063b48><b>Diberi Vaksin</b></td>
			 <td><font color=#063b48><b>:</b></td>
			 <td><select name='kdvaksin'>
			 <option value='++' selected>Pilih Vaksin</option>";
			 $sql = mysql_query("SELECT * FROM vaksin ORDER BY kdvaksin ASC");
			 while ($data = mysql_fetch_array($sql)) {
			 echo "<option value='$data[kdvaksin]'>
			 $data[kdvaksin]</option>";
			 }
			 echo " </select></td>
			 </tr>
			 <tr>
			 <td><font color=#063b48><b>Kode kader</b></td>
			 <td><font color=#063b48><b>:</b></td>
			 <td><select name='kdkader'>
			 <option value='++' selected>Pilih kader</option>";
			 $sql = mysql_query("SELECT * FROM kader_psd ORDER BY kdkader ASC");
			 while ($data = mysql_fetch_array($sql)) {
			 echo "<option value='$data[kdkader]'>
			 $data[kdkader]</option>";
			 }
			 echo " </select></td>
			 </tr>		 
			 <tr> <td colspan=3>*) Isikan secara Lengkap</td></tr>
			 <tr>
			 <th colspan='6'><input type='submit' value='Simpan'><a href='javascript:history.go(-1)'><input type='button' value='cancel'></a></th>
			 </tr>
			 </table>  </form>" ;?>
			 </td></tr>
			 <td><tr>
			  
			 </table>
			
			 </td>
			 
			 </table>
			 
			 </tr></td>
			
			</table>
			
			
			
		
			
			<br>
			
						</tr></td>
				 </table>
				 </table>
				</body>
				</html>
