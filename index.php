<!DOCTYPE html>
<html>
<head>
	<title>DATA BARANG</title>
	
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>

<div class="content">
	<header>
		<h1 class="judul">STIMK MUHAMMADIYAH BANTEN</h1>
		<h3 class="deskripsi">JALAN RAYA PASIR NANGKA TIGARAKSA TANGERANG BANTEN</h3>
	</header>

	<div class="menu">
		<ul>
			<li><a href="index.php?page=barang">INPUT BARANG</a></li>
			<li><a href="index.php?page=satuan">INPUT SATUAN</a></li>
			<li><a href="index.php?page=kategori">INPUT KATEGORI</a></li>
			<li><a href="index.php?page=transaksi">INPUT TRANSAKSI</a></li>
			<li><a href="index.php?page=show_br">TAMPIL BARANG</a></li>
			<li><a href="index.php?page=show_st">TAMPIL SATUAN</a></li>
			<li><a href="index.php?page=show_kt">TAMPIL KATEGORI</a></li>
			<li><a href="index.php?page=show_tr">TAMPIL TRANSAKSI</a></li>
			<li><a href="index.php?page=report_tr">LAPORAN TRANSAKSI</a></li>

		</ul>
	</div>

	<div class="badan">


	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
			case 'barang':
				include "halaman/input_barang.php";
				break;
			case 'satuan':
				include "halaman/input_satuan.php";
				break;
			case 'kategori':
				include "halaman/input_kategori.php";
				break;	
			case 'transaksi':
				include "halaman/input_transaksi.php";
				break;
			case 'show_br':
				include "halaman/tampil_barang.php";
				break;
			case 'show_st':
				include "halaman/tampil_satuan.php";
				break;
			case 'show_kt':
				include "halaman/tampil_kategori.php";
				break;
			case 'show_tr':
				include "halaman/tampil_transaksi.php";
				break;
			case 'kategori':
				include "halaman/input_kategori.php";
				break;
			case 'report_tr':
				include "halaman/laporan_transaksi.php";
				break;					
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/home.php";
	}

	 ?>

	</div>
</div>
</body>
</html>