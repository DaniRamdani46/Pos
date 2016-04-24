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
			<TD width="170"><a href="hallogin.php" title="Silahkan Klik untuk melihat data">
			<center><font size=2 font face="comic sans ms" font color=#063b48><b><center>
			LOGOUT</b></center></a></td>
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
					Data Kader Posyandu Bina Bakti</td>
					</tr>
			<tr WIDTH="700">
					<td >
			
			 <? include "librari/koneksi.php";
			
			 echo "<form method='POST' action='aksiputkader.php'>
			 <table>
			 <tr>
			 <td width='150'><font color=#063b48><b> Kode Kader</b>r </td>
			 <td  width='15'> <font color=#063b48><b>:</b> </td>
			 <td><input type='text' name='kodekader' size='10' maxlength='6'><font color=#063b48><b>*)</b></td>
			 </tr>
			 <tr> <td><font color=#063b48><b> Nama</b> </td>
			 <td><font color=#063b48><b>:</b></td>
			 <td><input type='text' name='namakader' size='60' maxlength='50'><font color=#063b48><b>*)</b></td>
			 </tr>
			 
			 <tr> <td> <font color=#063b48><b>JK</b> </td>
			 <td><font color=#063b48><b>:</b></td>
			 <td><input type='text' name='jkkader' size='4' maxlength='1'><font color=#063b48><b>*)</b></td>
			 </tr>
			 <tr> <td> <font color=#063b48><b>Alamat</b></td>
			 <td><font color=#063b48><b>:</b></td>
			 <td><input type='text' name='alkader' size='60' maxlength='50'><font color=#063b48><b>*)</b></td>
			 </tr>
			 <tr> <td><font color=#063b48><b> tugas </b></td>
			 <td><font color=#063b48><b>:</b></td>
			 <td><input type='text' name='tugaskader' size='30' maxlength='30'><font color=#063b48><b>*)</b></td>
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
