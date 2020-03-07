<?php
include('koneksi.php');
//Laporan transaksi barang yang di kelompokkan per kategory
$laporan_transaksi="select ktg.id_kategori, ktg.nama_kategori, brg.nama_barang, qty, harga, qty*harga as total 
				from t_transaksi as trx inner join t_barang as brg on trx.id_barang=brg.id_barang
				inner join t_kategory\i as ktg on brg.id_kategori=ktg.id_kategori				
				inner join t_satuan as stn on brg.id_satuan=stn.id_satuan";

$tampil_laptransaksi = mysqli_query($home, $laporan_transaksi);
if($tampil_laptransaksi ===FALSE){
	die(mysqli_error($home));
}
?>
<link rel="stylesheet" type="text/css" href="style.css">
<body bgcolor="#E9967A ">
	<h2 align="center">DAFTAR BARANG </h2>
	<form method="post" action=""><!--Form untuk dirim data ke DB-->
	<table border="1" align="center"><!--Nama harus sama dengan database-->
		<ul>
			<li><a href="input_transaksi.php">      </li></a>
		</ul>
	<tr>
		<td>Id Kategory</td>
		<td>Nama Kategory</td>
		<td>Nama Barang</td>
		<td>Qty</td>
		<td>Harga</td>
		<td>Total</td>
	</tr>
<?php while($data = mysqli_fetch_array($tampil_laptransaksi)){ ?>

	<tr>
		<td><?php echo $data['id_kategori']; ?></td>
		<td><?php echo $data['nama_kategori']; ?></td>
		<td><?php echo $data['nama_barang']; ?></td>
		<td><?php echo $data['qty']; ?></td>
		<td><?php echo $data['harga']; ?></td>
		<td><?php echo $data['total']; ?></td>
	</tr>
<?php } ?>
		</table>
	</form>
</body>
<ul>
	<li><a href="menu.php">             </li></a>
</ul>