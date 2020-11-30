<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<link rel="stylesheet" href = "style.css">
<body>
<h1><center>PENILAIAN PRETEST</center></h1>
	<h4><a href="lihatpretest.php"style="text-decoration:none">Pilih data baru</a><p></p> </h4>
	
	<?php
$host='localhost';
$username='adminfis_kps_tim';
$password='tim20180826';
$database='adminfis_fisikadasar1';
$koneksi = mysqli_connect($host,$username,$password);
mysqli_select_db($koneksi,$database);
$q=mysqli_query($koneksi,"SELECT * FROM datamahasiswa_postest");

?>
<table border=1>

<tr>
<td>No.</td>
<td>NIM</td>
<td>Nama</td>
<td>Nilai</td>

<?php
		$no = 1;
		while ($data = mysqli_fetch_array($q)){
	    $qq=mysqli_query($koneksi,"SELECT nilai FROM tb_jawabanpostest WHERE nimkelas='$data[nimkelas]'");
            $tot=0;
            while ($data2 = mysqli_fetch_array($qq)){
                $tot=$tot+$data2['nilai'];
            }
		    
			echo "<tr>";
			echo "<td>".$no."</td>";
			echo "<td>".$data['nimkelas']."</td>";
			if ($tot==0){
			echo "<td><a href = 'inputnilai_postest.php?nim=".$data['nimkelas']."'>".$data['nama']."</a></td>";
			}
			else{
			    echo "<td>".$data['nama']."</td>";
			}
			echo "<td>".$tot."</td>";
			echo "</tr>";	
		    
			$no++;
}
?>	
	</table>
	

	
	
	
	
	
	