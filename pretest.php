<!doctype html>
<html lang="id">
  <head>
    <title>Fisika Dasar</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/navbars/">

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="assets/dist/css/navbar.css" rel="stylesheet">
  </head>
  <body class="bg-info">

<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
     <a class="navbar-brand" href="#"><img src="assets/img/unja.png" class="img-fluid" width="50" height="50"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample09">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="https://fisika.fkip.unja.ac.id/fisikadasar1/home.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://fisika.fkip.unja.ac.id/fisikadasar1/buku.htm">Panduan</a>
        </li>        
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tes</a>
          <div class="dropdown-menu" aria-labelledby="dropdown09">
            <a class="dropdown-item" href="https://fisika.fkip.unja.ac.id/fisikadasar1/pretest.php">Pre-test</a>
            <a class="dropdown-item" href="https://fisika.fkip.unja.ac.id/fisikadasar1/postest_fix.php">Post-test</a>
		  </div>
		</li>
        <li class="nav-item">
          <a class="nav-link" href="https://fisika.fkip.unja.ac.id/fisikadasar1/login.php">Penilaian</a>
        </li> 
		<li class="nav-item">
          <a class="nav-link" href="https://fisika.fkip.unja.ac.id/fisikadasar1/formatlaporan.php">Format</a>
        </li>    
		<li class="nav-item">
          <a class="nav-link" href="#">Tentang</a>
        </li>                          
      </ul>
    </div>
  </nav>
<div><img src="assets/img/img.jpeg" alt="Responsive image"  height="300px" width="100%"></div>
	
  <main role="main">
    <div class="jumbotron bg-light">

      <div class="col-sm-10 mx-auto">
        <tr>
          <td width="800" height="0" bgcolor="#FFFFFF" scope="row">          
		 <p>&nbsp;</p>
<form action="" method="post">
<p align="center"><strong>LEMBAR PRETEST MAHASISWA </strong></p>
<p align="center"><strong>KERAPATAN</strong></p>
<p><strong><b>PETUNJUK</b> </strong></p>
<p align="justify">Isi data Anda dan jawablah pertanyaan berikut sebelum memulai praktikum kerapatan! </p>
			<table class="table">
			  <tr>
				<td width="200"><b>Nama</b></td>
				<td><input type="text" name="nama" placeholder="Nama Lengkap" required/></td>
			  </tr>
			  <tr>
				<td><b>NIM</b></td>
				<td><input type="text" name="nimkelas" placeholder="NIM" required/></td>
			  </tr>
			  <tr>
				<td><b>Kelas</b></td>
				<td><select name="kelas" required/>
				<option>--- Kelas ---</option>
				<option value="Reg A">Reg A</option>
				<option value="Reg B">Reg B</option>
				<option value="Reg C">Reg C</option>
				</select></td>
			  </tr>
			  <tr>
				<td><b>Materi Praktikum</b></td>
				<td><input type="text" name="materipraktikum" placeholder="Materi Praktikum" required/></td>
			  </tr>
			   <tr>
				<td><b>Semester</b></td>
				<td><input type="text" name="semester" placeholder="Semester" required/></td>
			  </tr>
			  </table>	  
		  </div>
		<div>
<table class="table col-md-12 col-sm-12" border="1">
<tr>
    <td width="20"><div align="center">No.</div></td>
    <td class="col-sm-5 textwrap"><div align="center">Soal</div></td>
    <td class="col-sm-5"><div align="center">Jawab</div></td>
</tr>
<tr>
    <td><div align="center">1.</div></td>
    <td class="col-sm-5 textwrap">Apa yang dimaksud dengan kerapatan?<div></td>
     <td class="col-sm-5"><div form method="POST" action="pretest.php" name="input"></div>
		<textarea name="p1" placeholder="Isikan jawaban"></textarea>
	</td>
</tr>
<tr>
    <td><div align="center">2.</div></td>
    <td class="col-sm-5 textwrap">Bagaimana cara menentukan kerapatan benda secara praktik maupun teori?<div></td>
    <td class="col-sm-5"><div form method="POST" action="pretest.php" name="input"></div>
	<textarea name="p2" placeholder="Isikan jawaban"></textarea>
	</td>
</tr>
<tr>
    <td><div align="center">3.</div></td>
    <td class="col-sm-5 textwrap">Apa yang dimaksud dengan kerapatan relatif?<div></td>
    <td class="col-sm-5"><div form method="POST" action="pretest.php" name="input"></div>
	<textarea name="p3" placeholder="Isikan jawaban"></textarea>
	</td>
</tr>
<tr>
   <td><div align="center">4.</div></td>
    <td class="col-sm-5 textwrap">Jelaskan prinsip hukum Archimedes!<div></td>
    <td class="col-sm-5"><div form method="POST" action="pretest.php" name="input"></div>
	<textarea name="p4" placeholder="Isikan jawaban"></textarea>
	</td>
</tr>
<tr>
    <td><div align="center">5.</div></td>
    <td class="col-sm-5 textwrap">Buktikan persamaan hukum Archimedes beserta turunannya!<div></td>
    <td class="col-sm-5"><div form method="POST" action="pretest.php" name="input"></div>
	<textarea name="p5" placeholder="Isikan jawaban"></textarea>
	</td>
</tr>
</table></div>
		  <p></p>
      <div align="right">
    <input class="btn btn-primary" type="submit" value="Submit">

<?php
$host='localhost';
$username='adminfis_kps_tim';
$password='tim20180826';
$database='adminfis_fisikadasar1';
$koneksi = mysqli_connect($host,$username,$password);
mysqli_select_db($koneksi,$database);	
	  if (isset($_POST['nama'])&&isset($_POST['nimkelas'])&&isset($_POST['materipraktikum'])&&isset($_POST['semester'])&&isset($_POST['p1'])&&isset($_POST['p2'])&&isset($_POST['p3'])&&isset($_POST['p4'])&&isset($_POST['p5']))
	  {
		$nama = $_POST['nama'];
		$nimkelas = $_POST['nimkelas'];
		$materipraktikum = $_POST['materipraktikum'];
		$semester = $_POST['semester'];
		$p1 = $_POST['p1'];
		$p2 = $_POST['p2'];
		$p3 = $_POST['p3'];
		$p4 = $_POST['p4'];
		$p5 = $_POST['p5'];

		$sql= "INSERT INTO pretest_kerapatan(nama,nimkelas,materipraktikum,semester,p1,p2,p3,p4,p5)VALUES('$nama','$nimkelas','$materipraktikum','$semester','$p1','$p2','$p3','$p4','$p5')";

		if (mysqli_query($koneksi, $sql)){
			echo'<script language="javascript">alert("Terima kasih, data Anda berhasil disimpan");document.location="pretest.php";</script>';
		}
		else
		{

			echo'<div id="error">Uppssss....!Query ke database gagal dilakukan!</div>';
		}  
	}	
?>
	      </div>
    </div>
  </main>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</html>	  
