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
            <a class="nav-link" href="lihatkerapatan.php">
              <span data-feather="bar-chart-2"></span>
              Tampilkan Data
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="rubrik.php">
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

<div class="alert alert-primary" role="alert">
		  <h4 class="alert-heading" align="center">RUBRIK PENILAIAN KETERAMPILAN PROSES SAINS</h4>
		  <hr>
		</div>
		 <div class="table-responsive-sm">
  <table class="table table-bordered">
		<tr>
            <th width="30" rowspan="2" align="center">No.</th>
			<th width="550" rowspan="2"><div align="center">Pernyataan</div></th>
            <th colspan="4"><div align="center">Skor</div>
		</tr>
		<tr>
			<th width="350"><div align="center">1<br>(Tidak terampil)</br></div></th>
            <th width="350"><div align="center">2<br>(Kurang terampil)</br></div></th>
            <th width="350"><div align="center">3<br>(Terampil)</br></div></th>
			<th width="350"><div align="center">4<br>(Sangat terampil)</br></div></th>
        </tr>
		<tr>
			<th class="table-success" colspan="6"><div align="center">Observasi</div></th>
		</tr>
		<tr>
			<td>1.</td>
			<td>Mengamati dengan cermat skala pada neraca pegas untuk menentukan nilai satu garis pada skala.</td>
			<td>Mengamati dengan cermat skala pada neraca pegas untuk menentukan nilai satu garis pada skala</td>
			<td>Mahasiswa tidak mengamati dengan cermat skala pada neraca pegas</td>
			<td>Mahasiswa bertanya pada teman/asdos untuk mengetahui nilai satu garis pada skala neraca pegas</td>
			<td>Mahasiswa mengamati dengan cermat skala pada neraca pegas</td>
		</tr>
		<tr>
			<td>2.</td>
			<td>Mengamati skala utama  dan skala nonius jangka sorong untuk menentukan ketelitian dan batas ukur jangka sorong  atau  mikrometer sekrup.</td>
			<td>Mengamati skala utama  dan skala nonius jangka sorong untuk menentukan ketelitian dan batas ukur jangka sorong  atau  mikrometer sekrup</td>
			<td>Mahasiswa tidak mengamati skala utama  dan skala nonius jangka sorong atau  mikrometer sekrup yang akan digunakan </td>
			<td>Mahasiswa mengamati skala utama  dan skala nonius tetapi  hanya dapat menentukan batas ukur jangka sorong atau  mikrometer sekrup</td>
			<td>Mahasiswa mengamati skala utama  dan skala nonius tetapi  hanya dapat menentukan ketelitian jangka sorong atau  mikrometer sekrup</td>
		</tr>
		<tr>
			<td>3.</td>
			<td>Mengamati benda yang akan digunakan/diukur kerapatannya sehingga tahu cara mengaitkan pada neraca pegas.</td>
			<td>Mengamati benda yang akan digunakan/diukur kerapatannya sehingga tahu cara mengaitkan pada neraca pegas.</td>
			<td>Mahasiswa tidak mengamati benda yang akan digunakan/diukur kerapatannya.</td>
			<td>Mahasiswa menanggapi pendapat temannya mengenai benda yang akan digunakan/diukur kerapatannya.</td>
			<td>Mahasiswa mengamati benda yang akan digunakan/diukur kerapatannya.</td>
		</tr>
		<tr>
			<td>4.</td>
			<td>Mengamati pembenam sehingga tahu cara mengaitkan pada benda.</td>
			<td>Mengamati pembenam sehingga tahu cara mengaitkan pada benda.</td>
			<td>Mahasiswa tidak mengamati pembenam.</td>
			<td>Mahasiswa menanggapi pendapat temannya mengenai pembenam.</td>
			<td>Mahasiswa mengamati pembenam.</td>
		</tr>
		<tr>
			<td>5.</td>
			<td>Cermat dalam mengamati jangka sorong atau mikrometer sekrup untuk menentukan volume benda (p, l, t) pada percobaan kerapatan.</td>
			<td>Cermat dalam mengamati jangka sorong atau mikrometer sekrup untuk menentukan volume benda (p, l, t) pada percobaan kerapatan.</td>
			<td>Mahasiswa tidak mengamati jangka sorong atau mikrometer sekrup untuk menentukan volume benda (p, l, t) .</td>
			<td>Mahasiswa mengamati dengan cermat jangka sorong atau mikrometer sekrup untuk menentukan volume benda (p, l, t) (pengulangan lebih dari satu kali).</td>
			<td>Mahasiswa mengamati dengan cermat jangka sorong atau mikrometer sekrup untuk menentukan volume benda (p, l, t) (pengulangan satu kali).</td>
		</tr>
		<tr>
			<td>6.</td>
			<td>Cermat dalam mengamati neraca pegas untuk menentukan massa benda pada percobaan kerapatan.</td>
			<td>Cermat dalam mengamati neraca pegas untuk menentukan massa benda pada percobaan kerapatan benda di udara.</td>
			<td>Mahasiswa tidak mengamati neraca pegas untuk menentukan massa benda.</td>
			<td>Mahasiswa mengamati neraca pegas untuk menentukan massa benda (pengulangan lebih dari satu kali).</td>
			<td>Mahasiswa mengamati dengan cermat neraca pegas untuk menentukan massa benda (pengulangan satu kali).</td>
		</tr>
		<tr>
			<td>7.</td>
			<td>Cermat dalam mengamati neraca pegas untuk menentukan massa benda pada percobaan kerapatan benda yang tercelup sebagian.</td>
			<td>Cermat dalam mengamati neraca pegas untuk menentukan massa benda pada percobaan kerapatan benda tercelup seluruhnya.</td>
			<td>Mahasiswa tidak mengamati neraca pegas untuk menentukan massa benda.</td>
			<td>Mahasiswa mengamati neraca pegas untuk menentukan massa benda (pengulangan lebih dari satu kali).</td>
			<td>Mahasiswa mengamati dengan cermat neraca pegas untuk menentukan massa benda (pengulangan satu kali).</td>
		</tr>
		<tr>
			<td>8.</td>
			<td>Cermat dalam mengamati neraca pegas untuk menentukan massa benda pada percobaan kerapatan benda tercelup seluruhnya.</td>
			<td>Cermat dalam mengamati neraca pegas untuk menentukan massa benda pada percobaan kerapatan benda tercelup sebagian.</td>
			<td>Mahasiswa tidak mengamati neraca pegas untuk menentukan massa benda.</td>
			<td>Mahasiswa mengamati neraca pegas untuk menentukan massa benda (pengulangan lebih dari satu kali).</td>
			<td>Mahasiswa mengamati dengan cermat neraca pegas untuk menentukan massa benda (pengulangan satu kali).</td>
		</tr>
		<tr>
			<th class="table-success" colspan="6"><div align="center">Klasifikasi</div></th></th>
		</tr>
		<tr>
			<td>9.</td>
			<td>Mengklasifikasikan karakteristik data  percobaan kerapatan benda (terlihat dalam membuat tabel).</td>
			<td>Mahasiswa tidak membuat tabel penentuan kerapatan benda (di udara, tercelup seluruhnya, tercelup sebagian).</td>
			<td>Mahasiswa membuat 1 tabel penentuan kerapatan benda (di udara, tercelup seluruhnya, tercelup sebagian).</td>
			<td>Mahasiswa membuat 2 tabel penentuan kerapatan benda (di udara, tercelup seluruhnya, tercelup sebagian).</td>
			<td>Mahasiswa membuat 3 tabel penentuan kerapatan benda (di udara, tercelup seluruhnya, tercelup sebagian).</td>
		</tr>
		<tr>
			<td>10.</td>
			<td>Mengklasifikasikan karakteristik data  percobaan kerapatan benda di udara (terlihat dalam membuat kolom tabel).</td>
			<td>Mahasiswa tidak membuat kolom pada tabel.</td>
			<td>Mahasiswa membuat 1 kolom tabel.</td>
			<td>Mahasiswa membuat 2 kolom tabel.</td>
			<td>Mahasiswa membuat 3 kolom tabel.</td>
		</tr>
		<tr>
			<td>11.</td>
			<td>Mengklasifikasikan karakteristik data  percobaan percobaan kerapatan benda tercelup seluruhnya (terlihat dalam membuat kolom tabel).</td>
			<td>Mahasiswa tidak membuat kolom pada tabel.</td>
			<td>Mahasiswa membuat 3-4 kolom tabel dari (n,m, l, t, T, g).</td>
			<td>Mahasiswa membuat 5 kolom tabel dari (n,m, l, t, T, g).</td>
			<td>Mahasiswa membuat 6 kolom tabel (n,m, l, t, T, g).</td>
		</tr>
		<tr>
			<td>12.</td>
			<td>Mengklasifikasikan karakteristik data  percobaan kerapatan benda tercelup sebagian (terlihat dalam membuat kolom tabel).</td>
			<td>Mahasiswa tidak membuat kolom pada tabel.</td>
			<td>Mahasiswa membuat 3-4 kolom tabel dari (n,m, l, t, T, g).</td>
			<td>Mahasiswa membuat 5 kolom tabel dari (n,m, l, t, T, g).</td>
			<td>Mahasiswa membuat 6 kolom tabel (n,m, l, t, T, g).</td>
		</tr>
		<tr>
			<th class="table-success" colspan="6"><div align="center">Merencanakan Percobaan</div></th></th>
		</tr>
		<tr>
			<td>13.</td>
			<td>Menentukan alat dan bahan yang akan digunakan pada praktikum kerapatan menggunakan literatur.</td>
			<td>Jika mahasiswa tidak menentukan alat dan bahan yang akan digunakan pada praktikum kerapatan yang menggunakan sumber referensi.</td>
			<td>Jika menentukan alat dan bahan yang akan digunakan pada praktikum kerapatan yang menggunakan sumber referensi berupa buku penuntun praktikum.</td>
			<td>Jika menentukan alat dan bahan yang akan digunakan pada praktikum kerapatan serta menggunakan sumber referensi berupa buku penuntun praktikum dan satu literatur lain (buku lain, ebook atau blog).</td>
			<td>Jika menentukan alat dan bahan yang akan digunakan pada praktikum kerapatan serta menggunakan sumber referensi berupa buku penuntun, buku lain dan ebook atau blog.</td>
		</tr>
		<tr>
			<td>14.</td>
			<td>Menentukan alat dan bahan utama untuk memperoleh kerapatan benda.</td>
			<td>Jika mahasiswa tidak menentukan alat dan bahan untuk memperoleh kerapatan benda.</td>
			<td>Jika mahasiswa bertanya dalam menentukan alat berupa neraca pegas, jangka sorong, gelas ukur, dan benda yang diukur.</td>
			<td>Jika mahasiswa menanggapi menentukan alat berupa neraca pegas, jangka sorong, gelas ukur, dan benda yang diukur.</td>
			<td>Jika mahasiswa berinisiatif menentukan alat percobaan kerapatan benda berupa neraca pegas, jangka sorong, gelas ukur, dan benda yang diukur.</td>
		</tr>
		<tr>
			<td>15.</td>
			<td>Menentukan alat dan bahan utama untuk memperoleh kerapatan relatif benda.</td>
			<td>Jika mahasiswa tidak menentukan alat dan bahan untuk memperoleh kerapatan relatif benda.</td>
			<td>Jika mahasiswa bertanya dalam menentukan alat berupa neraca pegas, jangka sorong, gelas ukur, benda yang diukur, dan pembenam.</td>
			<td>Jika mahasiswa menanggapi menentukan alat berupa neraca pegas, jangka sorong, gelas ukur, benda yang diukur, dan pembenam.</td>
			<td>Jika mahasiswa berinisiatif menentukan alat percobaan kerapatan relatif benda berupa neraca pegas, jangka sorong, gelas ukur, benda yang diukur, dan pembenam.</td>
		</tr>
		<tr>
			<td>16.</td>
			<td>Menentukan alat dan bahan untuk memperoleh kerapatan relatif benda yang tercelup sebagian.</td>
			<td>Jika mahasiswa tidak menentukan alat dan bahan untuk memperoleh kerapatan relatif benda yang tercelup sebagian.</td>
			<td>Jika mahasiswa bertanya dalam menentukan alat berupa neraca pegas, jangka sorong, gelas ukur, benda yang diukur, dan pembenam.</td>
			<td>Jika mahasiswa menanggapi menentukan alat berupa neraca pegas, jangka sorong, gelas ukur, benda yang diukur, dan pembenam.</td>
			<td>Jika mahasiswa berinisiatif menentukan alat percobaan kerapatan relatif benda tercelup sebagian berupa neraca pegas, jangka sorong, gelas ukur, dan benda yang diukur.</td>
		</tr>
		<tr>
			<th class="table-primary" colspan="6"><div align="center">Analisis Percobaan</div></th></th>
		</tr>
		<tr>
			<td>17.</td>
			<td>Mengambil alat yang akan digunakan dalam praktikum kerapatan setelah diamati.</td>
			<td>Jika mahasiswa tidak mengambil alat yang akan digunakan dalam praktikum kerapatan setelah diamati.</td>
			<td>Jika mahasiswa bertanya dalam mengambil alat berupa neraca pegas, jangka sorong, dan gelas ukur.</td>
			<td>Jika mahasiswa berargumentasi membagi tugas dalam pengambilan neraca pegas, jangka sorong, dan gelas ukur.</td>
			<td>Jika mahasiswa beinisiatif membagi tugas dalam pengambilan neraca pegas, jangka sorong, dan gelas ukur.</td>
		</tr>
		<tr>
			<td>18.</td>
			<td>Mengambil bahan yang akan digunakan dalam praktikum kerapatan setelah diamati.</td>
			<td>Jika mahasiswa tidak mengambil bahan yang akan digunakan dalam praktikum kerapatan setelah diamati.</td>
			<td>Jika mahasiswa bertanya dalam mengambil alat berupa benda yang diukur dan pembenam.</td>
			<td>Jika mahasiswa berargumentasi membagi tugas dalam pengambilan benda yang diukur dan pembenam.</td>
			<td>Jika mahasiswa beinisiatif membagi tugas dalam pengambilan benda yang diukur dan pembenam.</td>
		</tr>
		<tr>
			<td>19.</td>
			<td>Menentukan tindakan yang akan digunakan dari pengamatan terhadap alat dan bahan yang digunakan dalam merancnag percobaan kerapatan benda.</td>
			<td>Jika mahasiswa tidak menentukan tindakan yang akan digunakan dari pengamatan terhadap alat dan bahan yang digunakan dalam merancang percobaan kerapatan benda.</td>
			<td>Jika mahasiswa bertanya tentang  tindakan yang akan digunakan dari pengamatan terhadap alat dan bahan yang digunakan dalam merancnag percobaan kerapatan benda.</td>
			<td>Jika mahasiswa menanggapi dalam menentukan tindakan yang akan digunakan dari pengamatan terhadap alat dan bahan yang digunakan dalam merancnag percobaan kerapatan benda.</td>
			<td>Jika mahasiswa beragumentasi dan menentukan tindakan yang akan digunakan dari pengamatan terhadap alat dan bahan yang digunakan dalam merancang percobaan kerapatan benda.</td>
		</tr>
		<tr>
			<td>20.</td>
			<td>Menentukan tindakan yang akan dilakukan dari pengamatan terhadap alat dan bahan yang digunakan dalam merancang percobaan kerapatan relatif benda.</td>
			<td>Jika mahasiswa tidak menentukan tindakan yang akan digunakan dari pengamatan terhadap alat dan bahan yang digunakan dalam merancang percobaan kerapatan relatif  benda.</td>
			<td>Jika mahasiswa bertanya tentang  tindakan yang akan digunakan dari pengamatan terhadap alat dan bahan yang digunakan dalam merancang percobaan kerapatan relatif  benda.</td>
			<td>Jika mahasiswa menanggapi dalam menentukan tindakan yang akan digunakan dari pengamatan terhadap alat dan bahan yang digunakan dalam merancang percobaan kerapatan relatif  benda.</td>
			<td>Jika mahasiswa beragumentasi dan menentukan tindakan yang akan digunakan dari pengamatan terhadap alat dan bahan yang digunakan dalam merancang percobaan kerapatan relatif  benda.</td>
		</tr>
		<tr>
			<td>21.</td>
			<td>Menentukan tindakan yang akan dilakukan dari pengamatan terhadap alat dan bahan yang digunakan dalam merancang percobaan kerapatan relatif benda yang tercelup sebagian.</td>
			<td>Jika mahasiswa tidak menentukan tindakan yang akan digunakan dari pengamatan terhadap alat dan bahan yang digunakan dalam merancang percobaan kerapatan relatif benda yang tercelup sebagian.</td>
			<td>Jika mahasiswa bertanya tentang  tindakan yang akan digunakan dari pengamatan terhadap alat dan bahan yang digunakan dalam merancang percobaan kerapatan relatif benda yang tercelup sebagian.</td>
			<td>Jika mahasiswa menanggapi dalam menentukan tindakan yang akan digunakan dari pengamatan terhadap alat dan bahan yang digunakan dalam merancang kerapatan relatif benda yang tercelup sebagian.</td>
			<td>Jika mahasiswa beragumentasi dan menentukan tindakan yang akan digunakan dari pengamatan terhadap alat dan bahan yang digunakan dalam merancang percobaan kerapatan relatif benda yang tercelup sebagian.</td>
		</tr>
		<tr>
			<td>22.</td>
			<td>Dapat menyesuaiakan rancangan percobaan dengan hipotesis.</td>
			<td>Jika mahasiswa tidak dapat menyesuaiakan rancangan percobaan dengan hipotesis.</td>
			<td>Jika mahasiswa dapat menyesuaiakan rancangan percobaan dengan hipotesis dengan kurang tepat dan tidak benar.</td>
			<td>Jika mahasiswa dapat menyesuaiakan rancangan percobaan dengan hipotesis dengan tepat dan kurang benar.</td>
			<td>Jika mahasiswa dapat menyesuaiakan rancangan percobaan dengan hipotesis dengan tepat dan benar.</td>
		</tr>
		<tr>
			<td>23.</td>
			<td>Dapat memutuskan bahwa rancangan percobaan telah sesuai dengan hipotesis yang dibuat.</td>
			<td>Jika mahasiswa tidak dapat memutuskan bahwa rancangan percobaan telah sesuai dengan hipotesis yang dibuat.</td>
			<td>Jika mahasiswa tidak dapat memutuskan bahwa rancangan percobaan telah sesuai dengan hipotesis yang dibuat dengan kurang tepat dan tidak benar.</td>
			<td>Jika mahasiswa tidak dapat memutuskan bahwa rancangan percobaan telah sesuai dengan hipotesis yang dibuat dengan tepat dan kurang benar.</td>
			<td>Jika mahasiswa tidak dapat memutuskan bahwa rancangan percobaan telah sesuai dengan hipotesis yang dibuat dengan tepat dan benar.</td>
		</tr>
		<tr>
			<th class="table-primary" colspan="6"><div align="center">Mengidentifikasi variabel</div></th></th>
		</tr>
		<tr>
			<td>24.</td>
			<td>Menentukan variabel bebas.</td>
			<td>Mahasiswa tidak berargumen atau menanggapi dan mempertanyakan bahwa varibel bebas  dari percobaan adalah volume dan massa.</td>
			<td>Mahasiswa bertanya bahwa varibel bebas  dari percobaan adalah volume dan massa.</td>
			<td>Mahasiswa menanggapi bahwa varibel bebas  dari percobaan adalah volume dan massa.</td>
			<td>Mahasiswa berargumen bahwa varibel bebas dari percobaan adalah volume dan massa.</td>
		</tr>
		<tr>
			<td>25.</td>
			<td>Menentukan variabel terikat.</td>
			<td>Mahasiswa tidak berargumen atau menanggapi dan mempertanyakan bahwa varibel terikat kerapatan benda.</td>
			<td>Mahasiswa bertanya bahwa varibel terikat dari percobaan adalah kerapatan benda.</td>
			<td>Mahasiswa menanggapi bahwa varibel terikat adalah kerapatan benda.</td>
			<td>Mahasiswa berargumen bahwa varibel terikat adalah kerapatan benda.</td>
		</tr>
		<tr>
			<td>26.</td>
			<td>Menentukan variabel konstrol.</td>
			<td>Jika mahasiswa tidak berargumen atau menanggapi dan mempertanyakan bahwa varibel konstan dari percobaan adalah tali.</td>
			<td>Jika mahasiswa bertanya bahwa varibel konstan dari percobaan adalah dari percobaan adalah tali.</td>
			<td>Jika mahasiswa menanggapi bahwa varibel konstan dari percobaan adalah  tali.</td>
			<td>Jika mahasiswa berargumen bahwa varibel konstan dari percobaan adalah tali.</td>
		</tr>
		<tr>
			<th class="table-primary" colspan="6"><div align="center">Melakukan Percobaan</div></th></th>
		</tr>
		<tr>
			<td>27.</td>
			<td>Mahasiswa menyiapkan alat dengan tepat sesuai tujuan.</td>
			<td>Mahasiswa tidak memilih alat  untuk percobaan kerapatan.</td>
			<td>Mahasiswa telah memilih alat tapi kurang 2 dari alat yang diperlukan (jangka sorong, neraca pegas, dan gelas ukur).</td>
			<td>Mahasiswa telah memilih alat tapi kurang 1 dari alat yang diperlukan (jangka sorong, neraca pegas, dan gelas ukur).</td>
			<td>Mahasiswa telah memilih alat dengan lengkap (jangka sorong, neraca pegas, dan gelas ukur).</td>
		</tr>
		<tr>
			<td>28.</td>
			<td>Mahasiswa menyiapkan bahan dengan tepat sesuai tujuan.</td>
			<td>Mahasiswa tidak memilih bahan untuk percobaan kerapatan.</td>
			<td>Mahasiswa telah memilih bahan tapi kurang 2 dari bahan yang diperlukan (benda yang diukur atau balok, pembenam, dan benang).</td>
			<td>Mahasiswa telah memilih bahan tapi kurang 1 dari bahan yang diperlukan (benda yang diukur atau balok, pembenam, dan benang).</td>
			<td>Mahasiswa telah memilih bahan dengan lengkap (benda yang diukur atau balok, pembenam, dan benang).</td>
		</tr>
		<tr>
			<td>29.</td>
			<td>Mahasiswa menyiapkan literatur dengan tepat sesuai tujuan.</td>
			<td>Mahasiswa tidak membawa buku penuntun.</td>
			<td>Mahasiswa membawa buku penuntun.</td>
			<td>Mahasiswa membawa buku penuntun dan 1 sumber tambahan lainnya.</td>
			<td>Mahasiswa membawa buku penuntun dan buku sumber lain lebih dari 1.</td>
		</tr>
		<tr>
			<td>30.</td>
			<td>Melakukan perakitan alat dan bahan yang telah dipilih dalam perencanaan percobaan kerapatan benda.</td>
			<td>Jika mahasiswa tidak  merakit peralatan dalam percobaan kerapatan benda.</td>
			<td>Jika mahasiswa merakit peralatan dalam percobaan kerapatan benda dengan kurang benar dan tidak tepat.</td>
			<td>Jika mahasiswa merakit peralatan dalam percobaan kerapatan benda dengan benar dan kurang tepat.</td>
			<td>Jika mahasiswa merakit peralatan dalam percobaan kerapatan benda dengan benar dan tepat.</td>
		</tr>
		<tr>
			<td>31.</td>
			<td>Melakukan perakitan alat dan bahan yang telah dipilih dalam perencanaan percobaan kerapatan relatif benda.</td>
			<td>Jika mahasiswa tidak  merakit peralatan dalam percobaan kerapatan relatif benda.</td>
			<td>Jika mahasiswa merakit peralatan dalam percobaan kerapatan relatif benda dengan kurang benar dan tidak tepat.</td>
			<td>Jika mahasiswa merakit peralatan dalam percobaan kerapatan relatif benda dengan benar dan kurang tepat.</td>
			<td>Jika mahasiswa merakit peralatan dalam percobaan kerapatan relatif benda dengan benar dan tepat.</td>
		</tr>
		<tr>
			<td>32.</td>
			<td>Melakukan perakitan alat dan bahan yang telah dipilih dalam perencanaan percobaan kerapatan relatif benda tercelup sebagian.</td>
			<td>Jika mahasiswa tidak  merakit peralatan dalam percobaan kerapatan relatif benda yang tercelup sebagian.</td>
			<td>Jika mahasiswa merakit peralatan dalam percobaan kerapatan relatif benda yang tercelup sebagian dengan kurang benar dan tidak tepat.</td>
			<td>Jika mahasiswa merakit peralatan dalam percobaan kerapatan relatif benda yang tercelup sebagian dengan benar dan tepat.</td>
			<td>Jika mahasiswa merakit peralatan dalam percobaan kerapatan relatif benda yang tercelup sebagian dengan benar dan tepat.</td>
		</tr>
		<tr>
			<td>33.</td>
			<td>Mahasiswa melakukan percobaan menentukan kerapatan benda.</td>
			<td>Jika mahasiswa tidak melakukan percobaan menentukan kerapatan benda.</td>
			<td>Jika mahasiswa melakukan percobaan menentukan kerapatan benda dengan kurang benar dan tidak tepat.</td>
			<td>Jika mahasiswa melakukan percobaan menentukan kerapatan benda dengan benar dan kurang tepat.</td>
			<td>Jika mahasiswa melakukan percobaan menentukan kerapatan benda dengan benar dan tepat.</td>
		</tr>
		<tr>
			<th class="table-success" colspan="6"><div align="center">Prediksi</div></th></th>
		</tr>
		<tr>
			<td>34.</td>
			<td>Mengutarakan kerapatan benda sebelum mengukur massa benda di udara.</td>
			<td>Mahasiswa tidak mengutarakan kerapatan benda sebelum mengukur massa dan benda.</td>
			<td>Mahasiswa bertanya kepada teman atau asdos mengenai kerapatan benda sebelum mengukur massa dan benda.</td>
			<td>Mahasiswa menanggapi pendapat temannya mengenai  kerapatan benda sebelum mengukur massa dan benda.</td>
			<td>Mahasiswa mengutarakan kerapatan benda sebelum mengukur massa dan benda.</td>
		</tr>
		<tr>
			<td>35.</td>
			<td>Mengutarakan kerapatan benda sebelum mengukur massa dan benda yang tercelup (menggunakan pronsip Archimendes).</td>
			<td>Mahasiswa tidak mengutarakan kerapatan benda sebelum mengukur massa dan benda yang tercelup.</td>
			<td>Mahasiswa bertanya kepada teman atau asdos mengenai kerapatan benda sebelum mengukur massa dan benda yang tercelup.</td>
			<td>Mahasiswa menanggapi pendapat temannya mengenai  kerapatan benda sebelum mengukur massa dan benda yang tercelup.</td>
			<td>Mahasiswa mengutarakan kerapatan benda sebelum mengukur massa dan benda yang tercelup.</td>
		</tr>
		<tr>
			<th class="table-primary" colspan="6"><div align="center">Mendefinisikan variabel secara operasional</div></th></th>
		</tr>
		<tr>
			<td>36.</td>
			<td>Mahasiswa melakukan pengukuran untuk mengukur massa dan volume pada percobaan 1.</td>
			<td>Mahasiswa melakukan pengukuran untuk mengukur massa dan volume pada percobaan 1 tanpa pengulangan.</td>
			<td>Mahasiswa melakukan pengukuran untuk mengukur massa dan volume pada percobaan 1 dengan lebih dari 2 kali pengulangan.</td>
			<td>Mahasiswa melakukan pengukuran untuk mengukur massa dan volume pada percobaan 1 dengan  lebih dari 3 kali pengulangan.</td>
			<td>Mahasiswa melakukan pengukuran untuk mengukur massa dan volume pada percobaan 1 dengan lebih dari 4 kali pengulangan.</td>
		</tr>
		<tr>
			<td>37.</td>
			<td>Mahasiswa melakukan pengukuran massa di udara dan massa dalam air atau semu pada percobaan 2.</td>
			<td>Mahasiswa melakukan pengukuran massa di udara dan massa dalam air atau semu pada percobaan 2 tanpa pengulangan.</td>
			<td>Mahasiswa melakukan pengukuran massa di udara dan massa dalam air atau semu pada percobaan 2 dengan lebih dari 2 kali pengulangan.</td>
			<td>Mahasiswa melakukan pengukuran massa di udara dan massa dalam air atau semu pada percobaan 2 dengan  lebih dari 3 kali pengulangan.</td>
			<td>Mahasiswa melakukan pengukuran massa di udara dan massa dalam air atau semu pada percobaan 2 dengan lebih dari 4 kali pengulangan.</td>
		</tr>
		<tr>
			<td>38.</td>
			<td>Mahasiswa melakukan pengukuran untuk mengukur massa benda di udara, massa pembenam tercelup (mps), dan massa benda dan pembenam dalam air (M3)pada percobaan 3.</td>
			<td>Mahasiswa melakukan pengukuran untuk mengukur massa benda di udara, massa pembenam tercelup, dan massa benda dan pembenam dalam air pada percobaan 3 tanpa pengulangan.</td>
			<td>Mahasiswa melakukan pengukuran untuk mengukur massa benda di udara, massa pembenam tercelup, dan massa benda dan pembenam dalam air pada percobaan 3 dengan lebih dari 2 kali pengulangan.</td>
			<td>Mahasiswa melakukan pengukuran untuk mengukur massa benda di udara, massa pembenam tercelup, dan massa benda dan pembenam dalam air pada percobaan 3 lebih dari 3 kali pengulangan.</td>
			<td>Mahasiswa melakukan pengukuran untuk mengukur massa benda di udara, massa pembenam tercelup, dan massa benda dan pembenam dalam air pada percobaan 3 dengan lebih dari 4 kali pengulangan.</td>
		</tr>
		<tr>
			<td>39.</td>
			<td>Menentukan kerapatan benda menggunakan alat ukur jangka sorong dan neraca pegas.</td>
			<td>Mahasiswa tidak menentukan kerapatan benda menggunakan alat ukur jangka sorong dan neraca pegas.</td>
			<td>Mahasiswa menentukan kerapatan benda menggunakan alat ukur jangka sorong dan neraca pegas dengan kurang benar dan tidak tepat.</td>
			<td>Mahasiswa menentukan kerapatan benda menggunakan alat ukur jangka sorong dan neraca pegas dengan benar dan kurang tepat.</td>
			<td>Mahasiswa menentukan kerapatan benda menggunakan alat ukur jangka sorong dan neraca pegas dengan benar dan tepat.</td>
		</tr>
		<tr>
			<td>40.</td>
			<td>Menggukan prinsip archimedes dengan menggunakan air untuk mengukur massa benda.</td>
			<td>Mahasiswa tidak menggukan prinsip archimedes dengan menggunakan air untuk mengukur massa benda.</td>
			<td>Mahasiswa menggukan prinsip archimedes dengan menggunakan air untuk mengukur massa benda dengan kurang benar dan tidak tepat.</td>
			<td>Mahasiswa menggukan prinsip archimedes dengan menggunakan air untuk mengukur massa benda dengan benar dan kurang tepat.</td>
			<td>Mahasiswa menggukan prinsip archimedes dengan menggunakan air untuk mengukur massa benda dengan benar dan tepat.</td>
		</tr>
		<tr>
			<td>41.</td>
			<td>Memilih balok untuk mengukur kerapatannya.</td>
			<td>Mahasiswa tidak memilih balok untuk mengukur kerapatannya.</td>
			<td>Mahasiswa memilih balok untuk mengukur kerapatannya dengan kurang benar dan tidak tepat.</td>
			<td>Mahasiswa memilih balok untuk mengukur kerapatannya dengan benar dan kurang tepat.</td>
			<td>Mahasiswa memilih balok untuk mengukur kerapatannya dengan benar dan tepat.</td>
		</tr>
		<tr>
			<td>42.</td>
			<td>Memilih pembenam  untuk menenggelamkan benda yang akan diukur.</td>
			<td>Mahasiswa tidak memilih pembenam  untuk menenggelamkan benda yang akan diukur.</td>
			<td>Mahasiswa memilih pembenam  untuk menenggelamkan benda yang akan diukur dengan kurang benar dan tidak tepat.</td>
			<td>Mahasiswa memilih pembenam  untuk menenggelamkan benda yang akan diukur dengan benar dan kurang tepat.</td>
			<td>Mahasiswa memilih pembenam  untuk menenggelamkan benda yang akan diukur dengan benar dan tepat.</td>
		</tr>
			<th class="table-primary" colspan="6"><div align="center">Mengukur</div></th></th>
		</tr>
		<tr>
			<td>43.</td>
			<td>Mahasiswa dapat melakukan pengukuran dengan jangka sorong untuk menentukan volume.</td>
			<td>Mahasiswa tidak melakukan pengukuran volume benda dengan jangka sorong dengan tidak benar dan tidak tepat.</td>
			<td>Mahasiswa melakukan pengukuran volume benda dengan jangka sorong dengan kurang benar dan tidak tepat.</td>
			<td>Mahasiswa melakukan pengukuran volume benda dengan jangka sorong dengan benar dan kurang tepat.</td>
			<td>Mahasiswa melakukan pengukuran volume benda dengan jangka sorong dengan benar dan tepat.</td>
		</tr>
		<tr>
			<td>44.</td>
			<td>Mahasiswa dapat melakukan pengukuran massa benda dengan neraca pegas.</td>
			<td>Mahasiswa tidak melakukan pengukuran massa benda dengan neraca pegas dengan tidak benar dan tidak tepat</td>
			<td>Mahasiswa dapat melakukan pengukuran massa benda dengan neraca pegas dengan kurang benar dan tidak tepat.</td>
			<td>Mahasiswa dapat melakukan pengukuran massa benda dengan neraca pegas dengan benar dan kurang tepat.</td>
			<td>Mahasiswa dapat melakukan pengukuran massa benda dengan neraca pegas dengan benar dan tepat.</td>
		</tr>
		<tr>
			<td>45.</td>
			<td>Membaca skala utama dan skala nonius pada jangka sorong.</td>
			<td>Mahasiswa tidak dapat membaca skala nonius dan tidak dapat membaca skala utama yang ditunjukan dari angka sebelum 0 skala nonius.</td>
			<td>Mahasiswa dapat membaca skala utama yang ditunjukan dari angka sebelum rahang geser dan mahasiswa membaca skala  nonius berdasarkan garis yang berimpit dengan salah satu garis skala utama tapi tidak tepat.</td>
			<td>Mahasiswa dapat membaca skala utama yang ditunjukan dari angka sebelum 0 skala nonius, namun tidak tepat sebelum 0 dan mahasiswa membaca skala  nonius berdasarkan garis yang berimpit dengan salah satu garis skala utama dengan kurang tepat.</td>
			<td>Mahasiswa dapat membaca skala utama yang ditunjukan dari angka sebelum 0 skala nonius dan mahasiswa membaca skala  nonius berdasarkan garis yang berimpit dengan salah satu garis skala utama dengan tepat di depan mata.</td>
		</tr>
		<tr>
			<td>46.</td>
			<td>Membaca skala pada neraca pegas. </td>
			<td>Mahasiswa tidak  membaca skala neraca pegas dengan tidak benar dan tidak tepat.</td>
			<td>Mahasiswa membaca skala  dengan kurang benar dan tidak tepat.</td>
			<td>Mahasiswa membaca skala  dengan benar dan kurang tepat.</td>
			<td>Mahasiswa membaca skala  dengan benar dan tepat.</td>
		</tr>
		<tr>
			<td>47.</td>
			<td>Mahasiswa mencari skala utama dan nonius pada jangka sorong untuk menentukan volume benda.</td>
			<td>Mahasiswa tidak mencari skala utama dan nonius pada jangka sorong untuk menentukan volume benda dengan tidak benar dan tidak tepat.</td>
			<td>Mahasiswa mencari skala utama dan nonius pada jangka sorong untuk menentukan volume benda dengan kurang benar dan tidak tepat.</td>
			<td>Mahasiswa mencari skala utama dan nonius pada jangka sorong untuk menentukan volume benda dengan benar dan kurang tepat.</td>
			<td>Mahasiswa mencari skala utama dan nonius pada jangka sorong untuk menentukan volume benda dengan benar dan tepat.</td>
		</tr>
		<tr>
			<td>48.</td>
			<td>Mahasiswa menentukan nilai dari skala neraca pegas untuk menentukan massa benda.</td>
			<td>Mahasiswa tidak menentukan nilai dari skala neraca pegas untuk menentukan massa benda dengan tidak benar dan tidak tepat.</td>
			<td>Mahasiswa menentukan nilai dari skala neraca pegas untuk menentukan massa benda dengan kurang benar dan tidak tepat.</td>
			<td>Mahasiswa menentukan nilai dari skala neraca pegas untuk menentukan massa benda dengan benar dan kurang tepat.</td>
			<td>Mahasiswa menentukan nilai dari skala neraca pegas untuk menentukan massa benda dengan benar dan tepat.</td>
		</tr>
		</tr>
			<th class="table-primary" colspan="6"><div align="center">Membuat Tabel</div></th></th>
		</tr>
		<tr>
			<td>49.</td>
			<td>Mahasiswa membuat 3 tabel (kerapatan benda, kerapatan relatif benda yang tercelup seluruhnya dan kerapatan relatif tercelup sebagian) data hasil pengukuran.</td>
			<td>Mahasiswa menyusun data dalam bentuk tabel yang dari melihat tabel teman tanpa bertanya teman.</td>
			<td>Mahasiswa menyusun data dalam bentuk tabel yang dari melihat tabel teman dengan bertanya teman terlebih dulu.</td>
			<td>Mahasiswa menyusun data dalam bentuk tabel yang dibuat sendiri dengan bertanya teman untuk memastikan bentuk tabel.</td>
			<td>Mahasiswa menyusun data dalam bentuk tabel yang dibuat sendiri tanpa bertanya (percaya diri).</td>
		</tr>
		<tr>
			<td>50.</td>
			<td>Mahasiswa membuat label (judul kolom) yang sesuai untuk masing-masing kolom.</td>
			<td>Mahasiswa membuat label pada tabel.</td>
			<td>Mahasiswa hanya membuat 1 label tabel yaitu hanya kerapatan.</td>
			<td>Mahasiswa membuat 3 label tabel yaitu m, mps, ms, m1, dan m2.</td>
			<td>Mahasiswa membuat 5 label tabel yaitu m, mps, ms, m1, dan m2.</td>
		</tr>
		<tr>
			<td>51.</td>
			<td>Mahasiswa membuat tabel data berulang untuk percobaan.</td>
			<td>Jika mahasiswa tidak menampilkan tabel pengukuran berulang.</td>
			<td>Jika mahasiswa hanya menggambil data sebanyak 3 kali dan diperjelas dengan nomor.</td>
			<td>Jika mahasiswa hanya menggambil data sebanyak 4 kali dan diperjelas dengan nomor.</td>
			<td>Jika mahasiswa menggambil data sebanyak 5 kali dan diperjelas dengan nomor.</td>
		</tr>
		<tr>
			<td>52.</td>
			<td>Mahasiswa membuat kolom nomor untuk memperjelas adanya pengukuran berulang.</td>
			<td>Mahasiswa tidak membuat kolom nomor untuk memperjelas adanya pengukuran berulang.</td>
			<td>Mahasiswa membuat kolom nomor untuk memperjelas adanya pengukuran berulang dengan kurang benar dan tidak tepat.</td>
			<td>Mahasiswa membuat kolom nomor untuk memperjelas adanya pengukuran berulang dengan benar dan kurang tepat.</td>
			<td>Mahasiswa membuat kolom nomor untuk memperjelas adanya pengukuran berulang dengan benar dan tepat.</td>
		</tr>




		</table>
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
			  
			  
			  
			  
			  
			  
			  
			  
			  