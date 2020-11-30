<?php
$nim=$_GET['nim'];

?>

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
      <a class="nav-link" href="home.html">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <span data-feather="layout"></span>
              Dashboard <span class="sr-only"></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home.html">
              <span data-feather="book"></span>
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="buku.htm">
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
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<link rel="stylesheet" href = "style.css">
<h4><center>Input Nilai Post Test</center></h4>
<div class="p-3 mb-2 bg-info text-white">
<p><strong><br>PETUNJUK</b></strong></br>
<align="justify">Silahkan masukkan nilai pada tiap nomor soal.<strong></strong>
</div>

	<?php
$host='localhost';
$username='adminfis_kps_tim';
$password='tim20180826';
$database='adminfis_fisikadasar1';
$koneksi = mysqli_connect($host,$username,$password);
mysqli_select_db($koneksi,$database);
$q=mysqli_query($koneksi,"SELECT * FROM postest_kerapatan WHERE nimkelas='$nim'");
$data = mysqli_fetch_array($q);
?>
<form action="" method="post">
		  <div class="table-responsive table table-striped">
		<table border=1 cellspacing="0" class="table bg-light  table-sm dtHorizontalExampleWrapper"  cellspacing="0"
  width="100%" id="dtHorizontalExample">
		<tr>
			<th>No.</th>
			<th>Jawaban</th>
			<th>Nilai</th>
		</tr>
		<tr>
			<td>p1</td>
			<td><?php echo $data['p1']; ?></td>
			<td><input type=text name=p1></td>
		</tr>
		<tr>
			<td>p2</td>
			<td><?php echo $data['p2']; ?></td>
			<td><input type=text name=p2></td>
		</tr>
		<tr>
			<td>p3</td>
			<td><?php echo $data['p3']; ?></td>
			<td><input type=text name=p3></td>
		</tr>
		<tr>
			<td>p4</td>
			<td><?php echo $data['p4']; ?></td>
			<td><input type=text name=p4></td>
		</tr>
		<tr>
			<td>p5</td>
			<td><?php echo $data['p5']; ?></td>
			<td><input type=text name=p5></td>
		</tr>
	</table>
			  <p></p>
      <div align="right">
    <input class="btn btn-primary" type="submit" value="Submit">
	</form>
	
	<?php
	
	if (isset($_POST['p1'])&&isset($_POST['p2'])&&isset($_POST['p3']))
	  {
		$p1 = $_POST['p1'];
		$p2 = $_POST['p2'];
		$p3 = $_POST['p3'];
		$p4 = $_POST['p4'];
		$p5 = $_POST['p5'];
		$nilai = $p1 + $p2 + $p3 + $p4 + $p5;
	
	$sql= "INSERT INTO nilai_postest VALUES('$nim','$p1','$p2','$p3','$p4','$p5','$nilai')";

		if (mysqli_query($koneksi, $sql)){
			echo'<script language="javascript">alert("Terima kasih, data Anda berhasil disimpan");document.location="lihatpostest_fix.php";</script>';
		}
		else
		{
			echo '<div id="error">Uppssss....!Query ke database gagal dilakukan!</div>';
		}  
		
	  }
	  
	?>
	
		      </div>
    </div>
  </main>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="assets/dist/js/dashboard.js"></script>
<script  type = "text/javascript">
</html>	  

	