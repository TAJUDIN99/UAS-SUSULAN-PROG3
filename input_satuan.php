<?php
include('koneksi.php');
if(isset($_POST['save'])){
	$query_input_satuan="insert into t_satuan (id_satuan, nama_satuan)
	values('".$_POST['id_satuan']."',
			'".$_POST['nama_satuan']."')";
	$proses_input_satuan=mysqli_query($home,$query_input_satuan);
	if($proses_input_satuan){
		echo 'Input Data Berhasil!';
	}else{
		echo mysqli_error($home);
	}
}
?>
	<link rel="stylesheet" type="text/css" href="style.css">
<body bgcolor="#7FFF00">
	<h2 align="center">DAFTAR BARANG </h2>
	<form method="post" action="">
	<table class="tablex" border="1" align="center">
		<ul>
			<li><a href="tampil_satuan.php">     </li></a>
		</ul>
		<tr>
			<td>Id Satuan</td>
			<td><input type="number" name="id_satuan"></td>
		<tr>
			<td>Nama Satuan</td>
			<td><input type="text" name="nama_satuan"></td>
		</tr>
		<tr>
		</tr>
		</table>
		<td><input type="submit" name="save"></td>
	</form>
</body>
<ul>
	<li><a href="menu.php">    </li></a>
</ul>
