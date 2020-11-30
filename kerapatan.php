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
    <h4 align="center">LEMBAR PENILAIAN KETERAMPILAN PROSES SAINS</h4>
<h5 align="center">KERAPATAN</h5>
<hr>
<p><strong>A. &nbsp; Tujuan </strong></p>
<p align="justify">Observasi ini bertujuan untuk mengetahui keterampilan proses sains mahasiswa pada praktikum fisika dasar materi kerapatan di jurusan Pendidikan Matematika dan Ilmu Pengetahuan Alam Universitas Jambi <strong></strong></p>
<p><strong>B. </strong>&nbsp; <strong>Petunjuk </strong></p>
<p align="justify">Sesuai dengan yang Saudara ketahui, berilah penilaian secara jujur, objektif, dan penuh tanggung jawab terhadap keterampilan proses sains mahasiswa. Penilaian dilakukan terhadap aspek-aspek dalam tabel berikut dengan cara mengklik pada kolom skor yang dianggap paling sesuai. </p>
<p>Keterangan skor: </p>
<p>4 = Sangat baik </p>
<p>3 = Baik </p>
<p>2 = Tidak baik </p>
<p>1 = Sangat tidak baik </p>
</div>
			<table class="table table-striped">
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
  <div id="container"></div>
<table class="table col-md-12 col-sm-12 table-bordered table table-hover" border>
<tr>
    <td width="20" rowspan="2"><div align="center"><b>No.</b></div></td>
    <td class="col-sm-5 textwrap" rowspan="2"><div align="center"><b>Pernyataan</b></div></td>
    <td colspan="4"><div align="center"><b>Skor</b></div></td>
</tr>
  <tr>
    <td width="20"><div align="center"><strong>1</strong></div></td>
    <td width="20"><div align="center"><strong>2</strong></div></td>
    <td width="20"><div align="center"><strong>3</strong></div></td>
    <td width="20"><div align="center"><strong>4</strong></div></td>
  </tr>
<tr>
    <div align="center"></div>
	<td class="table-success" colspan="6"><div align="center"><b>Observasi</b></div></td>
</tr>
<tr>
    <td><div align="center">1</div></td>
    <td align="jusify"><div align="justify">Mengamati dengan cermat skala pada neraca pegas untuk menentukan nilai pada satu garis pada skala.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p1" value="1">
    <input type="radio" name="p1" value="2">
    <input type="radio" name="p1" value="3">
	<input type="radio" name="p1" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">2</div></td>
    <td align="jusify"><div align="justify">Mengamati skala utama dan skala nonius jangka sorong untuk menentukan ketelitian dan batas ukur jangka sorong.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p2" value="1">
    <input type="radio" name="p2" value="2">
    <input type="radio" name="p2" value="3">
	<input type="radio" name="p2" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">3</div></td>
    <td align="jusify"><div align="justify">Mengamati benda yang akan digunakan/diukur kerapatannya sehingga tahu cara mengaitkan neraca pegas.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p3" value="1">
    <input type="radio" name="p3" value="2">
    <input type="radio" name="p3" value="3">
	<input type="radio" name="p3" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">4</div></td>
    <td align="jusify"><div align="justify">Mengamati pembenam sehingga tahu cara mengaitkan benda.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p4" value="1">
    <input type="radio" name="p4" value="2">
    <input type="radio" name="p4" value="3">
	<input type="radio" name="p4" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">5</div></td>
    <td align="jusify"><div align="justify">Cermat dalam mengamati jangka sorong atau mikrometer sekrup untuk menentukan volume benda pada percobaan kerapatan.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p5" value="1">
    <input type="radio" name="p5" value="2">
    <input type="radio" name="p5" value="3">
	<input type="radio" name="p5" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">6</div></td>
    <td align="jusify"><div align="justify">Cermat dalam mengamati neraca pegas untuk menentukan massa benda pada percobaan kerapatan benda di udara.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p6" value="1">
    <input type="radio" name="p6" value="2">
    <input type="radio" name="p6" value="3">
	<input type="radio" name="p6" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>

<tr>
    <td><div align="center">7</div></td>
    <td align="jusify"><div align="justify">Cermat dalam mengamati neraca pegas untuk menentukan massa benda pada percobaan kerapatan benda tercelup seluruhnya.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p7" value="1">
    <input type="radio" name="p7" value="2">
    <input type="radio" name="p7" value="3">
	<input type="radio" name="p7" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">8</div></td>
    <td align="jusify"><div align="justify">Cermat dalam mengamati neraca pegas untuk menentukan massa benda pada percobaan kerapatan benda tercelup sebagian</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p8" value="1">
    <input type="radio" name="p8" value="2">
    <input type="radio" name="p8" value="3">
	<input type="radio" name="p8" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <div align="center"></div>
	<td class="table-success" colspan="6"><div align="center"><b>Klasifikasi</b></div></td>
