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
<link rel="stylesheet" type="text/css" href="styles.css">

<body>

    <div class="etalase screen">
        <div class="frame-715">
            <div class="toko-kamu valign-text-middle">Toko Kamu</div>
            <img class="settings" src="settings.png" alt="setting" />
        </div>
        <?php
        //proses menampilkan data dari database:
        //siapkan query SQL
        $query = "SELECT * FROM toko WHERE owner = '$_SESSION[id]'";
        $result = mysqli_query(connection(), $query);
        ?>
        <?php while ($data = mysqli_fetch_array($result)) : ?>
            <div class="frame-714">
                <div class="frame-16 foto-profil">
                    <img src="../assets/<?= $data['image_profile'] ?>" alt="Profil" />
                    <div class="frame-15">
                        <div class="rico-putera-anugrah valign-text-middle"><?= $data['name'] ?></div>
                        <div class="frame-701">
                            <div class="ellipse-11"></div>
                            <div class="online valign-text-middle">Online</div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        <div class="frame-container">
            <img class="frame" src="./product-active.svg" alt="Frame 716" style="border-bottom: 2px solid #3B82F6;" />
            <a href="../notifikasi/"><img class="frame" src="./notification.svg" alt="Frame 56" style="border-bottom: 2px solid #0002;" /></a>
            <a href="../etalase/"><img class="frame" src="./catalog.svg" alt="Frame 57" style="border-bottom: 2px solid #0002;" /></a>
            <a href="../penjualan/"><img class="frame-717" src="./stats.svg" alt="Frame 717" style="border-bottom: 2px solid #0002;" /></a>
        </div>
        <div style="background-color: #DBEAFE;width: 100%;min-height: 100vh;padding: .75rem;">
            <div className="hover:cursor-pointer hover:scale-95" style="padding: .75rem;background-color: white;border-radius: .75rem;border: 2px solid #3B82F633;border-style: dashed;">
                <a href=" ../tambahbarang/" style="text-decoration: none;color: #3B82F666;">
                    <div style="display: flex;justify-content: center;align-items: center;gap: .75rem;">
                        <p>Tambah Jualan anda</p>
                        <img class="group-56" src="group-56@2x.png" alt="grup 56">
                    </div>
                </a>
            </div>
            <?php
            //proses menampilkan data dari database:
            //siapkan query SQL
            $query_produk = "SELECT product.product_id, product.toko_id,product.name, product.price, product.qt, product.product_uom, product.product_category, product.image, product.description, toko.toko_id, toko.name AS toko_name, product_uom.id_product_uom, product_uom.uom FROM product JOIN toko ON product.toko_id=toko.toko_id JOIN product_uom ON product.product_uom=product_uom.id_product_uom WHERE product.toko_id = '$_SESSION[id_toko]'";
            $result_produk = mysqli_query(connection(), $query_produk);
            ?>
            <?php if (mysqli_num_rows($result_produk) == 0) : ?>
                <div style="padding: 4rem;margin: 1.5rem 0;border-radius: .75rem;text-align: center;display: flex;justify-content: center;align-items: center;background-color: white;">
                    <p className="text-sm text-mygreen_dark" style="font-size: .75rem;color: #3B82F6;">
                        Mulai tambahkan jualan untuk menampilkan produk anda!
                    </p>
                </div>
            <?php endif; ?>
            <div style="display: grid;grid-template-columns: repeat(2, minmax(0, 1fr));gap: 1.5rem;background-color: white;margin: .75rem 0;padding: .75rem;border-radius: .75rem;">
                <?php while ($data_produk = mysqli_fetch_array($result_produk)) : ?>
                    <div style="border-radius: .75rem;box-shadow: 0 10px 15px rgb(100 116 139 / 0.1);background-color: white;width: 10rem;cursor: pointer;">
                        <a href="#">
                            <div key="1" className="w-full h-40 flex justify-center bg-slate-200 rounded-xl">
                                <img src="<?= $data_produk['image'] ?>" width="200" height="200" priority className="object-contain h-40 w-auto rounded-xl" alt="foto-produk" />
                            </div>
                            <div className="p-3">
                                <h1 className="mb-1 font-light text-mygreen_dark text-md"><?= $data_produk['name'] ?></h1>
                                <p className="mb-3 font-bold text-mygreen_dark text-xl">
                                    <?= $data_produk['price'] ?>/<?= $data_produk['uom'] ?>
                                </p>
                                <div className="mb-3 flex">
                                    <!-- <>
                                        <p className="text-xs mr-1 text-mygreen_dark">{star}</p>
                                        <Image src="/icons/star.svg" width={15} height={14} key={id} alt={`star-${id}`}></Image>
                                    </> -->
                                    <p className="text-xs font-light text-mygreen_dark">
                                        No Review Yet.
                                    </p>
                                </div>
                                <div className="flex gap-2 items-end">
                                    <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.25 3.24501L10.5 0.995012C10.4739 0.917394 10.4232 0.85045 10.3554 0.804405C10.2877 0.758359 10.2068 0.735744 10.125 0.740012H1.87502C1.79325 0.735744 1.71232 0.758359 1.64461 0.804405C1.5769 0.85045 1.52612 0.917394 1.50002 0.995012L0.750024 3.24501C0.744621 3.28483 0.744621 3.32519 0.750024 3.36501V5.61501C0.750024 5.71447 0.789532 5.80985 0.859859 5.88018C0.930185 5.9505 1.02557 5.99001 1.12502 5.99001H1.50002V9.74001H2.25002V5.99001H4.50002V9.74001H10.5V5.99001H10.875C10.9745 5.99001 11.0699 5.9505 11.1402 5.88018C11.2105 5.80985 11.25 5.71447 11.25 5.61501V3.36501C11.2554 3.32519 11.2554 3.28483 11.25 3.24501ZM9.75002 8.99001H5.25002V5.99001H9.75002V8.99001ZM10.5 5.24001H9.00002V3.74001H8.25002V5.24001H6.37502V3.74001H5.62502V5.24001H3.75002V3.74001H3.00002V5.24001H1.50002V3.42501L2.14502 1.49001H9.85502L10.5 3.42501V5.24001Z" fill="#3B82F6" />
                                    </svg>
                                    <p className="font-normal text-mygreen_dark text-xs"><?= $data_produk['toko_name'] ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
    </div>
</body>

</html>