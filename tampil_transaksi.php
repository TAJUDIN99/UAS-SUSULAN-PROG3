<?php
include('koneksi.php');
//INNER JOIN dengan t_barang, t_kategori dan t_satuan
$query_transaksi="select brg.id_barang, brg.nama_barang, ktg.id_kategori, ktg.nama_kategori, 
				stu.id_satuan, stu.nama_satuan,qty, harga, qty*harga as total 
				from t_transaksi as trx inner join t_barang as brg on trx.id_barang=brg.id_barang
				inner join t_kategori as ktg on brg.id_kategori=ktg.id_kategori
				inner join t_satuan as stu on brg.id_satuan=stu.id_satuan";
$tampil_transaksi = mysqli_query($home, $query_transaksi);
if($tampil_transaksi ===FALSE){
	die(mysqli_error($home));
}
?>
<link rel="stylesheet" type="text/css" href="style.css">
<body bgcolor="#FF1493">
	<h2 align="center">DAFTAR BARANG</h2>
	<form method="post" action=""><!--Form untuk dirim data ke DB-->
	<table class="table1" align="center"><!--Nama harus sama dengan database-->
		<ul>
			<li><a href="input_transaksi.php"></li></a>
		</ul>
	<tr>
		<td>Id Barang</td>
		<td>Nama Barang</td>
		<td>Id Kategory</td>
		<td>Nama Kategory</td>
		<td>Id Satuan</td>
		<td>Nama Satuan</td>
		<td>Qty</td>
		<td>Harga</td>
		<td>Total</td>
	</tr>
<?php while($data = mysqli_fetch_array($tampil_transaksi)){ ?>

	<tr>
		<td><?php echo $data['id_barang']; ?></td>
		<td><?php echo $data['nama_barang']; ?></td>
		<td><?php echo $data['id_kategori']; ?></td>
		<td><?php echo $data['nama_kategori']; ?></td>
		<td><?php echo $data['id_satuan']; ?></td>
		<td><?php echo $data['nama_satuan']; ?></td>
		<td><?php echo $data['qty']; ?></td>
		<td><?php echo $data['harga']; ?></td>
		<td><?php echo $data['total']; ?></td>
	</tr>
<?php } ?>
		</table>
	</form>
</body>
<ul>
	<li><a href="menu.php"></li></a>
</ul>