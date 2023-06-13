<?php







include "../conn.php";


if (!isset($_GET["id"]))
    header("Location: index.php");

$productId = $_GET['id'];

$productQuery = "SELECT toko.toko_id,product.description,product.product_id,product.name,product.price,product.product_uom,product.product_category as category,product.image, toko.name AS storeName,product_uom.uom 
FROM product
JOIN toko ON toko.toko_id=product.toko_id
JOIN product_uom on product_uom.id_product_uom=product.product_uom
where product.product_id=" . $productId . " LIMIT 1 ";

$productArr = mysqli_query(connection(), $productQuery);

if ($productArr->num_rows > 0) {
    $product = $productArr->fetch_assoc();
} else {
    header("Location: index.php");
}







?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
        }

        p {
            margin: 0;
        }
    </style>
</head>

<body>
    <div style="display: flex;justify-content: center;">
        <div style="width: 100vw;max-width: 28rem;height: 100vh;background-color: #618D80;">
            <!-- SWIPER -->
            <div style="position: relative;">
                <!-- 2 ABSOLUTE CIRCLE -->
                <div
                    style="color: white;z-index: 20;background-color: #0005;width: 100%;max-width: 28rem;padding: .5rem 1rem;position: fixed;">
                    <div style="display: flex;gap: .5rem;justify-content: space-between;">
                        <div style="display: flex;align-items: center;gap: .5rem;">
                            <a href="./index.php">
                                <svg width="20" height="13" viewBox="0 0 20 13" fill="#fff"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.0023e-09 6.50258C0.00167844 6.72498 0.0871314 6.93803 0.238333 7.09676L0.243333 7.10707L5.24333 12.259C5.4005 12.4154 5.611 12.5019 5.8295 12.5C6.048 12.498 6.25701 12.4077 6.41152 12.2485C6.56602 12.0893 6.65366 11.8739 6.65556 11.6488C6.65746 11.4237 6.57347 11.2068 6.42167 11.0448L2.845 7.35779H19.1667C19.3877 7.35779 19.5996 7.26733 19.7559 7.1063C19.9122 6.94527 20 6.72687 20 6.49914C20 6.27141 19.9122 6.05301 19.7559 5.89198C19.5996 5.73096 19.3877 5.64049 19.1667 5.64049H2.845L6.42167 1.95516C6.57347 1.79322 6.65746 1.57632 6.65556 1.35119C6.65366 1.12605 6.56602 0.910693 6.41152 0.751493C6.25701 0.592292 6.048 0.501989 5.8295 0.500032C5.611 0.498076 5.4005 0.584623 5.24333 0.741033L0.243333 5.89293L0.238333 5.90152C0.164147 5.97897 0.105278 6.07054 0.0650001 6.17114C0.0221002 6.27484 -9.40675e-06 6.38641 3.0023e-09 6.49914V6.50258Z"
                                        fill="#fff" />
                                </svg>
                            </a>
                        </div>

                        <!-- <SettingCircle /> -->
                    </div>
                </div>

                <!-- SWIPER COMP -->
                <div style="width: 100%;height: 400px;">
                    <img width="300" height="300" priority alt="produk"
                        src='../assets/produk/<?php echo $product['image'] ?>'
                        style="width: 100%;height: 100%;object-fit: cover;" />
                </div>
            </div>
            <!-- DETAIL PRODUK-->
            <div style="position: relative;bottom: 5rem;z-index: 10;flex-direction: column;">
                <div style="background-color: white;width: 100%;height: 100vh;border-radius: 40px;position: relative;">
                    <div className="lg:h-[300px]" style="padding: 1.25rem 1.75rem 0 1.75rem;flex-direction: column;">
                        <!-- DETAIL -->
                        <div>

                            <!-- TOKO -->
                            <div style="display: flex;align-items: center;">
                                <span style="margin-right: .25rem;flex-shrink: 0;">
                                    <svg width="16" height="16" viewBox="0 0 12 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.25 3.24501L10.5 0.995012C10.4739 0.917394 10.4232 0.85045 10.3554 0.804405C10.2877 0.758359 10.2068 0.735744 10.125 0.740012H1.87502C1.79325 0.735744 1.71232 0.758359 1.64461 0.804405C1.5769 0.85045 1.52612 0.917394 1.50002 0.995012L0.750024 3.24501C0.744621 3.28483 0.744621 3.32519 0.750024 3.36501V5.61501C0.750024 5.71447 0.789532 5.80985 0.859859 5.88018C0.930185 5.9505 1.02557 5.99001 1.12502 5.99001H1.50002V9.74001H2.25002V5.99001H4.50002V9.74001H10.5V5.99001H10.875C10.9745 5.99001 11.0699 5.9505 11.1402 5.88018C11.2105 5.80985 11.25 5.71447 11.25 5.61501V3.36501C11.2554 3.32519 11.2554 3.28483 11.25 3.24501ZM9.75002 8.99001H5.25002V5.99001H9.75002V8.99001ZM10.5 5.24001H9.00002V3.74001H8.25002V5.24001H6.37502V3.74001H5.62502V5.24001H3.75002V3.74001H3.00002V5.24001H1.50002V3.42501L2.14502 1.49001H9.85502L10.5 3.42501V5.24001Z"
                                            fill="#3B82F6" />
                                    </svg>
                                </span>
                                <p style="color: #474747;font-size: 1rem;line-height: 1.5rem;">
                                    <?php echo $product['storeName'] ?>
                                </p>
                            </div>
                            <!-- TOKO -->
                            <div>
                                <p
                                    style="font-size: 2rem;line-height: 2.5rem;color: #474747;margin-top: .5rem;font-weight: bold;">
                                    <?php echo $product['name'] ?>
                                </p>
                                <!-- RATING -->
                                <div style="display: flex;gap: .25rem;margin-top: .5rem;">
                                    <?php $i = 0;
                                    $query_star = "SELECT * FROM star WHERE id_product = '$product[product_id]'";
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


                                    for ($i; $i < $average_star; $i++): ?>
                                        <svg width="10" height="9" viewBox="0 0 10 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.08104 2.848L6.54204 2.479L5.40704 0.178004C5.37604 0.115004 5.32504 0.0640037 5.26204 0.0330037C5.10404 -0.0449963 4.91204 0.0200037 4.83304 0.178004L3.69804 2.479L1.15904 2.848C1.08904 2.858 1.02504 2.891 0.976038 2.941C0.9168 3.00189 0.884157 3.0838 0.885282 3.16875C0.886407 3.25369 0.921208 3.33471 0.982038 3.394L2.81904 5.185L2.38504 7.714C2.37486 7.77283 2.38137 7.83334 2.40383 7.88866C2.42629 7.94398 2.4638 7.99189 2.51211 8.02698C2.56041 8.06206 2.61759 8.08291 2.67714 8.08716C2.73669 8.0914 2.79624 8.07888 2.84904 8.051L5.12004 6.857L7.39104 8.051C7.45304 8.084 7.52504 8.095 7.59404 8.083C7.76804 8.053 7.88504 7.888 7.85504 7.714L7.42104 5.185L9.25804 3.394C9.30804 3.345 9.34104 3.281 9.35104 3.211C9.37804 3.036 9.25604 2.874 9.08104 2.848Z"
                                                fill="#FFD600" />
                                        </svg>
                                    <?php endfor; ?>

                                    <?php if ($average_star < 1)
                                        echo "  <p style='color:blue ;font-size: 10px'>No review yet</p>" ?>
                                    </div>
                                    <!-- RATING -->

                                    <!-- HARGA -->
                                    <p
                                        style="font-size: 1rem;line-height: 1.5rem;font-weight: bold;color: #292929;margin-top: 1rem;">
                                        Rp.
                                    <?php echo " " . $product['price'] . " / " . $product['uom'] ?>
                                </p>
                                <!-- HARGA -->
                            </div>

                            <div style="margin-top: 1rem;">
                                <p style="color: #474747;">
                                    <?php echo $product['description'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- CHECKOUT COMP -->
                    <div style="position: fixed;bottom: 0;max-width: 28rem;width: 100%;">
                        <div>
                            <!-- TAMBAH / KURANG TOTAL -->
                            <div>
                                <div
                                    style="display: flex;justify-content: flex-end;height: 2.75rem;align-items: center;background-color: #fffe;border-top: 2px solid #0001;padding-top: .5rem;">
                                    <div id="incrementButton"
                                        style="cursor: pointer;width: 2.5rem;display: flex;justify-content: center;align-items: center;font-size: 1.125rem;line-height: 1.75rem;font-weight: bold;height: 100%;color: #618D80;">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 7V15M7 11H15M21 11C21 16.5228 16.5228 21 11 21C5.47715 21 1 16.5228 1 11C1 5.47715 5.47715 1 11 1C16.5228 1 21 5.47715 21 11Z"
                                                stroke="#3B82F6" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                    </div>
                                    <input
                                        style="cursor: default;border: 1px solid #000;border-radius: .75rem;padding: 0rem 2rem; display: flex;justify-content: center;align-items: center;font-size: 1.125rem;line-height: 1.75rem;color: #000;font-weight: bold; width:fit-content"
                                        type="number" max="100" value=1 id="counter" />

                                    </input>
                                    <p style="margin-left: 1rem;font-weight: bold;">
                                        <?php echo $product['uom'] ?>
                                    </p>
                                    <div id="decrementButton"
                                        style="cursor: pointer;width: 2.5rem;display: flex;justify-content: center;align-items: center;font-size: 1.125rem;line-height: 1.75rem;font-weight: bold;height: 100%;color: #618D80;">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7 11H15M21 11C21 16.5228 16.5228 21 11 21C5.47715 21 1 16.5228 1 11C1 5.47715 5.47715 1 11 1C16.5228 1 21 5.47715 21 11Z"
                                                stroke="#3B82F6" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                    </div>
                                </div>
                            </div>
                            <!-- TAMBAH / KURANG TOTAL -->

                            <!-- BELI -->
                            <div>
                                <div
                                    style="background-color: #fff;display: flex;font-size: 1.5rem;line-height: 2rem;color: white;font-weight: bold;justify-content: space-between;">

                                    <div
                                        style="width: 12rem;padding: .5rem 1.75rem;flex-grow: 0;flex-shrink: 0;color: #3B82F6;">
                                        <p style="font-size: 14px;color: #000;">total</p>
                                        <p id="totalPrice">0</p>
                                        <input id="priceProduct" type="number" hidden value=<?php echo $product['price'] ?>>
                                    </div>
                                    <div style="display: flex;">
                                        <div
                                            style="padding: 1rem 0;background-color: #fff;flex-grow: 1;display: flex;justify-content: center;">
                                            <form method="POST" action="index.php">
                                                <input type="text" hidden name="id_product" value=<?php echo $product['product_id'] ?>>
                                                <input type="text" hidden name="qt" id="qtForm" value=1>
                                                <input type="text" hidden name="price" value=<?php echo $product['price'] ?>>
                                                <input type="text" hidden name="toko_id" value=<?php echo $product["toko_id"] ?>>
                                                <input type="text" hidden name="buy" value=true>
                                                <button type="submit"
                                                    style="border: none;border-radius: 1rem; background-color: #3B82F6;color: white;font-size: 1.5rem;line-height: 2rem;font-weight: bold;padding: 0 2rem;">Beli</button>
                                            </form>
                                        </div>
                                        <!-- {/* */} -->
                                        <div
                                            style="padding: .5rem 0;background-color: white;width: 5rem;display: flex;justify-content: center;">
                                            <button onClick="handleSaveCart"
                                                style="border: none;background-color: transparent;">
                                                <div
                                                    style="border: 1px solid #3B82F6;padding: .5rem;width: fit-content;border-radius: 1rem;padding: .75rem .75rem; display: flex;align-items: center;justify-content: center;background-color: #3B82F6;">
                                                    <svg width="21" height="21" viewBox="0 0 15 17" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M2.05163 6.88587C2.08017 6.53023 2.24162 6.1984 2.50382 5.95645C2.76602 5.7145 3.10973 5.58019 3.4665 5.58026H12.0225C12.3792 5.58019 12.723 5.7145 12.9852 5.95645C13.2474 6.1984 13.4088 6.53023 13.4374 6.88587L14.0071 13.9815C14.0228 14.1768 13.9979 14.3732 13.9339 14.5584C13.87 14.7435 13.7684 14.9135 13.6355 15.0574C13.5027 15.2014 13.3415 15.3163 13.1621 15.3949C12.9826 15.4735 12.7889 15.5142 12.593 15.5142H2.89601C2.70012 15.5142 2.50635 15.4735 2.32692 15.3949C2.14749 15.3163 1.98628 15.2014 1.85344 15.0574C1.7206 14.9135 1.619 14.7435 1.55505 14.5584C1.4911 14.3732 1.46617 14.1768 1.48184 13.9815L2.05163 6.88587V6.88587Z"
                                                            stroke="#fff" strokeWidth="2" strokeLinecap="round"
                                                            strokeLinejoin="round" />
                                                        <path
                                                            d="M10.5828 7.70896V4.16112C10.5828 3.40836 10.2838 2.68644 9.75148 2.15416C9.2192 1.62188 8.49728 1.32285 7.74452 1.32285C6.99177 1.32285 6.26984 1.62188 5.73756 2.15416C5.20528 2.68644 4.90625 3.40836 4.90625 4.16112V7.70896"
                                                            stroke="#fff" strokeWidth="2" strokeLinecap="round"
                                                            strokeLinejoin="round" />
                                                    </svg>
                                                </div>
                                            </button>
                                        </div>
                                        <!-- {/* */} -->
                                    </div>
                                </div>
                            </div>
                            <!-- BELI -->
                        </div>
                    </div>
                    <!-- CHECKOUT COMP -->
                </div>
            </div>
        </div>
    </div>
    <script>
        var incrementBtn = document.getElementById("incrementButton");
        var decrementBtn = document.getElementById("decrementButton");
        var totalPriceEl = document.getElementById("totalPrice");
        var priceProductEl = document.getElementById("priceProduct")
        var qtForm = document.getElementById("qtForm");
        var priceProduct = priceProductEl.value
        totalPrice.textContent = priceProduct
        var counter = document.getElementById("counter");

        // Initialize the counter value

        // Function to increment the counter


        // Add event listeners to the buttons
        incrementBtn.addEventListener("click", increment);
        decrementBtn.addEventListener("click", decrement);


        // menghitung total pembelian barang




        function increment() {
            var valueCount = counter.value;
            valueCount++;
            counter.value = valueCount;
            qtForm.value = valueCount;
            var priceTotal = valueCount * priceProduct;
            totalPriceEl.textContent = priceTotal;

        }

        // Function to decrement the counter
        function decrement() {
            var valueCount = counter.value;
            if (valueCount > 1) {
                valueCount--;
                counter.value = valueCount;
                qtForm.value = valueCount;
                var priceTotal = valueCount * priceProduct;
                totalPriceEl.textContent = priceTotal;
            }
        }



    </script>
</body>

</html>