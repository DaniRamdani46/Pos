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
			$Num_Rows = mysql_num_rows(mysql_query("SELECT * FROM kader_psd"));
			?>
			<span><font size=3 font face="Freehand521 BT" font color=#063b48>Informasi Kader, Total Data: <?php echo $Num_Rows; ?>
			Kader</span>
			</tr></td>
			<tr><td><hr width=100%></hr>
			</td></tr>
			</table>
			<table align="center"  width="910" >
			<tr>
			<th><?php echo "<input type='button' value='Tambah ' onclick=\"window.location.href='putkader.php';\">"; ?> </th>
			</tr>
			<tr>
			<td>
				<table border=1  bordercolor=#84faea align="center" >
					<tr bgcolor=#063b48 >
						<th style="width:5%"><font color=#84faea>No</th>
						<th style="width:10%"><font color=#84faea>KODE KADER</th>
						<th style="width:21%"><font color=#84faea>NAMA</th>
						<th style="width:5%"><font color=#84faea>JK</th>
						<th style="width:22%"><font color=#84faea>ALAMAT</th>
						<th style="width:22%"><font color=#84faea>TUGAS</th>
						<th style="width:22%"><font color=#84faea></th>
						
						</tr>
						<?php
						$batas = 15;
						$pos = 0;
						$sql = mysql_query("SELECT * from kader_psd ORDER BY kdkader ASC LIMIT $pos,$batas");
						$no = $pos + 1;
						while ($data = mysql_fetch_array($sql)){
						?>
						<tr>
							<td align=center><?php echo $no; ?></td>
							<td><?php echo $data['kdkader'];?></td>
							<td><?php echo $data['nama'];?></td>
							<td><?php echo $data['jk'];?></td>
							<td><?php echo $data['alamat'];?></td>
							<td><?php echo $data['tugas'];?></td>
							<td><a href="editkader.php?id=<?php echo $data['kdkader']; ?>"> Edit </a> | <a href="hapuskader.php?id=<?php echo $data['kdkader'];?>&Nama=<?php echo $data['nama']; ?>"
							onclick="return confirm('Anda yakin ingin menghapus user <?php echo $data[nama]; ?>?');">Hapus</a></td>
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
			
			
			
