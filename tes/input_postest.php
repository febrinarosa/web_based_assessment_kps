<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Fisika Dasar I</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

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
    <link href="assets/dist/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#"><img src="assets/img/unja.png" class="img-fluid" width="30" height="30">Pendidikan Fisika</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3 text-light">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <span data-feather="layout"></span>
              Dashboard <span class="sr-only"></span>
            </a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="home.html">
              <span data-feather="home"></span>
              Home
            </a>
         </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="book"></span>
              Penuntun
            </a>
          </li>
  <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span data-feather="users"></span>Penilaian</a>
          <div class="dropdown-menu" aria-labelledby="dropdown09">
            <a class="dropdown-item" href="kerapatan.php">KPS</a>
            <a class="dropdown-item" href="lihatpretest.php">Pre-test</a>
            <a class="dropdown-item" href="lihatpostest_fix.php">Post-test</a>
		  </div>
		</li>
          <li class="nav-item">
            <a class="nav-link" href="lihatkerapatan.php">
              <span data-feather="bar-chart-2"></span>
              Tampilkan Data
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rubrik.php">
              <span data-feather="layers"></span>
              Rubrik
            </a>
          </li>
        </ul>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="jumbotron">

      <div class="col-sm-10 mx-auto">
        <tr>
          <td width="800" height="0" bgcolor="#FFFFFF" scope="row">          
		 <p>&nbsp;</p>

<form action="" method="post">
<div class="alert alert-primary" role="alert">
    <h4 align="center">INPUT TES</h4>
<hr>
<p><strong></strong>&nbsp; <strong>Petunjuk </strong></p>
<p align="justify">Silahkan input soal pada tabel berikut.</p>
</div>
      <div id="container"></div>
<table class="table col-md-12 col-sm-12 table-bordered table table-hover" border>
<table width="950" border="1">
<tr>
	<td><textarea name="isi_soal" placeholder="isikan soal"></textarea></td>
</tr>
	</table>
<p></p>
      <div align="right">
    <input type="submit" name="submit" value="Submit">

<?php
$host='localhost';
$username='adminfis_kps_tim';
$password='tim20180826';
$database='adminfis_fisikadasar1';
$koneksi = mysqli_connect($host,$username,$password);
mysqli_select_db($koneksi,$database);		  
	

if (isset($_POST['isi_soal']))
	  {
		$isi_soal = $_POST['isi_soal'];
	
	$sql= "INSERT INTO tb_soalpostest (isi_soal) VALUES ('$isi_soal')";

		if (mysqli_query($koneksi, $sql)){
			echo'<script language="javascript">alert("Terima kasih, soal berhasil ditambahkan!");document.location="post_test.php";</script>';
		}
		else
		{
			echo '<div id="error">Uppssss....!Query ke database gagal dilakukan!</div>';
		}  
		
	  }
	  
	?>
	</main>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="assets/dist/js/dashboard.js"></script>
<script  type = "text/javascript">
</html>