</tr>
<tr>
    <td><div align="center">9</div></td>
    <td align="jusify"><div align="justify">Mengklasifikasi karakteristik data percobaan benda (terlihat dalam membuat tabel).</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p9" value="1">
    <input type="radio" name="p9" value="2">
    <input type="radio" name="p9" value="3">
	<input type="radio" name="p9" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">10</div></td>
    <td align="jusify"><div align="justify">Mengklasifikasikan karakteristik data  percobaan kerapatan benda di udara (terlihat dalam membuat kolom tabel).</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p10" value="1">
    <input type="radio" name="p10" value="2">
    <input type="radio" name="p10" value="3">
	<input type="radio" name="p10" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">11</div></td>
    <td align="jusify"><div align="justify">Mengklasifikasikan karakteristik data  percobaan kerapatan benda yang tercelup seluruhnya (terlihat dalam membuat kolom tabel).</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	<div align="center"></div>
	<input type="radio" name="p11" value="1">
    <input type="radio" name="p11" value="2">
    <input type="radio" name="p11" value="3">
	<input type="radio" name="p11" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">12</div></td>
    <td align="jusify"><div align="justify">Mengklasifikasikan karakteristik data  percobaan kerapatan benda yang tercelup sebagian (terlihat dalam membuat kolom tabel).</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p12" value="1">
    <input type="radio" name="p12" value="2">
    <input type="radio" name="p12" value="3">
	<input type="radio" name="p12" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <div align="center"></div>
	<td class="table-success" colspan="6"><div align="center"><b>Merencanakan percobaan</b></div></td>
</tr>
<tr>
    <td><div align="center">13</div></td>
    <td align="jusify"><div align="justify">Menentukan alat dan bahan yang akan digunakan pada praktikum kerapatan menggunakan literatur.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p13" value="1">
    <input type="radio" name="p13" value="2">
    <input type="radio" name="p13" value="3">
	<input type="radio" name="p13" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">14</div></td>
    <td align="jusify"><div align="justify">Menentukan alat dan bahan utama untuk memperoleh kerapatan benda.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p14" value="1">
    <input type="radio" name="p14" value="2">
    <input type="radio" name="p14" value="3">
	<input type="radio" name="p14" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">15</div></td>
    <td align="jusify"><div align="justify">Menentukan alat dan bahan utama untuk memperoleh kerapatan relatif benda.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	<div align="center"></div>
	<input type="radio" name="p15" value="1">
    <input type="radio" name="p15" value="2">
    <input type="radio" name="p15" value="3">
	<input type="radio" name="p15" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">16</div></td>
    <td align="jusify"><div align="justify">Menentukan alat dan bahan utama untuk memperoleh kerapatan relatif benda yang tercelup sebagian.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p16" value="1">
    <input type="radio" name="p16" value="2">
    <input type="radio" name="p16" value="3">
	<input type="radio" name="p16" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
 <div align="center"></div>
<tr>
    <div align="center"></div>
	<td class="table-info" colspan="6"><div align="center"><b>Analisis percobaan</b></div></td>
</tr>
<tr>
    <td><div align="center">17</div></td>
    <td align="jusify"><div align="justify">Mengambil alat yang akan digunakan dalam praktikum kerapatan setelah diamati.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p17" value="1">
    <input type="radio" name="p17" value="2">
    <input type="radio" name="p17" value="3">
	<input type="radio" name="p17" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">18</div></td>
    <td align="jusify"><div align="justify">Mengambil bahan yang akan digunakan dalam praktikum kerapatan setelah diamati.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p18" value="1">
    <input type="radio" name="p18" value="2">
    <input type="radio" name="p18" value="3">
	<input type="radio" name="p18" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">19</div></td>
    <td align="jusify"><div align="justify">Menentukan tindakan yang akan dilakukan dari pengamatan terhadap alat dan bahan yang digunakan dalam merancang percobaan kerapatan benda.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	<div align="center"></div>
	<input type="radio" name="p19" value="1">
    <input type="radio" name="p19" value="2">
    <input type="radio" name="p19" value="3">
	<input type="radio" name="p19" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">20</div></td>
    <td align="jusify"><div align="justify">Menentukan tindakan yang akan dilakukan dari pengamatan terhadap alat dan bahan yang digunakan dalam merancang percobaan kerapatan relatif benda.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p20" value="1">
    <input type="radio" name="p20" value="2">
    <input type="radio" name="p20" value="3">
	<input type="radio" name="p20" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">21</div></td>
    <td align="jusify"><div align="justify">Menentukan tindakan yang akan dilakukan dari pengamatan terhadap alat dan bahan yang digunakan dalam merancang percobaan kerapatan relatif benda tercelup sebagian.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p21" value="1">
    <input type="radio" name="p21" value="2">
    <input type="radio" name="p21" value="3">
	<input type="radio" name="p21" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">22</div></td>
    <td align="jusify"><div align="justify">Dapat menyesuaikan rancangan percobaan dengan hipotesis.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p22" value="1">
    <input type="radio" name="p22" value="2">
    <input type="radio" name="p22" value="3">
	<input type="radio" name="p22" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">23</div></td>
    <td align="jusify"><div align="justify">Dapat memutusan bahwa rancangan percobaan telah sesuai dengan hipotesis yang dibuat.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p23" value="1">
    <input type="radio" name="p23" value="2">
    <input type="radio" name="p23" value="3">
	<input type="radio" name="p23" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <div align="center"></div>
	<td class="table-info" colspan="6"><div align="center"><b>Mengidentifikasi variabel</b></div></td>
</tr>
<tr>
    <td><div align="center">24</div></td>
    <td align="jusify"><div align="justify">Menentukan variabel bebas.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p24" value="1">
    <input type="radio" name="p24" value="2">
    <input type="radio" name="p24" value="3">
	<input type="radio" name="p24" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">25</div></td>
    <td align="jusify"><div align="justify">Menentukan variabel terikat.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p25" value="1">
    <input type="radio" name="p25" value="2">
    <input type="radio" name="p25" value="3">
	<input type="radio" name="p25" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">26</div></td>
    <td align="jusify"><div align="justify">Menentukan variabel kontrol.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	<div align="center"></div>
	<input type="radio" name="p26" value="1">
    <input type="radio" name="p26" value="2">
    <input type="radio" name="p26" value="3">
	<input type="radio" name="p26" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <div align="center"></div>
	<td class="table-info" colspan="6"><div align="center"><b>Melakukan percobaan</b></div></td>
