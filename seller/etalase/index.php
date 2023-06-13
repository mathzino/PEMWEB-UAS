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
<link rel="stylesheet" type="text/css" href="style-etalase.css">

<body>

	<div class="etalase">
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
			<img class="frame" src="../assets/svg/catalog-active.svg" alt="Frame 57" style="border-bottom: 2px solid #3B82F6;" />
			<a href="../penjualan/"><img class="frame-717" src="../assets/svg/stats.svg" alt="Frame 717" style="border-bottom: 2px solid #0002;" /></a>
		</div>

		<div class="layer-bawah">

			<div class="layer-list-produk">
				<div class="list-produk-toko">List Produk Toko</div>
			</div>


			<div class="layer-produk-bawah">

				<div class="flex-col">

					<div class="frame-72">

						<div class="frame-71">

							<img class="vector" src="vector-1.svg" alt="Vector" />

							<div class="tambahkan-produk inter-semi-bold-black-12px">Tambahkan Produk</div>
						</div>

						<img class="vector-1" src="vector.svg" alt="Vector" />
					</div>

					<div class="frame-72">

						<div class="frame-71">

							<img class="vector" src="vector-2.svg" alt="Vector" />

							<div class="semua-produk inter-semi-bold-black-12px">Semua Produk</div>
						</div>
						<img class="vector-1" src="vector.svg" alt="Vector" />
					</div>


</body>

</html>