<?php
session_start();
include '../../conn.php';
if (!isset($_SESSION['id_toko'])) {
    header("Location: ../formulir-mitra");
} elseif (!isset($_SESSION['id'])) {
    header("Location: ../login");
}
// print_r($_SESSION);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Seller</title>
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
</head>
<link rel="stylesheet" type="text/css" href="styles.css">

<body>


    <div class="etalase screen">
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
        <?php while ($data = mysqli_fetch_array($result)): ?>
            <div class="frame-714">
                <div class="frame-16">
                    <img src="../assets/<?= $data['image_profile'] ?>" alt="Profil"
                        style="height: 50px;min-width: 50px;object-fit: cover;position: relative;border-radius: 100%;" />
                    <div class="frame-15">
                        <div class="valign-text-middle" style="font-weight: bold;font-size: 1.25rem;">
                            <?= $data['name'] ?>
                        </div>
                        <div class="frame-701">
                            <div class="ellipse-11"></div>
                            <div class="online valign-text-middle">Online</div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        <div class="frame-container">
            <img class="frame" src="../assets/svg/product-active.svg" alt="Frame 716"
                style="border-bottom: 2px solid #3B82F6;" />
            <a href="../notifikasi/"><img class="frame" src="../assets/svg/notification.svg" alt="Frame 56"
                    style="border-bottom: 2px solid #0002;" /></a>
            <a href="../etalase/"><img class="frame" src="../assets/svg/catalog.svg" alt="Frame 57"
                    style="border-bottom: 2px solid #0002;" /></a>
            <a href="../penjualan/"><img class="frame-717" src="../assets/svg/stats.svg" alt="Frame 717"
                    style="border-bottom: 2px solid #0002;" /></a>
        </div>
        <div style="background-color: #DBEAFE;width: 100%;min-height: 100vh;padding: .75rem;">
            <div className="hover:cursor-pointer hover:scale-95"
                style="padding: .75rem;background-color: white;border-radius: .75rem;border: 2px solid #3B82F633;border-style: dashed;">
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
            <?php if (mysqli_num_rows($result_produk) == 0): ?>
                <div
                    style="padding: 4rem;margin: 1.5rem 0;border-radius: .75rem;text-align: center;display: flex;justify-content: center;align-items: center;background-color: white;">
                    <p style="font-size: .75rem;color: #3B82F6;">
                        Mulai tambahkan jualan untuk menampilkan produk anda!
                    </p>
                </div>
            <?php endif; ?>
            <div
                style="display: grid;grid-template-columns: repeat(2, minmax(0, 1fr));gap: 1.5rem;background-color: white;margin: .75rem 0;padding: .75rem;border-radius: .75rem;">
                <?php while ($data_produk = mysqli_fetch_array($result_produk)): ?>
                    <div
                        style="border-radius: .75rem;box-shadow: 0 10px 15px rgb(100 116 139 / 0.1);background-color: white;width: 10rem;cursor: pointer;">
                        <a href="../edit/?product_id=<?= $data_produk['product_id'] ?>" style="text-decoration: none;">
                            <div key="1"
                                style="width: 100%;height: 10rem;display: flex;justify-content: center;background-color: rgb(226 232 240);border-radius: .75rem;">
                                <img src="../../assets/produk/<?= $data_produk['image'] ?>" width="200" height="200"
                                    priority style="object-fit: cover;height: 10rem;width: auto;border-radius: .75rem;"
                                    alt="foto-produk" />
                            </div>
                            <div style="padding: .75rem;">
                                <h1 style="margin-bottom: .25rem;font-weight: 400;color: #3B82F6;font-size: 1.5rem;">
                                    <?= $data_produk['name'] ?>
                                </h1>
                                <p
                                    style="margin-bottom: .75rem;font-weight: bold;color: #3B82F6;font-size: 1.25rem;line-height: 1.75rem;">
                                    <?= $data_produk['price'] ?>/
                                    <?= $data_produk['uom'] ?>
                                </p>
                                <div style="margin-bottom: .75rem;display: flex;">
                                    <?php
                                    $query_star = "SELECT * FROM star WHERE id_product = '$data_produk[product_id]'";
                                    $result_star = mysqli_query(connection(), $query_star);
                                    $total_star = 0;
                                    $star_count = 0;
                                    $average_star = 0;
                                    foreach ($result_star as $star) {
                                        $star_count++;
                                        $total_star += $star['star'];
                                    }
                                    if ($star_count != 0) {
                                        $average_star = $total_star / $star_count;
                                    }

                                    $i = 0;
                                    for ($i; $i < floor($average_star); $i++): ?>
                                        <svg width="16" height="16" viewBox="0 0 10 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.08104 2.848L6.54204 2.479L5.40704 0.178004C5.37604 0.115004 5.32504 0.0640037 5.26204 0.0330037C5.10404 -0.0449963 4.91204 0.0200037 4.83304 0.178004L3.69804 2.479L1.15904 2.848C1.08904 2.858 1.02504 2.891 0.976038 2.941C0.9168 3.00189 0.884157 3.0838 0.885282 3.16875C0.886407 3.25369 0.921208 3.33471 0.982038 3.394L2.81904 5.185L2.38504 7.714C2.37486 7.77283 2.38137 7.83334 2.40383 7.88866C2.42629 7.94398 2.4638 7.99189 2.51211 8.02698C2.56041 8.06206 2.61759 8.08291 2.67714 8.08716C2.73669 8.0914 2.79624 8.07888 2.84904 8.051L5.12004 6.857L7.39104 8.051C7.45304 8.084 7.52504 8.095 7.59404 8.083C7.76804 8.053 7.88504 7.888 7.85504 7.714L7.42104 5.185L9.25804 3.394C9.30804 3.345 9.34104 3.281 9.35104 3.211C9.37804 3.036 9.25604 2.874 9.08104 2.848Z"
                                                fill="#FFD600" />
                                        </svg>
                                    <?php endfor; ?>
                                    <?php if ($star_count == 0): ?>
                                        <p style="font-size: 0.75rem;line-height: 1rem;font-weight: 400;color: #3B82F6;">
                                            No Review Yet.
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <div style="display: flex;gap: .25rem;align-items: center;">
                                    <svg width="12" height="10" viewBox="0 0 12 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.25 3.24501L10.5 0.995012C10.4739 0.917394 10.4232 0.85045 10.3554 0.804405C10.2877 0.758359 10.2068 0.735744 10.125 0.740012H1.87502C1.79325 0.735744 1.71232 0.758359 1.64461 0.804405C1.5769 0.85045 1.52612 0.917394 1.50002 0.995012L0.750024 3.24501C0.744621 3.28483 0.744621 3.32519 0.750024 3.36501V5.61501C0.750024 5.71447 0.789532 5.80985 0.859859 5.88018C0.930185 5.9505 1.02557 5.99001 1.12502 5.99001H1.50002V9.74001H2.25002V5.99001H4.50002V9.74001H10.5V5.99001H10.875C10.9745 5.99001 11.0699 5.9505 11.1402 5.88018C11.2105 5.80985 11.25 5.71447 11.25 5.61501V3.36501C11.2554 3.32519 11.2554 3.28483 11.25 3.24501ZM9.75002 8.99001H5.25002V5.99001H9.75002V8.99001ZM10.5 5.24001H9.00002V3.74001H8.25002V5.24001H6.37502V3.74001H5.62502V5.24001H3.75002V3.74001H3.00002V5.24001H1.50002V3.42501L2.14502 1.49001H9.85502L10.5 3.42501V5.24001Z"
                                            fill="#3B82F6" />
                                    </svg>
                                    <p style="color: #3B82F6;font-size: 0.75rem;line-height: 1rem">
                                        <?= $data_produk['toko_name'] ?>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</body>

</html>