</tr>
<tr>
    <td><div align="center">27</div></td>
    <td align="jusify"><div align="justify">Mahasiswa menyiapkan alat dengan tepat sesuai tujuan.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p27" value="1">
    <input type="radio" name="p27" value="2">
    <input type="radio" name="p27" value="3">
	<input type="radio" name="p27" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">28</div></td>
    <td align="jusify"><div align="justify">Mahasiswa menyiapkan bahan dengan tepat sesuai tujuan.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p28" value="1">
    <input type="radio" name="p28" value="2">
    <input type="radio" name="p28" value="3">
	<input type="radio" name="p28" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">29</div></td>
    <td align="jusify"><div align="justify">Mahasiswa menyiapkan literatur dengan tepat sesuai tujuan.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	<div align="center"></div>
	<input type="radio" name="p29" value="1">
    <input type="radio" name="p29" value="2">
    <input type="radio" name="p29" value="3">
	<input type="radio" name="p29" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">30</div></td>
    <td align="jusify"><div align="justify">Melakukan perakitan alat dan bahan yang telah dipilih dalam perencanaan kerapatan benda.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p30" value="1">
    <input type="radio" name="p30" value="2">
    <input type="radio" name="p30" value="3">
	<input type="radio" name="p30" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">31</div></td>
    <td align="jusify"><div align="justify">Melakukan perakitan alat dan bahan yang telah dipilih dalam perencanaan kerapatan relatif benda.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p31" value="1">
    <input type="radio" name="p31" value="2">
    <input type="radio" name="p31" value="3">
	<input type="radio" name="p31" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">32</div></td>
    <td align="jusify"><div align="justify">Melakukan perakitan alat dan bahan yang telah dipilih dalam perencanaan kerapatan relatif benda sebagian.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	<div align="center"></div>
	<input type="radio" name="p32" value="1">
    <input type="radio" name="p32" value="2">
    <input type="radio" name="p32" value="3">
	<input type="radio" name="p32" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">33</div></td>
    <td align="jusify"><div align="justify">Mahasiswa melakukan percobaan menetukan kerapatan benda, kerapatan relatif benda, dan kerapatan relatif benda sebagia.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	<div align="center"></div>
	<input type="radio" name="p33" value="1">
    <input type="radio" name="p33" value="2">
    <input type="radio" name="p33" value="3">
	<input type="radio" name="p33" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <div align="center"></div>
	<td class="table-success" colspan="6"><div align="center"><b>Prediksi</b></div></td>
</tr>
<tr>
    <td><div align="center">34</div></td>
    <td align="jusify"><div align="justify">Mengutarakan kerapatan benda sebelum mengukur massa dan benda di udara.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p34" value="1">
    <input type="radio" name="p34" value="2">
    <input type="radio" name="p34" value="3">
	<input type="radio" name="p34" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">35</div></td>
    <td align="jusify"><div align="justify">Mengutarakan kerapatan benda sebelum mengukur massa dan benda yang tercelup (menggunakan prinsip Archimedes).</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p35" value="1">
    <input type="radio" name="p35" value="2">
    <input type="radio" name="p35" value="3">
	<input type="radio" name="p35" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <div align="center"></div>
	<td class="table-info" colspan="6"><div align="center"><b>Mendefiniskan variabel secara operasional</b></div></td>
</tr>
<tr>
    <td><div align="center">36</div></td>
    <td align="jusify"><div align="justify">Mahasiswa melakukan pengukuran untuk mengukur massa dan volume pada percobaan 1.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p36" value="1">
    <input type="radio" name="p36" value="2">
    <input type="radio" name="p36" value="3">
	<input type="radio" name="p36" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">37</div></td>
    <td align="jusify"><div align="justify">Mahasiswa melakukan pengukuran untuk mengukur massa di udara dan massa di air atau semu pada percobaan 2.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p37" value="1">
    <input type="radio" name="p37" value="2">
    <input type="radio" name="p37" value="3">
	<input type="radio" name="p37" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">38</div></td>
    <td align="jusify"><div align="justify">Mahasiswa melakukan pengukuran untuk mengukur massa di udara, massa pembenam tercelup, dan massa benda dan pembenam dalam air pada percobaan 3.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p38" value="1">
    <input type="radio" name="p38" value="2">
    <input type="radio" name="p38" value="3">
	<input type="radio" name="p38" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">39</div></td>
    <td align="jusify"><div align="justify">Menentukan kerapatan benda menggunakan alat ukur jangka sorong dan neraca pegas.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p39" value="1">
    <input type="radio" name="p39" value="2">
    <input type="radio" name="p39" value="3">
	<input type="radio" name="p39" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">40</div></td>
    <td align="jusify"><div align="justify">Menggunakan prinsip Archimedes dengan menggunakan air untuk mengukur massa benda.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p40" value="1">
    <input type="radio" name="p40" value="2">
    <input type="radio" name="p40" value="3">
	<input type="radio" name="p40" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">41</div></td>
    <td align="jusify"><div align="justify">Memilih balok untuk mengukur kerapatannya.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p41" value="1">
    <input type="radio" name="p41" value="2">
    <input type="radio" name="p41" value="3">
	<input type="radio" name="p41" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">42</div></td>
    <td align="jusify"><div align="justify">Memilih pembenam untuk menenggelamkan benda yang akan diukur.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p42" value="1">
    <input type="radio" name="p42" value="2">
    <input type="radio" name="p42" value="3">
	<input type="radio" name="p42" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <div align="center"></div>
	<td class="table-info" colspan="6"><div align="center"><b>Melakukan pengukuran</b></div></td>
