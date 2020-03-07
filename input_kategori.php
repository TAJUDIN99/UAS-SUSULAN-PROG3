<?php
include('koneksi.php');
if(isset($_POST['save'])){
	$query_input_kategori="insert into t_kategori (id_kategori, nama_kategori)
	values('".$_POST['id_kategori']."',
			'".$_POST['nama_kategori']."')";
	$proses_input_kategori=mysqli_query($home,$query_input_kategori);
	if($proses_input_kategori){
		echo 'Input Data Berhasil Gaesss';
	}else{
		echo mysqli_error($home);
	}
}
?>
<link rel="stylesheet" type="text/css" href="style.css">
<body bgcolor="#FF8C00">
	<h2 align="center">DAFTAR BARANG </h2>
	<form method="post" action="">
	<table class="tablex" align="center">
		<ul>
			<li><a href="tampil_kategory.php">     </li></a>
		</ul>
		<tr>
			<td>Id Kategori</td>
			<td><input type="number" name="id_kategori"></td>
		<tr>
			<td>Nama Kategori</td>
			<td><input type="text" name="nama_kategori"></td>
		</tr>
		<tr>
		</tr>
		</table>
		<td><input type="submit" name="save"></td>
	</form>
</body>
<ul>
	<li><a href="menu.php">      </li></a>
</ul>
