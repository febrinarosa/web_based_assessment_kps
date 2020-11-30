<html lang="id">
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
          <a class="nav-link  dropdown-toggle" href="#" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span data-feather="users"></span>Penilaian</a>
          <div class="dropdown-menu" aria-labelledby="dropdown09">
            <a class="dropdown-item" href="kerapatan.php">KPS</a>
            <a class="dropdown-item" href="lihatpretest.php">Pre-test</a>
            <a class="dropdown-item" href="lihatpostest_fix.php">Post-test</a>
		  </div>
		</li>
          <li class="nav-item">
            <a class="nav-link active" href="lihatkerapatan.php">
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

      <div class="col-sm-12 mx-auto">
 
<?php
	$nim=$_GET['nim'];
?>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		 <div><a href="https://fisika.fkip.unja.ac.id/fisikadasar1/lihatkerapatan.php"><button type="button" class="btn btn-outline-primary float-left">Lihat Tabel Data</button></a></div>
		<div><a href="https://fisika.fkip.unja.ac.id/fisikadasar1/chartindividual.php"><button type="button" class="btn btn-outline-primary float-right">Lihat Grafik Skor KPS</button></a></div>
		<div><a href="excel.php"><button type="button" class="btn btn-outline-primary float-right">Lihat Grafik Kelas</button></a></div>
<p class=MsoNormal>&nbsp;</p>
<p class=MsoNormal>&nbsp;</p>
	<title>GRAFIK HASIL DATA</title>
	<script type="text/javascript" src="contoh/Chart.js"></script>
</head>
<body>
	<style type="text/css">
	body{
		font-family: roboto;
	}
 
	table{
		margin: 0px auto;
	}
	</style>
 
 
	<center>
		<h1>GRAFIK KETERAMPILAN PROSES SAINS MAHASISWA</h1>
	</center>
	
 <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
 
	<?php
 
	$host ="localhost";
        $user ="adminfis_kps_tim";
        $pass ="tim20180826";
        $name ="adminfis_fisikadasar1";
        $koneksi = mysqli_connect("localhost","adminfis_kps_tim","tim20180826");
        if(!mysqli_select_db($koneksi,$name)){
	    echo"gagal";
        }
    $sql = mysqli_query($koneksi,"SELECT * FROM kerapatan_2020 WHERE nimkelas='$nim' ORDER BY id DESC");
 if ($sql) {
 
 $labels = array();
 $data = array();
 
 while ($row = mysqli_fetch_assoc($sql)) {
 $labels[] = $row["nama"];
 $data1[] = doubleval($row["observasi"]);
 $data2[] = doubleval($row["klasifikasi"]);
 $data3[] = doubleval($row["merencanakan_percobaan"]);
 $data4[] = doubleval($row["analisis_percobaan"]);
 $data5[] = doubleval($row["mengidentifikasi_variabel"]);
 $data6[] = doubleval($row["melakukan_percobaan"]);
 $data7[] = doubleval($row["prediksi"]);
 $data8[] = doubleval($row["mendefinisikan_variabel_secara_operasional"]);
 $data9[] = doubleval($row["melakukan_pengukuran"]);
 $data10[] = doubleval($row["membuat_tabel"]);
 $data11[] = doubleval($row["komunikasi"]);
 $data12[] = doubleval($row["mengumpulkan_dan_mengorganisasikan_data"]);
 $data13[] = doubleval($row["membuat_grafik"]);
 $data14[] = doubleval($row["mendeskripsikan_hubungan_antarvariabel"]);
 $data15[] = doubleval($row["merumuskan_hipotesis"]);
 $data16[] = doubleval($row["kesimpulan"]);
 }
 }
?>
	
<script src="highcharts.js"></script>
<script src="exporting.js"></script>
<script  type = "text/javascript">

Highcharts.chart(('container'), {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Kegiatan : kerapatan'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: <?=json_encode($labels)?>,
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
        name: 'observasi',
        data:  <?=json_encode($data1)?>
		},{
		name: 'klasifikasi',
        data:  <?=json_encode($data2)?>
		},{
		name: 'merencanakan_percobaan',
        data:  <?=json_encode($data3)?>
		},{
		name: 'analisis_percobaan',
        data:  <?=json_encode($data4)?>
		},{
		name: 'mengidentifikasi_variabel',
        data:  <?=json_encode($data5)?>
		},{
		name: 'melakukan_percobaan',
        data:  <?=json_encode($data6)?>
		},{
		name: 'prediksi',
        data:  <?=json_encode($data7)?>
		},{
		name: 'mendefinisikan_variabel_secara_operasional',
        data:  <?=json_encode($data8)?>
        },{
		name: 'membuat_pengukuran',
        data:  <?=json_encode($data9)?>
		},{
		name: 'membuat_tabel',
        data:  <?=json_encode($data10)?>
		},{
		name: 'komunikasi',
        data:  <?=json_encode($data11)?>
		},{
		name: 'mengumpulkan_dan_mengorganisasikan_data',
        data:  <?=json_encode($data12)?>
		},{
		name: 'membuat_grafik',
        data:  <?=json_encode($data13)?>
		},{
		name: 'mendeskripsikan_hubungan_antarvariabel',
        data:  <?=json_encode($data14)?>
		},{
		name: 'merumuskan_hipotesis',
        data:  <?=json_encode($data15)?>
		},{
		name: 'kesimpulan',
        data:  <?=json_encode($data16)?>
     	
		
		

    }]
});
</script>
      </div>
    </div>
  </main>
</div>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
</html>
