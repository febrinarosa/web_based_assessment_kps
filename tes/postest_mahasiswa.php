<p align="center"><strong>SOAL POST-TEST MAHASISWA </strong></p>
<p align="center"><strong>KERAPATAN</strong></p>
<p><strong><b>PETUNJUK</b> </strong></p>
<p align="justify">Isi data Anda dan jawablah pertanyaan berikut sebelum memulai praktikum kerapatan! </p>

<form action="" method="post">
<p align="left"><strong>Nama &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
  <input type="text" name="nama" placeholder="Nama Lengkap" required/>
  </strong></p>
<p><strong>NIM/Kelas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
    <input type="text" name="nimkelas" placeholder="NIM/Kelas" required/>
</strong></p>
<p align="left"><strong>Materi Praktikum	&nbsp;:
    <input type="text" name="materipraktikum" placeholder="Materi Praktikum" required/>
  </strong></p>

<table border=1>
<tr>
	<td>No.</td>
	<td>Soal</td>
	<td>Jawab</td>
</tr>
<?php
$host='localhost';
$username='adminfis_kps_tim';
$password='tim20180826';
$database='adminfis_fisikadasar1';
$koneksi = mysqli_connect($host,$username,$password);
mysqli_select_db($koneksi,$database);
$q=mysqli_query($koneksi,"SELECT * FROM tb_soalpostest");
//$data = mysqli_fetch_array($q);

	$no = 1;
            while($data = mysqli_fetch_array($q)){
				echo "<tr>";
				echo "<td>".$no."</td>";
			  	echo "<td>".$data['isi_soal']."</td>";
				echo "<td><textarea placeholder='Isikan jawaban' name='jwb[$no][answ]'></textarea></td>";
				echo "<input type='hidden' name='jwb[$no][id]' value='".$data['id']."'>";
				echo "</tr>";
		$no++; }
	
echo "</table>";
echo "<input type='submit' name='submit' value='Submit'>";
echo "</form>";
echo "<p></p>";
echo "<div align='right'>";



 if (isset($_POST['nama'])&&isset($_POST['nimkelas'])&&isset($_POST['materipraktikum']))
	  {
	 
		$nama = $_POST['nama'];
		$nimkelas = $_POST['nimkelas'];
		$materipraktikum = $_POST['materipraktikum'];
		
		$sql= "INSERT INTO datamahasiswa_postest (nama,nimkelas,materipraktikum)VALUES('$nama','$nimkelas','$materipraktikum')";
        //echo $sql;
        if (mysqli_query($koneksi, $sql)){
            foreach($_POST['jwb'] as $jawaban=>$values){
                    //echo $values['id'];
                    //echo $values['answ']."<br>";
                    
                    $sql2="INSERT INTO tb_jawabanpostest (nimkelas,id,jawaban)VALUES('$nimkelas','$values[id]','$values[answ]')";
                    $query=mysqli_query($koneksi, $sql2);
                    
                //echo $sql2."<br>";
                
            }
            echo'<script language="javascript">alert("Terima kasih, data Anda berhasil disimpan");document.location="postest_mahasiswa.php";</script>';
        }
		else
		{
			echo'<div id="error">Uppssss....!Query ke database gagal dilakukan!</div>';
		} 
    }
			
		 
		
?>
		  
	
		  

		