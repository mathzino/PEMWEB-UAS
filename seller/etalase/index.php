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
	<title>Etalase</title>
	<link rel="stylesheet" type="text/css" href="style-etalase.css">
	<style>
		* {
			box-sizing: border-box;
		}

		html,
		body {
			margin: 0;
			padding: 0;
		}

		p,
		h1 {
			margin: 0;
		}
	</style>
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
					<img src="../assets/<?= $data['image_profile'] ?>" alt="Profil" style="height: 50px;min-width: 50px;object-fit: cover;position: relative;border-radius: 100%;" />
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
		<div style="background-color: #dbeafe;min-height: 100vh;width: 100%;">
			<div style="padding: .75rem;background-color: white;width: 100%;">
				<h1 style="font-weight: 500;margin-bottom: .75rem;">List Produk Toko</h1>
				<a href="../tambahbarang/" style="text-decoration: none;color: #000;">
					<div style="padding: .75rem 0;display: flex;justify-content: space-between;align-items: center;cursor: pointer;">
						<div style="display: flex;gap: .75rem;align-items: center;">
							<svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M14.66 0C18.06 0 20 2.112 20 5.863V16.137C20 19.866 18.07 22 14.67 22H5.33C1.92 22 0 19.866 0 16.137V5.863C0 2.112 1.92 0 5.33 0H14.66ZM9.99 6.061C9.53 6.061 9.16 6.468 9.16 6.974V10.076H6.33C6.11 10.076 5.9 10.175 5.74 10.34C5.59 10.516 5.5 10.7459 5.5 10.989C5.5 11.495 5.87 11.902 6.33 11.913H9.16V15.026C9.16 15.532 9.53 15.939 9.99 15.939C10.45 15.939 10.82 15.532 10.82 15.026V11.913H13.66C14.12 11.902 14.49 11.495 14.49 10.989C14.49 10.483 14.12 10.076 13.66 10.076H10.82V6.974C10.82 6.468 10.45 6.061 9.99 6.061Z" fill="#618D80" />
							</svg>
							<p>Tambah Produk</p>
						</div>
						<svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M0.764331 10L0 9.27007L4.50956 5L0 0.729927L0.764331 -4.76836e-07L6 5L0.764331 10Z" fill="black" />
						</svg>
					</div>
				</a>
				<div style="padding: .75rem 0;display: flex;justify-content: space-between;align-items: center;cursor: pointer;">
					<div style="display: flex;gap: .75rem;align-items: center;">
						<svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M2 0L0.1875 4.77976H7.09375L8 0H2ZM12 0L12.9062 4.77976H19.8125L18 0H12ZM0 5.40179V22H20V5.40179H13V12.5714L12 11.5238L11 12.5714L10 11.5238L9 12.5714L8 11.5238L7 12.5714V5.40179H0ZM3 15.7143H9C9.552 15.7143 10 16.1333 10 16.7619V18.8571C10 19.381 9.552 19.9048 9 19.9048H3C2.4475 19.9048 2 19.381 2 18.8571V16.7619C2 16.1333 2.4475 15.7143 3 15.7143ZM3 16.7619V18.8571H4V16.7619H3ZM5 16.7619V18.8571H9V16.7619H5Z" fill="#618D80" />
						</svg>
						<p>Semua Produk</p>
					</div>
					<div style="display: flex;align-items: center;gap: .75rem;">
						<span style="color: rgb(51 65 85);font-size: .75rem;font-weight: 500;">
							<?php
							$query_jumlah = "SELECT COUNT(product_id) AS total_produk FROM product";
							$result_jumlah = mysqli_query(connection(), $query_jumlah);
							$data_jumlah = mysqli_fetch_array($result_jumlah);
							echo $data_jumlah['total_produk'] ?>
						</span>
						<svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M0.764331 10L0 9.27007L4.50956 5L0 0.729927L0.764331 -4.76836e-07L6 5L0.764331 10Z" fill="black" />
						</svg>
					</div>
				</div>
				<?php
				$query_produk = "SELECT product.product_id, product.toko_id,product.name, product.price, product.qt, product.product_uom, product.product_category, product.image, product.description, toko.toko_id, toko.name AS toko_name, product_uom.id_product_uom, product_uom.uom FROM product JOIN toko ON product.toko_id=toko.toko_id JOIN product_uom ON product.product_uom=product_uom.id_product_uom WHERE product.toko_id = '$_SESSION[id_toko]'";
				$result_produk = mysqli_query(connection(), $query_produk);
				?>
				<?php while ($data_produk = mysqli_fetch_array($result_produk)) : ?>
					<div key="1" style="padding: 0 .75rem;border-bottom: 2px solid #0002;display: flex;justify-content: space-between;align-items: center;font-size: .75rem;padding-bottom: .25rem;color: rgb(30 41 59);">
						<p style="font-weight: 500;"><?= $data_produk['name'] ?></p>
						<span><?= $data_produk['qt'] ?> <?= $data_produk['uom'] ?> Tersisa</span>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>

</body>

</html>