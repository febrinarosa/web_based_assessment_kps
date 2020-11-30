<?php
header("Content-type: application/vnd-ms-excel");
header ("Content-Disposition: attachment; filename=tes.xls");

$host ="localhost";
        $user ="adminfis_kps_tim";
        $pass ="tim20180826";
        $name ="adminfis_fisikadasar1";
        $koneksi = mysqli_connect("localhost","adminfis_kps_tim","tim20180826");

        if(!mysqli_select_db($koneksi,$name)){
        	    echo"gagal";
                }
$q=mysqli_query($koneksi,'select * FROM kerapatan_2020');
?>
<table>
		<thead>
		<tr bgcolor='#CCCCCC' class="garis">
			<th>NO</th>
		<th><center>Nama</center></th>
		<th><center>NIM</center></th>
		<th><center>Kelas</center></th>
		<th><center>Observasi</center></th>
		<th><center>Klasifikasi</center></th>
		<th><div>Merencanakan Percobaan</div></th>
		<th><center>Analisis Percobaan</center></th>
		<th><center>Mengidentifikasi Variabel</center></th>
		<th><center>Melakukan Percobaan</center></th>
		<th><center>Prediksi</center></th>
		<th><center>Mendefinisikan Variabel Secara Operasional</center></th>
		<th><center>Melakukan Pengukuran</center></th>
		<th><center>Membuat Tabel</center></th>
		<th><center>Komunikasi</center></th>
		<th><center>Mengumpulkan dan Mengorganisasikan Data</center></th>
		<th><center>Membuat Grafik</center></th>
		<th><center>Mendeskripsikan Hubungan antarvariabel</center></th>
		<th><center>Merumuskan Hipotesis</center></th>
		<th><center>Kesimpulan</center></th>
		<th><center>Nilai</center></th>
		</tr>
		</thead> 
		
		<?php if(mysqli_num_rows($q)>0){ 
					$no = 1;
					while($data = mysqli_fetch_array($q)){
				?>	 
		<tr>

					<td><?php echo $no ?></td>
					<td><?=$data['nama']?></td>
					<td><?php echo $data["nimkelas"];?></td>
					<td><?php echo $data["kelas"];?></td>
					<td><center><?php echo $data["observasi"];?></center></td>
					<td><center><?php echo $data["klasifikasi"];?></center></td>
					<td><center><?php echo $data["merencanakan_percobaan"];?></center></td>
					<td><center><?php echo $data["analisis_percobaan"];?></center></td>
					<td><center><?php echo $data["mengidentifikasi_variabel"];?></center></td>   
					<td><center><?php echo $data["melakukan_percobaan"];?></center></td> 
					<td><center><?php echo $data["prediksi"];?></center></td>
					<td><center><?php echo $data["mendefinisikan_variabel_secara_operasional"];?></center></td>
					<td><center><?php echo $data["melakukan_pengukuran"];?></center></td>
					<td><center><?php echo $data["membuat_tabel"];?></center></td>
					<td><center><?php echo $data["komunikasi"];?></center></td>
					<td><center><?php echo $data["mengumpulkan_dan_mengorganisasikan_data"];?></center></td>
					<td><center><?php echo $data["membuat_grafik"];?></center></td>
					<td><center><?php echo $data["mendeskripsikan_hubungan_antarvariabel"];?></center></td>
					<td><center><?php echo $data["merumuskan_hipotesis"];?></center></td>
					<td><center><?php echo $data["kesimpulan"];?></center></td>
					<td><center><?php echo $data["nilai"];?></center></td>

				<?php $no++; } ?>
				<?php } ?>
		</table>

