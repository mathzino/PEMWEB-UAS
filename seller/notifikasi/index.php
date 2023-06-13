<?php
session_start();
include '../../conn.php';
if (!isset($_SESSION['id_toko'])) {
	header("Location: ../formulir-mitra");
} elseif (!isset($_SESSION['id'])) {
	header("Location: ../login");
}
$filter = isset($_GET['filter']) ? $_GET['filter'] : '';
$status = isset($_GET['status']) ? $_GET['status'] : '';
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
	<div class="etalase" style="border: 1px solid #0002;">
		<div class="frame-715">
			<div class="toko-kamu valign-text-middle">Toko Kamu</div>
			<a href="../setting">
				<img src="../assets/svg/settings.png" width="20" height="20" alt="setting" />
			</a>
		</div>

		<?php
		if ($status == 'dikonfirmasi') {
			echo "<script>alert('Pesanan berhasil dikonfirmasi')</script>";
		} elseif ($status == 'selesai') {
			echo "<script>alert('Kode Berhasil dimasukkan, Transaksi Selesai!')</script>";
		} elseif ($status == 'ditolak') {
			echo "<script>alert('Pesanan berhasil ditolak')</script>";
		} elseif ($status == 'err_konfirmasi') {
			echo "<script>alert('Pesanan gagal dikonfirmasi')</script>";
		} elseif ($status == 'err_kode') {
			echo "<script>alert('Kode yang anda masukkan salah')</script>";
		}
		?>

		<?php
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
		<div style="padding: 2rem;width: 100%;background-color: #dbeafe;min-height: 100vh;">
			<h1 class="tittle" style="margin: 0;padding: 0;">Notifikasi Anda</h1>
			<div class="frame-container-1">
				<div class="frame-8">
					<img class="vector" src="vector.svg" alt="vector">
					<div class="filter inter-normal-blueberry-8px">Filter</div>
				</div>
				<!-- FILTER -->
				<a href="<?= $filter == 'selesai' ? 'index.php' : 'index.php?filter=selesai' ?>" style="text-decoration: none;">
					<div style="padding: 0 .75rem;font-size: .875rem;border: 1px solid rgb(203 213 225);border-radius: 1.5rem;width: min-content;font-weight: 600;cursor: pointer;<?= $filter == 'selesai' ? 'background-color:#3b82f6;color:white' : 'color: #3B82F6;background-color:white' ?>">Selesai</div>
				</a>
				<!-- FILTER -->

			</div>
			<?php
			if ($filter == 'selesai') {
				$query_transaksi = "SELECT transaction.date,transaction.delivery_type, transaction.id_transaction,transaction.name,transaction.alamat, transaction.contact, transaction.status FROM transaction WHERE transaction.toko_id = '$_SESSION[id_toko]' AND transaction.status = 2 ORDER BY transaction.date DESC;";
			} else {
				$query_transaksi = "SELECT transaction.date,transaction.delivery_type, transaction.id_transaction,transaction.name,transaction.alamat, transaction.contact, transaction.status FROM transaction WHERE transaction.toko_id = '$_SESSION[id_toko]' AND transaction.status != 2 ORDER BY transaction.date DESC;";
			}
			$result_transaksi = mysqli_query(connection(), $query_transaksi);
			?>

			<!-- BELUM ADA TRANSAKSI -->
			<?php if (mysqli_num_rows($result_transaksi) == 0) : ?>
				<div style="display: flex;justify-content: center;align-items: center;padding: 3rem;">
					<p style="color: rgb(100 116 139);">Belum ada transaksi</p>
				</div>
			<?php endif; ?>
			<!-- BELUM ADA TRANSAKSI -->

			<?php while ($data_transaksi = mysqli_fetch_array($result_transaksi)) : ?>
				<!-- PESANAN -->
				<div style="position: relative;">
					<div style="margin: 1.5rem 0;border-radius: .75rem;box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);border: 1px solid rgb(221 225 229);background-color: white;display: flex;flex-direction: row;justify-content: flex-start;">
						<div style="padding: 1.5rem;color: #3B82F6;display: flex;flex-direction: column;gap: .5rem;width: 100%;">
							<div>
								<h1 style="font-size: 0.75rem;line-height: 1rem;font-weight: 300;">Waktu Pemesanan</h1>
								<p style="font-weight: bold;font-size: 0.75rem;line-height: 1rem">
									<?php
									$date = new DateTime($data_transaksi['date']);
									echo $date->format('d-m-Y H:i:s');
									?></p>
							</div>
							<div>
								<h1 style="font-size: 0.75rem;line-height: 1rem;font-weight: 300;">Kode Transaksi</h1>
								<p style="font-weight: bold;font-size: 0.75rem;line-height: 1rem"><?= $data_transaksi['id_transaction'] ?></p>
							</div>
							<div style="display: flex;gap: .75rem;flex-wrap: wrap;">
								<div>
									<h1 style="font-size: 0.75rem;line-height: 1rem;font-weight: 300;">Nama</h1>
									<p style="font-size: 0.875rem;line-height: 1.25rem;font-weight: bold;"><?= $data_transaksi['name'] ?></p>
								</div>
								<div>
									<h1 style="font-size: 0.75rem;line-height: 1rem;font-weight: 300;">No. WA</h1>
									<p style="font-size: 0.875rem;line-height: 1.25rem;font-weight: bold;"><?= $data_transaksi['contact'] ?></p>
								</div>
							</div>
							<div>
								<h1 style="font-size: 0.75rem;line-height: 1rem;font-weight: 300;">Nama Product</h1>
								<?php
								$query_detail_produk = "SELECT product.name as product_name, product.price, transaction_detail.qt FROM transaction_detail INNER JOIN product ON transaction_detail.id_product = product.product_id WHERE transaction_detail.id_transaction = '$data_transaksi[id_transaction]';";
								$result_detail_produk = mysqli_query(connection(), $query_detail_produk);
								$total = 0;
								?>
								<?php while ($data_detail_produk = mysqli_fetch_array($result_detail_produk)) : ?>
									<?php
									$total += $data_detail_produk['price'] * $data_detail_produk['qt'];
									?>
									<div key="1" style="display: flex;flex-direction: row;flex-wrap: wrap;justify-content: space-between;width: 100%;">
										<p style="margin-bottom: .25rem;font-weight: bold;font-size: 0.75rem;line-height: 1rem;"><?= $data_detail_produk['product_name'] ?></p>
										<p style="margin-bottom: .25rem;font-weight: bold;font-size: 0.75rem;line-height: 1rem;">
											x <?= $data_detail_produk['qt'] ?>
										</p>
									</div>
								<?php endwhile; ?>
							</div>
							<div>
								<h1 style="font-size: 0.75rem;line-height: 1rem;font-weight: 300;">Alamat</h1>
								<p style="font-weight: bold;font-size: 0.75rem;line-height: 1rem"><?= $data_transaksi['alamat'] ?></p>
							</div>
							<div>
								<h1 style="font-size: 0.75rem;line-height: 1rem;font-weight: 300;">Tipe Delivery</h1>
								<p style="font-weight: bold;font-size: 0.75rem;line-height: 1rem"><?= $data_transaksi['delivery_type'] ?></p>
							</div>
							<div>
								<h1 style="font-size: 0.875rem;line-height: 1.25rem;font-weight: 300;">Jumlah Pesanan</h1>
								<p className="mb-3 font-bold text-mygreen_dark text-2xl" style="margin-bottom: .75rem;font-weight: bold;color: #3B82F6;font-size: 1.5rem;line-height: 2rem;">
									Rp<?php
										echo number_format($total, 0, ',', '.');
										?>
								</p>
							</div>
						</div>
					</div>

					<!-- TERIMA & TOLAK -->
					<?php if ($data_transaksi['status'] == 0) : ?>
						<div className="flex gap-3 text-white font-semibold text-xs" style="display: flex;gap: .75rem;color: white;font-weight: 600;font-size: .75rem;">
							<form action="terima_pesanan.php" method="POST">
								<input type="hidden" name="id_transaksi" value="<?= $data_transaksi['id_transaction'] ?>">
								<button type="submit" style="border: none;color: white;background-color: #3B82F6;padding: .75rem 1.5rem;border-radius: .75rem;cursor: pointer;">
									Terima Pesanan
								</button>
							</form>

							<form action="tolak_pesanan.php" method="post">
								<input type="hidden" name="id_transaksi" value="<?= $data_transaksi['id_transaction'] ?>">
								<button type="submit" style="border:none;color:white;background-color: rgb(248 113 113);padding: .75rem 1.5rem;border-radius: .75rem;cursor: pointer;">
									Tolak Pesanan
								</button>
							</form>
						</div>
					<?php endif; ?>
					<!-- TERIMA & TOLAK -->

					<!-- PESANAN DITOLAK -->
					<?php if ($data_transaksi['status'] == 3) : ?>
						<div className="px-2 absolute -top-3 -right-3 flex items-center justify-center shadow-sm bg-red-400 text-white font-semibold rounded-xl text-sm" style="padding: 0 .5rem;position: absolute;top: -0.75rem;right: -0.75rem;display:flex;align-items: center;justify-content: center;box-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);background-color: rgb(248 113 113);color: white;font-weight: 600;border-radius: .75rem;font-size: 0.875rem;line-height: 1.25rem">
							Ditolak
						</div>
					<?php endif; ?>
					<!-- PESANAN DITOLAK -->

					<!-- MASUKKAN KODE -->
					<?php if ($data_transaksi['status'] == 1) : ?>
						<form action="" method="GET">
							<div style="color: white;text-align: center;font-weight: 600;font-size: .75rem;<?= isset($_GET['masukkan_kode']) ? 'display:none' : '' ?>">
								<input type="hidden" name="masukkan_kode" value="iya">
								<button type="submit" style="border: none;color: white;padding: .75rem 1.5rem;background-color: #3B82F6;border-radius: .75rem;cursor: pointer;">
									Klik Disini Untuk Memasukkan Kode
								</button>
							</div>
						</form>
					<?php endif; ?>
					<?php if (isset($_GET['masukkan_kode'])) : ?>
						<form action="verif_kode.php" method="POST">
							<div style="display: flex;flex-direction: column;gap: .75rem;">
								<input type="hidden" name="id_transaksi" value="<?= $data_transaksi['id_transaction'] ?>">
								<input type="hidden" name="total" value="<?= $total ?>">
								<input type="text" name="kode" placeholder="Masukkan Kode" style="border: 1px solid rgb(203 213 225);border-radius: .75rem;padding: .75rem 1.5rem;font-size: .875rem;line-height: 1.25rem;">
								<button type="submit" style="border: none;color: white;padding: .75rem 1.5rem;background-color: #3B82F6;border-radius: .75rem;cursor: pointer;">
									Kirim
								</button>
							</div>
						</form>
					<?php endif; ?>
					<!-- MASUKKAN KODE -->

					<!-- SELESAI -->
					<?php if ($data_transaksi['status'] == 2) : ?>
						<div style="padding: 0 .5rem;position: absolute;top: 0.75rem;right: 0.75rem;display: flex;align-items: center;justify-content: center;box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);background-color: #3B82F6;color: white;font-weight: 600;border-radius: .75rem;font-size: .875rem;">
							Selesai
						</div>
					<?php endif; ?>
					<!-- SELESAI -->

				</div>
				<!-- PESANAN -->
			<?php endwhile; ?>
		</div>
	</div>
</body>

</html>