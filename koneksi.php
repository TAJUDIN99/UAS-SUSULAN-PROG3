<?php
$server="localhost";
$user="root"; // ini berlaku di xampp
$password=""; // ini berlaku di xampp
$database="uas_prog3";

// melakukan koneksi ke database
$home=mysqli_connect($server,$user,$password);

// cek koneksi yang kita lakukan berhasil
if($home){
	echo 'Koneksi Berhasil Terhubung'.",&nbsp";
}else{
	echo 'Cek Lagi!!';
}
$db=mysqli_select_db($home,$database);
if($db){
	echo 'DB Berhasil Terhubung'.",&nbsp";
}else{
	echo 'Cek Lagi!!';
}
?>