</tr>
<tr>
    <td><div align="center">43</div></td>
    <td align="jusify"><div align="justify">Mahasiswa dapat melakukan pengukuran panjang benda dengan alat ukur jangka sorong untuk menentukan volume.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p43" value="1">
    <input type="radio" name="p43" value="2">
    <input type="radio" name="p43" value="3">
	<input type="radio" name="p43" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">44</div></td>
    <td align="jusify"><div align="justify">Mahasiswa dapat melakukan pengukuran massa benda dengan neraca pegas.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p44" value="1">
    <input type="radio" name="p44" value="2">
    <input type="radio" name="p44" value="3">
	<input type="radio" name="p44" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">45</div></td>
    <td align="jusify"><div align="justify">Membaca skala utama dan nonius pada jangka sorong.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p45" value="1">
    <input type="radio" name="p45" value="2">
    <input type="radio" name="p45" value="3">
	<input type="radio" name="p45" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">46</div></td>
    <td align="jusify"><div align="justify">Membaca skala pada neraca pegas.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p46" value="1">
    <input type="radio" name="p46" value="2">
    <input type="radio" name="p46" value="3">
	<input type="radio" name="p46" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">47</div></td>
    <td align="jusify"><div align="justify">Mahasiswa mencari skala utama dan nonius pada jangka sorong untuk menentukan volume benda.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p47" value="1">
    <input type="radio" name="p47" value="2">
    <input type="radio" name="p47" value="3">
	<input type="radio" name="p47" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">48</div></td>
    <td align="jusify"><div align="justify">Mahasiswa menentukan nilai dari skala neraca pegas untuk menentukan massa benda.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p48" value="1">
    <input type="radio" name="p48" value="2">
    <input type="radio" name="p48" value="3">
	<input type="radio" name="p48" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <div align="center"></div>
	<td class="table-info" colspan="6"><div align="center"><b>Membuat tabel</b></div></td>
</tr>
<tr>
    <td><div align="center">49</div></td>
    <td align="jusify"><div align="justify">Mahasiswa membuat 3 tabel data hasil pengukuran (kerapatan benda, kerapatan relatif benda, dan kerapatan relatif benda tercelup sebagian).</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p49" value="1">
    <input type="radio" name="p49" value="2">
    <input type="radio" name="p49" value="3">
	<input type="radio" name="p49" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">50</div></td>
    <td align="jusify"><div align="justify">Mahasiswa membuat label (judul kolom) yang sesuai untuk masing-masing kolom.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p50" value="1">
    <input type="radio" name="p50" value="2">
    <input type="radio" name="p50" value="3">
	<input type="radio" name="p50" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">51</div></td>
    <td align="jusify"><div align="justify">Mahasiswa dapat membuat tabel data berulang untuk percobaan.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p51" value="1">
    <input type="radio" name="p51" value="2">
    <input type="radio" name="p51" value="3">
	<input type="radio" name="p51" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">52</div></td>
    <td align="jusify"><div align="justify">Mahasiswa membuat kolom nomor untuk memperjelas adanya pengukuran berulang.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p52" value="1">
    <input type="radio" name="p52" value="2">
    <input type="radio" name="p52" value="3">
	<input type="radio" name="p52" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <div align="center"></div>
	<td class="table-success" colspan="6"><div align="center"><b>Komunikasi</b></div></td>
</tr>
<tr>
    <td><div align="center">53</div></td>
    <td align="jusify"><div align="justify">Berdiskusi sesama kelompok praktikum tentang alat dan bahan yang akan digunakan.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p53" value="1">
    <input type="radio" name="p53" value="2">
    <input type="radio" name="p53" value="3">
	<input type="radio" name="p53" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">54</div></td>
    <td align="jusify"><div align="justify">Berdiskusi sesama kelompok tentang percobaan yang akan dilakukan.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p54" value="1">
    <input type="radio" name="p54" value="2">
    <input type="radio" name="p54" value="3">
	<input type="radio" name="p54" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">55</div></td>
    <td align="jusify"><div align="justify">Berdiskusi sesama kelompok tentang hasil percobaan dalam menyimpulkan hasil pengukuran.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p55" value="1">
    <input type="radio" name="p55" value="2">
    <input type="radio" name="p55" value="3">
	<input type="radio" name="p55" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">56</div></td>
    <td align="jusify"><div align="justify">Mahasiswa mempresentasikan hasil pecobaan secara ringkas di depan.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p56" value="1">
    <input type="radio" name="p56" value="2">
    <input type="radio" name="p56" value="3">
	<input type="radio" name="p56" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <div align="center"></div>
	<td class="table-info" colspan="6"><div align="center"><b>Mengumpulkan dan mengorganisasikan data</b></div></td>
</tr>
<tr>
    <td><div align="center">57</div></td>
    <td align="jusify"><div align="justify">Mahasiswa menampilkan data hasil percobaan dalam bentuk tabel.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p57" value="1">
    <input type="radio" name="p57" value="2">
    <input type="radio" name="p57" value="3">
	<input type="radio" name="p57" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">58</div></td>
    <td align="jusify"><div align="justify">Mahasiswa menampilkan data hasil percobaan dalam bentuk grafik.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p58" value="1">
    <input type="radio" name="p58" value="2">
    <input type="radio" name="p58" value="3">
	<input type="radio" name="p58" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <div align="center"></div>
	<td class="table-info" colspan="6"><div align="center"><b>Membuat grafik</b></div></td>
