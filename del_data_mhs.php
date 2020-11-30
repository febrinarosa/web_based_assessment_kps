<?php

$nim=$_GET['nim'];

	$host ="localhost";
        $user ="adminfis_kps_tim";
        $pass ="tim20180826";
        $name ="adminfis_fisikadasar1";
        $koneksi = mysqli_connect("localhost","adminfis_kps_tim","tim20180826");
        if(!mysqli_select_db($koneksi,$name)){
	    echo"gagal";
        }
    $query = mysqli_query($koneksi,"DELETE FROM kerapatan_2020 WHERE nimkelas='$nim'");

if($query){
header("location:lihatkerapatan.php");
}
else{
	echo "Data tidak bisa dihapus";
	//echo mysqli_error();
	//echo "DELETE kerapatan_2020 WHERE nimkelas='$nim'";
}

?>