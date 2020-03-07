<?php
include('koneksi.php');
$tampil_kategori = mysqli_query($home,'select * from t_kategori');
?>
<link rel="stylesheet" type="text/css" href="style.css">
<body bgcolor="#CD853F">
	<h2 align="center">DAFTAR BARANG</h2>
	<form method="post" action=""><!--Form untuk dirim data ke DB-->
	<table class="table1" align="center"><!--Nama harus sama dengan database-->
		<ul>
			<li><a href="input_kategori.php"></li></a>
		</ul>
	<tr>
		<td>Id Kategori</td>
		<td>Nama Kategori</td>
	</tr>
<?php while($data = mysqli_fetch_array($tampil_kategori)) { ?>
	<tr>
		<td><?php echo $data['id_kategori']; ?></td>
		<td><?php echo $data['nama_kategori']; ?></td>
	</tr>
<?php } ?>
		</table>
	</form>
</body>
<ul>
	<li><a href="menu.php"></li></a>
</ul>