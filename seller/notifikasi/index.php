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
	<title>Notification</title>
	<style>
		* {
			box-sizing: border-box;
		}

		html,
		body {
			margin: 0;
		}

		p,
		h1 {
			margin: 0;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="style4.css">
</head>

<body>

	<div class="etalase">
		<div class="frame-715">
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
					<img src="../assets/toko/<?= $data['image_profile'] ?>" alt="foto" style="height: 50px;min-width: 50px;object-fit: cover;position: relative;border-radius: 100%;" />
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
			<img class="frame" src="../assets/svg/notification-active.svg" alt="Frame 56" style="border-bottom: 2px solid #3B82F6;" />
			<a href="../etalase/"><img class="frame" src="../assets/svg/catalog.svg" alt="Frame 57" style="border-bottom: 2px solid #0002;" /></a>
			<a href="../penjualan/"><img class="frame-717" src="../assets/svg/stats.svg" alt="Frame 717" style="border-bottom: 2px solid #0002;" /></a>
		</div>
		<h1 class="tittle">Notifikasi Anda</h1>
		<div class="frame-container-1">
			<div class="frame-8">
				<img class="vector" src="vector.svg" alt="vector">
				<div class="filter inter-normal-blueberry-8px">Filter</div>
			</div>
			<div class="frame-706">
				<div class="selesai inter-normal-blueberry-8px">Selesai</div>
			</div>
		</div>
		<div class="belum-ada-transaksi">Belum Ada Transaksi</div>
	</div>
</body>

</html>