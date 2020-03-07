<?php
include('koneksi.php');
if(isset($_POST['save'])){
	$query_input_transaksi="insert into t_transaksi (id_transaksi, nama_transaksi, tanggal_transaksi, harga, qty, id_barang)
	values('".$_POST['id_transaksi']."',
			'".$_POST['nama_transaksi']."',
			'".$_POST['tanggal_transaksi']."',
			'".$_POST['harga']."',
			'".$_POST['qty']."',
			'".$_POST['id_barang']."')";
	$proses_input_transaksi=mysqli_query($home,$query_input_transaksi);
	if($proses_input_transaksi){
		echo 'Input Data Berhasil!';
	}else{
		echo mysqli_error($home);
	}
}
?>
<link rel="stylesheet" type="text/css" href="style.css">
<body bgcolor="#FF1493">
	<h2 align="center">DAFTAR BARANG </h2>
	<form method="post" action=""><!--Form untuk dirim data ke DB-->
	<table class="tablex" align="center"><!--Nama harus sama dengan database-->
		<ul>
			<li><a href="tampil_transaksi.php"></li></a>
		</ul>
		<tr>
			<td>Id Transaksi</td>
			<td><input type="number" name="id_transaksi"></td>
		</tr>
		<tr>
			<td>Nama Transaksi</td>
			<td><input type="text" name="nama_transaksi"></td>
		</tr>
		<tr>
			<td>Tanggal Transaksi</td>
			<td><input type="date" name="tanggal_transaksi"></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input type="number" name="harga"></td>
		</tr>
		<tr>
			<td>Qty</td>
			<td><input type="number" name="qty"></td>
		</tr>
		<tr>
			<td>Id Barang</td>
			<td><input type="number" name="id_barang"></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		</table>
		<input type="submit" name="save">
	</form>
</body>
<ul>
	<li><a href="menu.php">     </li></a>
</ul>
