<?php
header("Content-type: application/vnd-ms-excel");
header ("Content-Disposition: attachment; filename=pretest.xls");

$host ="localhost";
        $user ="adminfis_kps_tim";
        $pass ="tim20180826";
        $name ="adminfis_fisikadasar1";
        $koneksi = mysqli_connect("localhost","adminfis_kps_tim","tim20180826");

        if(!mysqli_select_db($koneksi,$name)){
        	    echo"gagal";
                }
$q=mysqli_query($koneksi,'select * FROM nilai_pretest');
?>
<table>
		<thead>
		<tr bgcolor='#CCCCCC' class="garis">
			<th>NO</th>
		<th><center>Nama</center></th>
		<th><center>NIM</center></th>
		<th><center>Materi Praktikum</center></th>
		<th><center>p1</center></th>
		<th><center>p2</center></th>
		<th><center>p3</center></th>
		<th><center>p4</center></th>
		<th><center>p5</center></th>
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
					<td><?php echo $data["materipraktikum"];?></td>
					<td><center><?php echo $data["p1"];?></center></td>
					<td><center><?php echo $data["p2"];?></center></td>
					<td><center><?php echo $data["p2"];?></center></td>
					<td><center><?php echo $data["p3"];?></center></td>
					<td><center><?php echo $data["p4"];?></center></td>   
					<td><center><?php echo $data["p5"];?></center></td> 
					<td><center><?php echo $data["nilai"];?></center></td>

				<?php $no++; } ?>
				<?php } ?>
		</table>

