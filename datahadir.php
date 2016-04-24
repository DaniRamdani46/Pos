<html>
	<head>
		<title>LIHAT DATA</title>
	</head>
<body Background="img/1000.jpg">
<br>
<table align="center"  width="907"border=1 bordercolor=#84faea >
<tr>

			<th colspan=5 ><img src="img/PPIEU.jpg" width="907" height="208"></th>
			</tr>
			
			</table>
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
			<TD width="170"><a href="upload.php" title="Silahkan Klik untuk melihat data">
			<center><font size=2 font face="comic sans ms" font color=#063b48><b><center>
			Upload</b></center></td>
			<TD width="170"><a href="galery.php" title="Silahkan Klik untuk melihat data">
			<center><font size=2 font face="comic sans ms" font color=#063b48><b><center>
			Gallery</b></center></td>
			<TD width="170"><a href="chat.php" title="Silahkan Klik untuk melihat data">
			<center><font size=2 font face="comic sans ms" font color=#063b48><b><center>
			Chat</b></center></td>
			<TD width="170"><a href="index.html" title="Silahkan Klik untuk melihat data">
			<center><font size=2 font face="comic sans ms" font color=#063b48><b><center>
			LOGOUT</b></center></a></td>
			</TABLE>
		
			
			
			<table align="center"  width="920" >
			
			<tr><th Background="img/kl.gif" width="920" height="23" ></th></tr>
			</table>
			
			
			<table align="center"  width="910" >
			<tr><td>
			
			<?php
			include "librari/koneksi.php";
			$Num_Rows = mysql_num_rows(mysql_query("SELECT * FROM jadwalpiket"));
			?>
			<span><font size=3 font face="Freehand521 BT" font color=#063b48>Informasi Kehadiran Piket, Total Data: <?php echo $Num_Rows; ?>
			data</span>
			</tr></td>
			<tr><td><hr width=100%></hr>
			</td></tr>
			</table>
			<table align="center"  width="910" >
			<tr>
			<th align="left"><?php echo "<input type='button' value='Tambah ' onclick=\"window.location.href='puthadir.php';\">"; ?> </th>
			</tr>
			<tr>
			<td>
				<table border=1  bordercolor=#84faea align="left" >
					<tr bgcolor=#063b48 >
						<th style="width:5%"><font color=#84faea  font size="3" font face ="calibri ">No</th>
						<th style="width:20%"><font color=#84faea  font size="3" font face ="calibri ">Kd Bulan</th>
						<th style="width:20"><font color=#84faea  font size="3" font face ="calibri ">Bulan</th>
						<th style="width:15%"><font color=#84faea  font size="3" font face ="calibri ">Waktu</th>
						<th style="width:20%"><font color=#84faea  font size="3" font face ="calibri ">Kode Kader</th>
						<th style="width:15%"><font color=#84faea  font size="3" font face ="calibri ">Hadir</th>
						
						</tr>
						<?php
						$batas = 15;
						$pos = 0;
						$sql = mysql_query("SELECT * from jadwalpiket ORDER BY kdbulan ASC LIMIT $pos,$batas");
						$no = $pos + 1;
						while ($data = mysql_fetch_array($sql)){
						?>
						<tr>
							<td align=center><?php echo $no; ?></td>
							<td><font color=#063b48  font size="3" font face ="calibri "><center><?php echo $data['kdbulan'];?></td>
							<td><font color=#063b48 font size="3" font face ="calibri "><center><?php echo $data['bulan'];?></td>
							<td><font color=#063b48  font size="3" font face ="calibri "><center><?php echo $data['waktu'];?></td>
							<td><font color=#063b48  font size="3" font face ="calibri "><center><?php echo $data['kdkader'];?></td>
							<td><font color=#063b48  font size="3" font face ="calibri "><center><?php echo $data['hadir'];?></td>
							</tr>
							<?php
							$no++;
							}
							echo "</table>";
							?>
							</td>
							</tr>
							</table>
							</body>
							</html>
			
			
			