</tr>
<tr>
    <td><div align="center">59</div></td>
    <td align="jusify"><div align="justify">Membuat grafik hubungan variabel dari data kerapatan relatif benda di udara.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p59" value="1">
    <input type="radio" name="p59" value="2">
    <input type="radio" name="p59" value="3">
	<input type="radio" name="p59" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">60</div></td>
    <td align="jusify"><div align="justify">Membuat grafik hubungan variabel dari data kerapatan relatif benda tercelup seluruhny dalam air.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p60" value="1">
    <input type="radio" name="p60" value="2">
    <input type="radio" name="p60" value="3">
	<input type="radio" name="p60" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">61</div></td>
    <td align="jusify"><div align="justify">Membuat grafik hubungan variabel dari data kerapatan relatif benda tercelup sebagian dalam air.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p61" value="1">
    <input type="radio" name="p61" value="2">
    <input type="radio" name="p61" value="3">
	<input type="radio" name="p61" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <div align="center"></div>
	<td class="table-info" colspan="6"><div align="center"><b>Mendeskripsikan hubungan antarvariabel</b></div></td>
</tr>
<tr>
    <td><div align="center">62</div></td>
    <td align="jusify"><div align="justify">Membuat garis kecocokan hubungan gaya berat benda terhadap kerapatan lingkungan.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p62" value="1">
    <input type="radio" name="p62" value="2">
    <input type="radio" name="p62" value="3">
	<input type="radio" name="p62" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">63</div></td>
    <td align="jusify"><div align="justify">Mendiskusikan hubungan variabel dalam grafik hubungan gaya berat benda terhadap kerapatan lingkungan.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p63" value="1">
    <input type="radio" name="p63" value="2">
    <input type="radio" name="p63" value="3">
	<input type="radio" name="p63" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">64</div></td>
    <td align="jusify"><div align="justify">Mendiskusikn hubungan gaya berat benda terhadap kerapatan lingkungan.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p64" value="1">
    <input type="radio" name="p64" value="2">
    <input type="radio" name="p64" value="3">
	<input type="radio" name="p64" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">65</div></td>
    <td align="jusify"><div align="justify">Mahasiswa dapat menjelaskan makna mengenai garis kecocokan pada grafik hubungan gaya berat benda terhadap kerapatan lingkungan.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p65" value="1">
    <input type="radio" name="p65" value="2">
    <input type="radio" name="p65" value="3">
	<input type="radio" name="p65" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <div align="center"></div>
	<td class="table-info" colspan="6"><div align="center"><b>Merumuskan hipotesis</b></div></td>
</tr>
<tr>
    <td><div align="center">66</div></td>
    <td align="jusify"><div align="justify">Mahasiswa merumuskan hipotesis.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p66" value="1">
    <input type="radio" name="p66" value="2">
    <input type="radio" name="p66" value="3">
	<input type="radio" name="p66" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <div align="center"></div>
	<td class="table-success" colspan="6"><div align="center"><b>Kesimpulan</b></div></td>
</tr>
<tr>
    <td><div align="center">67</div></td>
    <td align="jusify"><div align="justify">Menyimpulkan nilai pada satu garis skala neraca pegas.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p67" value="1">
    <input type="radio" name="p67" value="2">
    <input type="radio" name="p67" value="3">
	<input type="radio" name="p67" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">68</div></td>
    <td align="jusify"><div align="justify">Mengutarakan ketelitian dan batas ukur jangka sorong yang digunakan.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p68" value="1">
    <input type="radio" name="p68" value="2">
    <input type="radio" name="p68" value="3">
	<input type="radio" name="p68" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">69</div></td>
    <td align="jusify"><div align="justify">Menyimpulkan bagaimana benda dikaitkan pada neraca.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p69" value="1">
    <input type="radio" name="p69" value="2">
    <input type="radio" name="p69" value="3">
	<input type="radio" name="p69" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">70</div></td>
    <td align="jusify"><div align="justify">Menyimpulkan bagaimana pembenam dikaitkan pada neraca pegas.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p70" value="1">
    <input type="radio" name="p70" value="2">
    <input type="radio" name="p70" value="3">
	<input type="radio" name="p70" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">71</div></td>
    <td align="jusify"><div align="justify">Mengutarakan nila pada skala utama dan nonius yang ditunjukkan ketika pengukuran volume benda menggunakan jangka sorong.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p71" value="1">
    <input type="radio" name="p71" value="2">
    <input type="radio" name="p71" value="3">
	<input type="radio" name="p71" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">72</div></td>
    <td align="jusify"><div align="justify">Mengutarakan besar gaya pada neraca pegas yang digunakan untuk pecobaan kerapatan benda di udara.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p72" value="1">
    <input type="radio" name="p72" value="2">
    <input type="radio" name="p72" value="3">
	<input type="radio" name="p72" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">73</div></td>
    <td align="jusify"><div align="justify">Mengutarakan besar gaya pada neraca pegas yang digunakan untuk pecobaan kerapatan benda tercelup seluruhnya.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p73" value="1">
    <input type="radio" name="p73" value="2">
    <input type="radio" name="p73" value="3">
	<input type="radio" name="p73" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">74</div></td>
    <td align="jusify"><div align="justify">Mengutarakan besar gaya pada neraca pegas yang digunakan untuk pecobaan kerapatan benda tercelup sebagian.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p74" value="1">
    <input type="radio" name="p74" value="2">
    <input type="radio" name="p74" value="3">
	<input type="radio" name="p74" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
	    <div align="center"></div>
