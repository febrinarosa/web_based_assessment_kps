<?php
$host ="localhost";
$user ="adminfis_kps_tim";
$pass ="tim20180826";
$name ="adminfis_fisikadasar1";
$koneksi = mysqli_connect("localhost","adminfis_kps_tim","tim20180826");
$db = mysqli_select_db($koneksi,$name);
?>