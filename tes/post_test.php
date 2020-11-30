<style type="text/css">
<!--
body {
	margin-top: 0px;
	background-color: #BBE4F4;
}
.style1 {color: #CC3399}
-->
</style>
<style type="text/css">
	* { }
	body { padding: 0px; font-family: "Times New Roman", Times, serif;}
	ul { list-style: none; padding-left: 0px; margin-top: 0px;}
	ul li {float: left; padding-right: 3px; position: relative; }
	ul a {display: block; vertical-align: middle; width: 100px; height: 20px; text-align: left; background: #69C; color: #FFF; text-decoration: none;}
	ul a:hover {background: #09C; }
	li > ul { display: none; position: absolute; left: 0; top: 100%; }
	li:hover > ul { display: block; }
	li > ul li { padding: 0; padding-top: 1px; padding-bottom: 0px; }
	li > ul li > ul {left: 100%; top: 0; padding-left: 1px;}
	li > ul li > ul li {width: 100px; }
	li:hover > a {background:#09C; }
	</style>
<div align="center">
  <table width="928" align="center">
    <tr>
      <td width="966" height="0" bgcolor="#FFFFFF" scope="col"><table width="922">
          <tr>
            <th width="966" height="243" scope="col"><img src="img.jpeg" width="960" height="243"></th>
          </tr>
          <tr>
            <td height="0" bgcolor="#F5F5F5" scope="row">    <ul>
                <li><a href="http://fisika.fkip.unja.ac.id/fisdasI">Home</a></li>
                <li><a href="http://fisika.fkip.unja.ac.id/fisdasI/kerapatan/penuntun_kerapatan.htm">Panduan</a></li>
				<li><a href="#">Tes</a>
				<ul>
                      <li><a href="#" >Pretest</a></li>
					  <li><a href="#" >Post-test</a></li>
                    </ul>
				</li>
				<li><a href="#">Laporan</a></li>
                <li><a href="#">Penilaian</a>
                <ul>
                      <li><a href="http://fisika.fkip.unja.ac.id/fisdasI/kerapatan/kerapatan.php">KPS</a></li>
                      <li><a href="#" >Pretest</a></li>
					  <li><a href="#" >Post-test</a></li>
                    </ul>
                </li>
                 <li><a href="http://fisika.fkip.unja.ac.id/fisdasI/kerapatan/rubrikrevisi.html">Rubrik</a></li>
                <li><a href="http://fisika.fkip.unja.ac.id/fisdasI/format.htm">Format</a></li>
				<li><a href="http://fisika.fkip.unja.ac.id/fisdasI/tentang.htm">Tentang</a></li>
				
        <tr>
          <td width="800" height="0" bgcolor="#FFFFFF" scope="row">          
		 <p>&nbsp;</p>
<form action="" method="post">
<p align="center"><strong>SOAL POST-TEST MAHASISWA </strong></p>
<p align="center"><strong>KERAPATAN</strong></p>
<p><strong><b>PETUNJUK</b> </strong></p>
<p align="justify">Silahkan input soal post-test ke dalam tabel di bawah ini.</p>
	<p></p><div align = right><a href="http://fisika.fkip.unja.ac.id/fisdasI/kerapatan/input_postest.php">tambah soal</a>
<form action="" method="post">
<table width="950" border="1">
<tr>
	<td>No.</td>
	<td>Soal</td>
</tr>
	<?php
$host='localhost';
$username='adminfis_kps_tim';
$password='tim20180826';
$database='adminfis_fisikadasar1';
$koneksi = mysqli_connect($host,$username,$password);
mysqli_select_db($koneksi,$database);
$q=mysqli_query($koneksi,"SELECT * FROM tb_soalpostest");
$data = mysqli_fetch_array($q);

	$no = 1;
            while($data = mysqli_fetch_array($q)){
				echo "<tr>";
				echo "<td>".$no."</td>";
				echo "<td>".$data['isi_soal']."</td>";
		$no++; }
?>
	</table>
	</form>
	
	
	
	