<tr>
    <td><div align="center">75</div></td>
    <td align="jusify"><div align="justify">Mahasiswa mengutarakan data dalam tabel untuk membuat grafik hubungan variabel untuk percobaan kerapatan benda di udara.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p75" value="1">
    <input type="radio" name="p75" value="2">
    <input type="radio" name="p75" value="3">
	<input type="radio" name="p75" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">76</div></td>
    <td align="jusify"><div align="justify">Mahasiswa mengutarakan data dalam tabel untuk membuat grafik hubungan variabel untuk percobaan kerapatan benda tercelup seluruhnya.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p76" value="1">
    <input type="radio" name="p76" value="2">
    <input type="radio" name="p76" value="3">
	<input type="radio" name="p76" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">77</div></td>
    <td align="jusify"><div align="justify">Mahasiswa mengutarakan data dalam tabel untuk membuat grafik hubungan variabel untuk percobaan kerapatan benda tercelup sebagian.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p77" value="1">
    <input type="radio" name="p77" value="2">
    <input type="radio" name="p77" value="3">
	<input type="radio" name="p77" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">78</div></td>
    <td align="jusify"><div align="justify">Membaca grafik hubungan variabel untuk percobaan kerapatan benda di udara.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p78" value="1">
    <input type="radio" name="p78" value="2">
    <input type="radio" name="p78" value="3">
	<input type="radio" name="p78" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">79</div></td>
    <td align="jusify"><div align="justify">Membaca grafik hubungan variabel untuk percobaan kerapatan benda tercelup seluruhnya.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p79" value="1">
    <input type="radio" name="p79" value="2">
    <input type="radio" name="p79" value="3">
	<input type="radio" name="p79" value="4">       
    </p>
      <div align="center"></div>
          </td>
              <div align="center"></div>
</tr>
    <div align="center"></div>
<tr>
    <td><div align="center">80</div></td>
    <td align="jusify"><div align="justify">Membaca grafik hubungan variabel untuk percobaan kerapatan benda tercelup sebagian.</td>
 	<td colspan="4"><div align="center"></div>
 	<p><form method="POST" action="kerapatan.php" name="input">
 	    <div align="center"></div>
	<input type="radio" name="p80" value="1">
    <input type="radio" name="p80" value="2">
    <input type="radio" name="p80" value="3">
	<input type="radio" name="p80" value="4">       
    </p>
          </td>
</tr>
</table>
		
      <div align="right">
    <input type="submit" name="submit" value="Proses"></div>
	
