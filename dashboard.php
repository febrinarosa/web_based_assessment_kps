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
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <span data-feather="log-out"></span><a class="nav-link" href="home.html">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-secondary sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="dashboard.php">
              <span data-feather="layout"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home.html">
              <span data-feather="home"></span>
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
          <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span data-feather="users"></span>Penilaian</a>
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
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
      </div>
		<div class="alert alert-primary" role="alert">
		  <h4 class="alert-heading">SELAMAT DATANG PENGGUNA!</h4>
		  <hr>
		  <ul>Anda sedang menggunakan instrumen penilaian keterampilan proses sains untuk praktikum Fisika Dasar I materi kerapatan.
		  <li>Silahkan menuju menu penilaian untuk melakukan penilaian.</li>
		  <li>Silahkan menuju menu tampilkan data untuk melihat hasil olah data.</li>
		  <li>Silahkan menuju menu rubrik untuk melihat rubrik penilaian keterampilan proses sains.</li>
		  </ul>
		</div>

	<?php
 
	$host ="localhost";
        $user ="adminfis_kps_tim";
        $pass ="tim20180826";
        $name ="adminfis_fisikadasar1";
        $koneksi = mysqli_connect("localhost","adminfis_kps_tim","tim20180826");
        if(!mysqli_select_db($koneksi,$name)){
	    echo"gagal";
        }
    $sql = mysqli_query($koneksi,"SELECT * FROM kerapatan_2020 ORDER BY id DESC");
 if ($sql) {
 $sangat_baik_1 = 0;
 $baik_1 = 0;
 $tidak_baik_1 = 0;
 $sangat_tidak_baik_1 = 0;
 $sangat_baik_2 = 0;
 $baik_2 = 0;
 $tidak_baik_2 = 0;
 $sangat_tidak_baik_2 = 0;
 $sangat_baik_3 = 0;
 $baik_3 = 0;
 $tidak_baik_3 = 0;
 $sangat_tidak_baik_3 = 0;

  while ($row = mysqli_fetch_assoc($sql)) {
        
        $angka = intval(substr($row["nimkelas"], 7, 2));
     
     if($angka >= 75){
         if($row["nilai"] > 3.26) {
            $sangat_baik_3++;
        }else if($row["nilai"] > 2.51) {
            $baik_3++;
        }else if($row["nilai"] > 1.76) {
            $tidak_baik_3++;
        }else{
            $sangat_tidak_baik_3++;
        }
     }else if($angka >= 35) {
        if($row["nilai"] > 3.26) {
            $sangat_baik_2++;
        }else if($row["nilai"] > 2.51) {
            $baik_2++;
        }else if($row["nilai"] > 1.76) {
            $tidak_baik_2++;
        }else{
            $sangat_tidak_baik_2++;
        }
     }else if($angka >= 1){
         if($row["nilai"] > 3.26) {
            $sangat_baik_1++;
        }else if($row["nilai"] > 2.51) {
            $baik_1++;
        }else if($row["nilai"] > 1.76) {
            $tidak_baik_1++;
        }else{
            $sangat_tidak_baik_1++;
        }
     }
  }
 }
 ?>
		

    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="assets/dist/js/dashboard.js"></script>
<script  type = "text/javascript">

Highcharts.chart(('container'), {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Kegiatan : Kerapatan'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: ["Sangat tidak baik", "Tidak baik", "Baik", "Sangat baik"],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: ''
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
            name: "Reguler A",
            data: [<?php echo $sangat_tidak_baik_1 . ', ' . $tidak_baik_1 . ', ' . $baik_1 . ', ' . $sangat_baik_1 ?>]
        },
        {
            name: "Reguler B",
            data: [<?php echo $sangat_tidak_baik_2 . ', ' . $tidak_baik_2 . ', ' . $baik_2 . ', ' . $sangat_baik_2 ?>]
        },
        {
            name: "Reguler C",
            data: [<?php echo $sangat_tidak_baik_3 . ', ' . $tidak_baik_3 . ', ' . $baik_3 . ', ' . $sangat_baik_3 ?>]
        }]
});

</script>
</html>
