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
      <div class="alert-primary">
<link rel="stylesheet" href = "style.css">
    <h4 align="center">LEMBAR PENILAIAN PRETEST MAHASISWA</h4>
<h5 align="center">KERAPATAN</h5>
<hr>
<p><strong>Petunjuk!</strong></p>
<p align="justify">Untuk memberi nilai mahasiswa dapat dilakukan dengan meng-klik nama pada daftar tabel di bawah ini. Pengguna akan dibawa ke laman jawaban pretest mahasiswa. Silahkan beri skor per jawaban kemudian submit untuk menyimpan nilai.<strong></strong></p>
</div>


<?php
$host='localhost';
$username='adminfis_kps_tim';
$password='tim20180826';
$database='adminfis_fisikadasar1';
$koneksi = mysqli_connect($host,$username,$password);
mysqli_select_db($koneksi,$database);
$q=mysqli_query($koneksi,'SELECT pretest_kerapatan.nama,pretest_kerapatan.nimkelas,nilai_pretest.p1,nilai_pretest.p2,nilai_pretest.p3,nilai_pretest.p4,nilai_pretest.p5,nilai_pretest.nilai FROM pretest_kerapatan LEFT JOIN nilai_pretest ON pretest_kerapatan.nimkelas=nilai_pretest.nimkelas');

?>
		  <div class="table table table-striped">
		<table border=1 cellspacing="0" class="table bg-light  table-sm dtHorizontalExampleWrapper"  cellspacing="0"
  width="100%" id="dtHorizontalExample">
		<thead>
		<tr bgcolor='#CCCCCC' class="garis">
    <tr>
		<tr align="center">
			<th width="30" rowspan="2">No</th>
			<th width="150" rowspan="2">Nama</th>
			<th width="90" rowspan="2">Nim</th>
			<th width="500" colspan="5">Soal</th>
			<th width="75" rowspan="2">Nilai</th>
        </tr>
        <tr align='center'>
            <th>1</th>
            <th>2</th>
            <th>3</th>
			<th>4</th>
			<th>5</th>
		</tr>
		  </thead>
  <tbody>
		<?php
	$no = 1;
            while($data = mysqli_fetch_array($q)){
				echo "<tr>";
				echo "<td align='center'>".$no."</td>";
				
				$nim=$data['nimkelas'];
				$qq=mysqli_query($koneksi,"SELECT * FROM nilai_pretest WHERE nimkelas='$nim'");
        	    $count=mysqli_num_rows($qq);
        	    
        	    if ($count>0){
        	        echo "<td>".$data['nama']."</td>";
        	    }
        	    else{
        	        echo "<td><a href = 'inputnilai_pretest.php?nim=".$data['nimkelas']."'>".$data['nama']."</a></td>";
        	    }
				
				echo "<td>".$data['nimkelas']."</td>";
				echo "<td align='center'>".$data['p1']."</td>";
				echo "<td align='center'>".$data['p2']."</td>";
				echo "<td align='center'>".$data['p3']."</td>";
				echo "<td align='center'>".$data['p4']."</td>";
				echo "<td align='center'>".$data['p5']."</td>";
				echo "<td align='center'>".$data['nilai']."</td>";
				echo "</tr>";	
				$no++;
			}
	echo "</table>";

?>
		
			      </div>
	<div>
        <a href="unduh_pretest.php"><button type="button" class="btn btn-success float-left">
          Unduh Data
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg>
        </button>
        </a>
        </div>
    <br class=MsoNormal>&nbsp;</br>
    </div>
  </main>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="assets/dist/js/dashboard.js"></script>
<script  type = "text/javascript">
</html>	  