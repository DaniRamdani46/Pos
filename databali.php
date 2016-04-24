<html>
	<head>
		<title>LIHAT DATA</title>
	</head>
<body Background="img/1000.jpg">
<br>
<table align="center"  width="960"border=1 bordercolor=#84faea >
<tr>

			<th colspan=5 ><img src="img/PPIEU.jpg" width="960" height="225"></th>
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
			
			
			<table align="center"  width="960" >
			<tr><td>
			
			<?php
			include "librari/koneksi.php";
			$Num_Rows = mysql_num_rows(mysql_query("SELECT * FROM identitas_bayi_balita"));
			?>
			<span><font size=3 font face="Freehand521 BT" font color=#063b48>Informasi balita dan Imunisasi, Total Data: <?php echo $Num_Rows; ?>
			Data</span>
			</tr></td>
			<tr><td><hr width=100%></hr>
			</td></tr>
			</table>
			<table align="center"  width="960" >
			<tr>
			<th align="left"><?php echo "<input type='button' value='Tambah ' onclick=\"window.location.href='putbalita.php';\">"; ?> </th>
			</tr>
			<tr>
			<td>
				<table border=1  bordercolor=#84faea align="center"  >
					<tr bgcolor=#063b48 >
						<th style="width:3%"><font color=#84faea font size="2" font face ="calibri ">No</th>
						<th style="width:7%"><font color=#84faea font size="2" font face ="calibri ">No Kms</th>
						<th style="width:15%"><font color=#84faea font size="2" font face ="calibri ">Nama</th>
						<th style="width:12%"><font color=#84faea  font size="2" font face ="calibri ">Nama Ayah</th>
						<th style="width:15%"><font color=#84faea  font size="2" font face ="calibri ">Alamat</th>
						<th style="width:10%"><font color=#84faea  font size="2" font face ="calibri ">Ttl</th>
						<th style="width:3%"><font color=#84faea  font size="2" font face ="calibri ">Jk</th>
						<th style="width:5%"><font color=#84faea  font size="2" font face ="calibri ">Umur</th>
						<th style="width:5%"><font color=#84faea  font size="2" font face ="calibri ">Berat</th>
						<th style="width:5%"><font color=#84faea  font size="2" font face ="calibri ">Tinggi</th>
						<th style="width:8%"><font color=#84faea  font size="2" font face ="calibri ">Kd Vaksin</th>
						<th style="width:8%"><font color=#84faea  font size="2" font face ="calibri ">Kd Kader</th>
						<th style="width:3%"><font color=#84faea  font size="2" font face ="calibri ">Ket</th>
						</tr>
						<?php
						$batas = 15;
						$pos = 0;
						$sql = mysql_query("SELECT * from identitas_bayi_balita ORDER BY nokms ASC LIMIT $pos,$batas");
						$no = $pos + 1;
						while ($data = mysql_fetch_array($sql)){
						?>
						<tr>
							<td align=center><font color=#063b48  font size="2" font face ="calibri "><?php echo $no; ?></td>
							<td align=center><font color=#063b48  font size="2" font face ="calibri "><?php echo $data['nokms'];?></td>
							<td align=center><font color=#063b48  font size="2" font face ="calibri "><?php echo $data['nama'];?></td>
							<td align=center><font color=#063b48  font size="2" font face ="calibri "><?php echo $data['namaayah'];?></td>
							<td align=center><font color=#063b48  font size="2" font face ="calibri "><?php echo $data['alamat'];?></td>
							<td align=center><font color=#063b48  font size="2" font face ="calibri "><?php echo $data['ttl'];?></td>
							<td align=center><font color=#063b48  font size="2" font face ="calibri "><?php echo $data['jk'];?></td>
							<td align=center><font color=#063b48  font size="2" font face ="calibri "><?php echo $data['umur'];?></td>
							<td align=center><font color=#063b48  font size="2" font face ="calibri "><?php echo $data['berat'];?></td>
							<td align=center><font color=#063b48  font size="2" font face ="calibri "><?php echo $data['tinggi'];?></td>
							<td align=center><font color=#063b48  font size="2" font face ="calibri "><?php echo $data['kdvaksin'];?></td>
							<td align=center><font color=#063b48  font size="2" font face ="calibri "><?php echo $data['kdkader'];?></td>
							<td><a href="editbali.php?id=<?php echo $data['nokms']; ?>"> Edit </a> | <a href="hapusbali.php?id=<?php echo $data['nokms'];?>&Nama=<?php echo $data['nama']; ?>"
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
			
			
			