<?php
if(isset($_POST['submit'])){
		$host ="localhost";
        $user ="adminfis_kps_tim";
        $pass ="tim20180826";
        $name ="adminfis_fisikadasar1";
        $koneksi = mysqli_connect("localhost","adminfis_kps_tim","tim20180826");
        if(mysqli_select_db($koneksi,$name)){
	    echo"gagal";
        }
        
	$nama = $_POST['nama'];
	$nimkelas = $_POST['nimkelas'];
	$kelas = $_POST['kelas'];
	$materipraktikum = $_POST['materipraktikum'];
	$semester = $_POST['semester'];
	$p1 = $_POST['p1'];
	$p2 = $_POST['p2'];
	$p3 = $_POST['p3'];
	$p4 = $_POST['p4'];
	$p5 = $_POST['p5'];
	$p6 = $_POST['p6'];
	$p7 = $_POST['p7'];
	$p8 = $_POST['p8'];
	$p9 = $_POST['p9'];
	$p10 = $_POST['p10'];
	$p11 = $_POST['p11'];
	$p12 = $_POST['p12'];
	$p13 = $_POST['p13'];
	$p14 = $_POST['p14'];
	$p15 = $_POST['p15'];
	$p16 = $_POST['p16'];
	$p17 = $_POST['p17'];
	$p18 = $_POST['p18'];
	$p19 = $_POST['p19'];
	$p20 = $_POST['p20'];
	$p21 = $_POST['p21'];
	$p22 = $_POST['p22'];
	$p23 = $_POST['p23'];
	$p24 = $_POST['p24'];
	$p25 = $_POST['p25'];
	$p26 = $_POST['p26'];
	$p27 = $_POST['p27'];
	$p28 = $_POST['p28'];
	$p29 = $_POST['p29'];
	$p30 = $_POST['p30'];
	$p31 = $_POST['p31'];
	$p32 = $_POST['p32'];
	$p33 = $_POST['p33'];
	$p34 = $_POST['p34'];
	$p35 = $_POST['p35'];
	$p36 = $_POST['p36'];
	$p37 = $_POST['p37'];
	$p38 = $_POST['p38'];
	$p39 = $_POST['p39'];
	$p40 = $_POST['p40'];
	$p41 = $_POST['p41'];
	$p42 = $_POST['p42'];
	$p43 = $_POST['p43'];
	$p44 = $_POST['p44'];
	$p45 = $_POST['p45'];
	$p46 = $_POST['p46'];
	$p47 = $_POST['p47'];
	$p48 = $_POST['p48'];
	$p49 = $_POST['p49'];
	$p50 = $_POST['p50'];
	$p51 = $_POST['p51'];
	$p52 = $_POST['p52'];
	$p53 = $_POST['p53'];
	$p54 = $_POST['p54'];
	$p55 = $_POST['p55'];
	$p56 = $_POST['p56'];
	$p57 = $_POST['p57'];
	$p58 = $_POST['p58'];
	$p59 = $_POST['p59'];
	$p60 = $_POST['p60'];
	$p61 = $_POST['p61'];
	$p62 = $_POST['p62'];
	$p63 = $_POST['p63'];
	$p64 = $_POST['p64'];
	$p65 = $_POST['p65'];
	$p66 = $_POST['p66'];
	$p67 = $_POST['p67'];
	$p68 = $_POST['p68'];
	$p69 = $_POST['p69'];
	$p70 = $_POST['p70'];
	$p71 = $_POST['p71'];
	$p72 = $_POST['p72'];
	$p73 = $_POST['p73'];
	$p74 = $_POST['p74'];
	$p75 = $_POST['p75'];
	$p76 = $_POST['p76'];
	$p77 = $_POST['p77'];
	$p78 = $_POST['p78'];
	$p79 = $_POST['p79'];
	$p80 = $_POST['p80'];
	$observasi = $_POST['observasi'];
	$klasifikasi = $_POST['klasifikasi'];
	$merencanakan_percobaan = $_POST['merencanakan_percobaan'];
	$analisis_percobaan = $_POST['analisis_percobaan'];
	$mengidentifikasi_variabel = $_POST['mengidentifikasi_variabel'];
	$melakukan_percobaan = $_POST['melakukan_percobaan'];
	$prediksi = $_POST['prediksi'];
	$mendefinisikan_variabel_secara_operasional = $_POST['mendefinisikan_variabel_secara_operasional'];
	$melakukan_pengukuran = $_POST['melakukan_pengukuran'];
	$membuat_tabel = $_POST['membuat_tabel'];
	$komunikasi = $_POST['komunikasi'];
	$mengumpulkan_dan_mengorganisasikan_data = $_POST['mengumpulkan_dan_mengorganisasikan_data'];
	$membuat_grafik = $_POST['membuat_grafik'];
	$mendeskripsikan_hubungan_antarvariabel = $_POST['mendeskripsikan_hubungan_antarvariabel'];
	$merumuskan_hipotesis = $_POST['merumuskan_hipotesis'];
	$kesimpulan = $_POST['kesimpulan']; 
	$nilai = $_POST['nilai'];

$observasi = ($_POST['p1']+$_POST['p2']+$_POST['p3']+$_POST['p4']+$_POST['p5']+$_POST['p6']+$_POST['p7']+$_POST['p8'])/8;
echo"<input type='text' name=observasi value='$observasi'>";

$klasifikasi = ($_POST['p9']+$_POST['p10']+$_POST['p11']+$_POST['p12'])/4;
echo"<input type='text' name=klasifikasi value='$klasifikasi'>";

$merencanakan_percobaan = ($_POST['p13']+$_POST['p14']+$_POST['p15']+$_POST['p16'])/4;
echo"<input type='text' name=merencanakan_percobaan value='$merencanakan_percobaan'>";

$analisis_percobaan = ($_POST['p17']+$_POST['p18']+$_POST['p19']+$_POST['p20']+$_POST['p21']+$_POST['p22']+$_POST['p23'])/7;
echo"<input type='text' name=analisis_percobaan value='$analisis_percobaan'>";

$mengidentifikasi_variabel = ($_POST['p24']+$_POST['p25']+$_POST['p26'])/3;
echo"<input type='text' name=mengidentifikasi_variabel value='$mengidentifikasi_variabel'>";

$melakukan_percobaan = ($_POST['p27']+$_POST['p28']+$_POST['p29']+$_POST['p30']+$_POST['p31']+$_POST['p32']+$_POST['p33'])/7;
echo"<input type='text' name=melakukan_percobaan value='$melakukan_percobaan'>";

$prediksi = ($_POST['p34']+$_POST['p35'])/2;
echo"<input type='text' name=prediksi  value='$prediksi'>";

$mendefinisikan_variabel_secara_operasional = ($_POST['p36']+$_POST['p37']+$_POST['p38']+$_POST['p39']+$_POST['p40']+$_POST['p41']+$_POST['p42'])/7;
echo"<input type='text' name=mendefinisikan_variabel_secara_operasional value='$mendefinisikan_variabel_secara_operasional'>";

$melakukan_pengukuran = ($_POST['p43']+$_POST['p44']+$_POST['p45']+$_POST['p46']+$_POST['p47']+$_POST['p48'])/6;
echo"<input type='text' name=melakukan_pengukuran value='$melakukan_pengukuran'>";

$membuat_tabel = ($_POST['p49']+$_POST['p50']+$_POST['p51']+$_POST['p52'])/4;
echo"<input type='text' name=membuat_tabel value='$membuat_tabel'>";

$komunikasi = ($_POST['p53']+$_POST['p54']+$_POST['p55']+$_POST['p56'])/4;
echo"<input type='text' name=komunikasi value='$komunikasi'>";

$mengumpulkan_dan_mengorganisasikan_data = ($_POST['p57']+$_POST['p58'])/2;
echo"<input type='text' name=mengumpulkan_dan_mengorganisasikan_data value='$mengumpulkan_dan_mengorganisasikan_data'>";

$membuat_grafik = ($_POST['p59']+$_POST['p60']+$_POST['p61'])/3;
echo"<input type='text' name=membuat_grafik value='$membuat_grafik'>";

$mendeskripsikan_hubungan_antarvariabel = ($_POST['p62']+$_POST['p63']+$_POST['p64']+$_POST['p65'])/4;
echo"<input type='text' name=mendeskripsikan_hubungan_antarvariabel value='$mendeskripsikan_hubungan_antarvariabel'>";

$merumuskan_hipotesis = ($_POST['p66']);
echo"<input type='text' name=merumuskan_hipotesis  value='$merumuskan_hipotesis'>";
	
$kesimpulan = ($_POST['p67']+$_POST['p68']+$_POST['p69']+$_POST['p70']+$_POST['p71']+$_POST['p72']+$_POST['p73']+$_POST['p74']+$_POST['p75']+$_POST['p76']+$_POST['p77']+$_POST['p78']+$_POST['p79']+$_POST['p80'])/14;
echo"<input type='text' name=kesimpulan value='$kesimpulan'>";


  $nilai=((($_POST['p1']+$_POST['p2']+$_POST['p3']+$_POST['p4']+$_POST['p5']+$_POST['p6']+$_POST['p7']+$_POST['p8'])/8) + (($_POST['p9']+$_POST['p10']+$_POST['p11']+$_POST['p12'])/4) +(($_POST['p13']+$_POST['p14']+$_POST['p15']+$_POST['p16'])/4) +(($_POST['p17']+$_POST['p18']+$_POST['p19']+$_POST['p20']+$_POST['p21']+$_POST['p22']+$_POST['p23'])/7) + (($_POST['p24']+$_POST['p25']+$_POST['p26'])/3) +(($_POST['p27']+$_POST['p28']+$_POST['p29']+$_POST['p30']+$_POST['p31']+$_POST['p32']+$_POST['p33'])/7) + (($_POST['p34']+$_POST['p35'])/2) +(($_POST['p36']+$_POST['p37']+$_POST['p38']+$_POST['p39']+$_POST['p40']+$_POST['p41']+$_POST['p42'])/7) + (($_POST['p43']+$_POST['p44']+$_POST['p45']+$_POST['p46']+$_POST['p47']+$_POST['p48'])/6) +(($_POST['p49']+$_POST['p50']+$_POST['p51']+$_POST['p52'])/4) +(($_POST['p53']+$_POST['p54']+$_POST['p55']+$_POST['p56'])/4) + (($_POST['p57']+$_POST['p58'])/2) +(($_POST['p59']+$_POST['p60']+$_POST['p61'])/3) +(($_POST['p62']+$_POST['p63']+$_POST['p64']+$_POST['p65'])/4) + ($_POST['p66'])+(($_POST['p67']+$_POST['p68']+$_POST['p69']+$_POST['p70']+$_POST['p71']+$_POST['p72']+$_POST['p73']+$_POST['p74']+$_POST['p75']+$_POST['p76']+$_POST['p77']+$_POST['p78']+$_POST['p79']+$_POST['p80'])/14))/16;
    echo"<input type='text' name=nilai value='$nilai'>";
	
 
			$sql= "INSERT INTO kerapatan_2020(nama,nimkelas,kelas,materipraktikum,semester,p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,p12,p13,p14,p15,p16,p17,p18,p19,p20,p21,p22,p23,p24,p25,p26,p27,p28,p29,p30,p31,p32,p33,p34,p35,p36,p37,p38,p39,p40,p41,p42,p43,p44,p45,p46,p47,p48,p49,p50,p51,p52,p53,p54,p55,p56,p57,p58,p59,p60,p61,p62,p63,p64,p65,p66,p67,p68,p69,p70,p71,p72,p73,p74,p75,p76,p77,p78,p79,p80,observasi,klasifikasi,merencanakan_percobaan,analisis_percobaan,mengidentifikasi_variabel,melakukan_percobaan,prediksi,mendefinisikan_variabel_secara_operasional,melakukan_pengukuran,membuat_tabel,komunikasi,mengumpulkan_dan_mengorganisasikan_data,membuat_grafik,mendeskripsikan_hubungan_antarvariabel,merumuskan_hipotesis,kesimpulan,nilai)VALUES('$nama','$nimkelas','$kelas','$materipraktikum','$semester','$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p9','$p10','$p11','$p12','$p13','$p14','$p15','$p16','$p17','$p18','$p19','$p20','$p21','$p22','$p23','$p24','$p25','$p26','$p27','$p28','$p29','$p30','$p31','$p32','$p33','$p34','$p35','$p36','$p37','$p38','$p39','$p40','$p41','$p42','$p43','$p44','$p45','$p46','$p47','$p48','$p49','$p50','$p51','$p52','$p53','$p54','$p55','$p56','$p57','$p58','$p59','$p60','$p61','$p62','$p63','$p64','$p65','$p66','$p67','$p68','$p69','$p70','$p71','$p72','$p73','$p74','$p75','$p76','$p77','$p78','$p79','$p80','$observasi','$klasifikasi','$merencanakan_percobaan','$analisis_percobaan','$mengidentifikasi_variabel','$melakukan_percobaan','$prediksi','$mendefinisikan_variabel_secara_operasional','$melakukan_pengukuran','$membuat_tabel','$komunikasi','$mengumpulkan_dan_mengorganisasikan_data','$membuat_grafik','$mendeskripsikan_hubungan_antarvariabel','$merumuskan_hipotesis','$kesimpulan','$nilai')";
	
		if (mysqli_query($koneksi, $sql)){
					echo'<script language="javascript">alert("Terima kasih, data Anda berhasil disimpan");document.location="kerapatan.php";</script>';
				}else{
					echo'<div id="error">Uppssss....!Query ke database gagal dilakukan!</div>';
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


