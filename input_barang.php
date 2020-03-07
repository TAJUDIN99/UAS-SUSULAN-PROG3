<?php
include('koneksi.php');
if(isset($_POST['save'])){
	$query_input_barang="insert into t_barang (id_barang, nama_barang, id_kategori, id_satuan)
	values('".$_POST['id_barang']."',
			'".$_POST['nama_barang']."',
			'".$_POST['id_kategori']."',
			'".$_POST['id_satuan']."')";
	$proses_input_barang=mysqli_query($home,$query_input_barang);
	if($proses_input_barang){
		echo 'Input Data Berhasil Gaesss';
	}else{
		echo mysqli_error($home);
	}
}
?>
	
<body bgcolor="#FFF8DC">
	<h2 align="center">DAFTAR BARANG</h2>
	<form method="post" action=""><!--Form untuk dirim data ke DB-->
	<table class="tablex" align="center"><!--Nama harus sama dengan database-->
		<ul>
			<li><a href="halaman/tampil_barang.php"></li></a>
		</ul>
		<tr>
			<td>Id Barang</td>
			<td><input type="number" name="id_barang"></td>
		</tr>
		<tr>
			<td>Nama Barang</td>
			<td><input type="text" name="nama_barang"></td>
		</tr>
		<tr>
			<td>Id Kategori</td>
			<td><input type="number" name="id_kategori"></td>
		</tr>
		<tr>
			<td>Id Satuan</td>
			<td><input type="number" name="id_satuan"></td>
		</tr>
		</td>
		</table>
		<input type="submit" name="save">
	</form>
</body>
<ul>
	<li><a href="menu.php"></li></a>
</ul>
