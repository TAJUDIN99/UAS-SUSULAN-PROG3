<?php
include('koneksi.php');
$tampil_satuan = mysqli_query($home,'select * from t_satuan');
?>
<link rel="stylesheet" type="text/css" href="style.css">
<body bgcolor="#DDA0DD">
	<h2 align="center">DAFTAR BARANG</h2>
	<form method="post" action=""><!--Form untuk dirim data ke DB-->
	<table class="table1" align="center"><!--Nama harus sama dengan database-->
		<ul>
			<li><a href="input_satuan.php"></li></a>
		</ul>
	<tr>
		<td>Id Satuan</td>
		<td>Nama Satuan</td>
	</tr>
<?php while($data = mysqli_fetch_array($tampil_satuan)) { ?>
	<tr>
		<td><?php echo $data['id_satuan']; ?></td>
		<td><?php echo $data['nama_satuan']; ?></td>
	</tr>
<?php } ?>
		</table>
	</form>
</body>
<ul>
	<li><a href="menu.php"></li></a>
</ul>