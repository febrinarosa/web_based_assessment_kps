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
      <span data-feather="log-out"></span><a class="nav-link" href="home.html">Sign out</a>
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
	$host ="localhost";
        $user ="adminfis_kps_tim";
        $pass ="tim20180826";
        $name ="adminfis_fisikadasar1";
        $koneksi = mysqli_connect("localhost","adminfis_kps_tim","tim20180826");
        if(!mysqli_select_db($koneksi,$name)){
	    echo"gagal";
        }
        if(isset($_GET['cari'])){
            $q = $_GET['cari'];
            $query = mysqli_query($koneksi,"SELECT * FROM kerapatan_2020 WHERE nama like '%$q%' or nimkelas like '%$q%' ORDER BY id DESC");
        }
        else{
                $query = mysqli_query($koneksi,"SELECT * FROM kerapatan_2020 ORDER BY id DESC");
        }
?>

     <div class="alert-primary">
<link rel="stylesheet" href = "style.css">
    <h4 align="center">DATA KETERAMPILAN PROSES SAINS MAHASISWA</h4>
<h5 align="center">KERAPATAN</h5>
<hr>
<p><strong>Petunjuk!</strong></p>
<p align="justify">Data ditampilkan dalam bentuk tabel dan grafik. Untuk melihat tabel data secara keseluruhan dapat dengan menggeser tabel ke arah kanan maupun kiri. Grafik disajikan dalam tiga bentuk, yaitu skor KPS keseluruhan, skor KPS per siswa, dan skor KPS per kelas.<strong></strong></p>
</div>

<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
  <a href="https://fisika.fkip.unja.ac.id/fisikadasar1/kerapatan.php"><button type="button" class="btn btn-secondary">Input Data</button></a>
  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Lihat Grafik
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="https://fisika.fkip.unja.ac.id/fisikadasar1/skor_kps.php">skor KPS</a>
      <a class="dropdown-item" href="https://fisika.fkip.unja.ac.id/fisikadasar1/chartindividual.php">KPS siswa</a>
      <a class="dropdown-item" href="https://fisika.fkip.unja.ac.id/fisikadasar1/grafik_perkelas.php">KPS kelas</a>
    </div>
  </div>
        <a href="excel.php"><button type="button" class="btn btn-success float-left">
          Unduh Data
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg>
        </button>
        </a>
        </div>
    <br class=MsoNormal>&nbsp;</br>
<div align="left"><form method="get" action=""><input type="text" name="cari" placeholder="Masukkan NIM/Nama"><input type="submit" name="search" value="Search"></form></div>
		  <div class="table-responsive table table-striped">
		<table border="4px" cellspacing="0" class="table bg-light  table-sm dtHorizontalExampleWrapper"  cellspacing="0"
  width="100%" id="dtHorizontalExample">
		<thead>
		<tr bgcolor='#CCCCCC' class="garis">
		    <th>&nbsp;</th>
			<th>NO</th>
		<th><center>Nama</center></th>
		<th><center>NIM</center></th>
		<th><center>Kelas</center></th>
		<th><center>Observasi</center></th>
		<th><center>Klasifikasi</center></th>
		<th><div>Merencanakan Percobaan</div></th>
		<th><center>Analisis Percobaan</center></th>
		<th><center>Mengidentifikasi Variabel</center></th>
		<th><center>Melakukan Percobaan</center></th>
		<th><center>Prediksi</center></th>
		<th><center>Mendefinisikan Variabel Secara Operasional</center></th>
		<th><center>Melakukan Pengukuran</center></th>
		<th><center>Membuat Tabel</center></th>
		<th><center>Komunikasi</center></th>
		<th><center>Mengumpulkan dan Mengorganisasikan Data</center></th>
		<th><center>Membuat Grafik</center></th>
		<th><center>Mendeskripsikan Hubungan antarvariabel</center></th>
		<th><center>Merumuskan Hipotesis</center></th>
		<th><center>Kesimpulan</center></th>
		<th><center>Nilai</center></th>
		</tr>
		</thead> 
		
		<?php if(mysqli_num_rows($query)>0){ 
					$no = 1;
					while($data = mysqli_fetch_array($query)){
				?>	 
		<tr>
		            <td>
                    <a href = 'del_data_mhs.php?nim=<?=$data['nimkelas']?>'>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
</svg>
                    </a>
		            </td>
					<td><?php echo $no ?></td>
					<td><a href = 'chartindividual.php?nim=<?=$data['nimkelas']?>'><?=$data['nama']?></a></td>
					<td><?php echo $data["nimkelas"];?></td>
					<td><?php echo $data["kelas"];?></td>
					<td><center><?php echo $data["observasi"];?></center></td>
					<td><center><?php echo $data["klasifikasi"];?></center></td>
					<td><center><?php echo $data["merencanakan_percobaan"];?></center></td>
					<td><center><?php echo $data["analisis_percobaan"];?></center></td>
					<td><center><?php echo $data["mengidentifikasi_variabel"];?></center></td>   
					<td><center><?php echo $data["melakukan_percobaan"];?></center></td> 
					<td><center><?php echo $data["prediksi"];?></center></td>
					<td><center><?php echo $data["mendefinisikan_variabel_secara_operasional"];?></center></td>
					<td><center><?php echo $data["melakukan_pengukuran"];?></center></td>
					<td><center><?php echo $data["membuat_tabel"];?></center></td>
					<td><center><?php echo $data["komunikasi"];?></center></td>
					<td><center><?php echo $data["mengumpulkan_dan_mengorganisasikan_data"];?></center></td>
					<td><center><?php echo $data["membuat_grafik"];?></center></td>
					<td><center><?php echo $data["mendeskripsikan_hubungan_antarvariabel"];?></center></td>
					<td><center><?php echo $data["merumuskan_hipotesis"];?></center></td>
					<td><center><?php echo $data["kesimpulan"];?></center></td>
					<td><center><?php echo $data["nilai"];?></center></td>

				<?php $no++; } ?>
				<?php } ?>
		</table>
			</div>
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




<!DOCTYPE html>
<html>
