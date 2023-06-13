<?php
session_start();
include '../../conn.php';
if (!isset($_SESSION['id_toko'])) {
	header("Location: ../formulir-mitra");
} elseif (!isset($_SESSION['id'])) {
	header("Location: ../login");
}
?>
<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="style-penjualan.css">

<body>
	<div class="penjualan">
		<div class="background-atas">
			<div class="toko-kamu valign-text-middle">Toko Kamu</div>
			<a href="../setting">
				<img src="../assets/svg/settings.png" width="20" height="20" alt="setting" />
			</a>
		</div>

		<?php
		//proses menampilkan data dari database:
		//siapkan query SQL
		$query = "SELECT * FROM toko WHERE owner = '$_SESSION[id]'";
		$result = mysqli_query(connection(), $query);
		?>
		<?php while ($data = mysqli_fetch_array($result)) : ?>
			<div class="frame-714">
				<div class="frame-16">
					<img src="../assets/toko/<?= $data['image_profile'] ?>" alt="Profil" style="height: 50px;min-width: 50px;object-fit: cover;position: relative;border-radius: 100%;" />
					<div class="frame-15">
						<div class="valign-text-middle" style="font-weight: bold;font-size: 1.25rem;"><?= $data['name'] ?></div>
						<div class="frame-701">
							<div class="ellipse-11"></div>
							<div class="online valign-text-middle">Online</div>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>

		<div class="frame-container">
			<a href="../beranda-mitra/"><img class="frame" src="../assets/svg/product.svg" alt="Frame 716" style="border-bottom: 2px solid #0002;" /></a>
			<a href="../notifikasi/"><img class="frame" src="../assets/svg/notification.svg" alt="Frame 56" style="border-bottom: 2px solid #0002;" /></a>
			<a href="../etalase/"><img class="frame" src="../assets/svg/catalog.svg" alt="Frame 57" style="border-bottom: 2px solid #0002;" /></a>
			<img class="frame-717" src="../assets/svg/stats-active.svg" alt="Frame 717" style="border-bottom: 2px solid #3B82F6;" />
		</div>

		<?php
		$query_produk = "SELECT * FROM product WHERE toko_id = '$_SESSION[id_toko]'";
		$result_produk = mysqli_query(connection(), $query_produk);
		$total_produk = 0;
		while ($data_produk = mysqli_fetch_array($result_produk)) {
			$total_produk++;
		}

		$query = "SELECT * FROM toko WHERE owner = '$_SESSION[id]'";
		$result = mysqli_query(connection(), $query);
		?>
		<?php while ($data_toko = mysqli_fetch_array($result)) : ?>
			<div className="p-6" style="padding: 1.5rem;">
				<h1 className="text-2xl font-normal text-slate-700" style="font-size: 1.5rem;color: rgb(51 65 85);">Laporan Toko Anda</h1>
				<div>
					<div className="py-3 [&>*:hover]:cursor-pointer [&>p:hover]:border-mygreen_dark w-min text-mygreen_dark" style="padding: .75rem 0;cursor: pointe;width: min-content;color: #3B82F6;">
						<p className="p-1 text-xs font-semilight border-b-2 opacity-60 hover:opacity-100" style="padding: .25rem;font-size: .75rem;font-weight: 300;border-bottom: 2px solid #3b82f6;">
							Keseluruhan
						</p>
					</div>
					<div className="py-3" style="padding: .75rem 0;">
						<div className="py-3 px-6 text-white rounded-xl bg-mygreen_dark w-36" style="padding: .75rem 1.5rem;color: white;border-radius: .75rem;background-color: #3B82F6;width: 9rem;">
							<h1 style="font-size: 1.25rem;">Total Produk</h1>
							<span className="text-2xl font-bold" style="font-size: 1.5rem;font-weight: bold;"><?= $total_produk ?></span>
						</div>
						<h1 className="my-3 text-md font-normal text-slate-700" style="margin: .75rem 0;color: rgb(51 65 85);font-size: 1.25rem;">
							Pendapatan Total :
							<span className="font-bold text-xl text-slate-600 tracking-wide" style="font-weight: bold;font-size: 1.25rem;color: rgb(71 85 105);">
								Rp. <?= $data_toko['pendapatan_total'] ?>
							</span>
						</h1>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
</body>

</html>