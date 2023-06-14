<?php

include "../conn.php";
session_start();

if (isset($_GET["id_transaction"])) {

  $id_transaction = $_GET['id_transaction'];
  $getShopQuery = "SELECT transaction.id_transaction, toko.name as store_name FROM transaction JOIN toko ON transaction.toko_id = toko.toko_id WHERE id_transaction = '$id_transaction'";
  $getShopInformation = mysqli_query(connection(), $getShopQuery);
  $shopInformation = $getShopInformation->fetch_assoc();
}
$status = isset($_GET['status']) ? $_GET['status'] : '';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rating</title>
  </head>
  <body>
    <style>
      * {
        margin: 0px;
        box-sizing: border-box;
      }
      a {
        display: block;
        border-radius: 0.25rem;
        color: #000000;
      }
    </style>
    <div style="display: flex; justify-content: center">
      <div style="width: 100vw; max-width: 28rem; background-color: #dbeafe; position: relative; border: 1px solid #adcec4 #cfcfcf">
        <div style="padding-left: 1.25rem; padding-right: 1.25rem; color: #dbeafe; padding-top: 0.5rem; padding-bottom: 0.5rem; font-weight: bold; display: flex; gap: 0.5rem; align-items: center">
          <a href="../buyer">
            <svg width="20" height="13" viewBox="0 0 20 13" fill="#DBEAFE" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M3.0023e-09 6.50258C0.00167844 6.72498 0.0871314 6.93803 0.238333 7.09676L0.243333 7.10707L5.24333 12.259C5.4005 12.4154 5.611 12.5019 5.8295 12.5C6.048 12.498 6.25701 12.4077 6.41152 12.2485C6.56602 12.0893 6.65366 11.8739 6.65556 11.6488C6.65746 11.4237 6.57347 11.2068 6.42167 11.0448L2.845 7.35779H19.1667C19.3877 7.35779 19.5996 7.26733 19.7559 7.1063C19.9122 6.94527 20 6.72687 20 6.49914C20 6.27141 19.9122 6.05301 19.7559 5.89198C19.5996 5.73096 19.3877 5.64049 19.1667 5.64049H2.845L6.42167 1.95516C6.57347 1.79322 6.65746 1.57632 6.65556 1.35119C6.65366 1.12605 6.56602 0.910693 6.41152 0.751493C6.25701 0.592292 6.048 0.501989 5.8295 0.500032C5.611 0.498076 5.4005 0.584623 5.24333 0.741033L0.243333 5.89293L0.238333 5.90152C0.164147 5.97897 0.105278 6.07054 0.0650001 6.17114C0.0221002 6.27484 -9.40675e-06 6.38641 3.0023e-09 6.49914V6.50258Z"
                fill="#3b82f6"
              />
            </svg>
          </a>
        </div>
        <!-- {/* notif dll */} -->
        <div className="px-5 py-4" style="padding-left: 1.25rem; padding-right: 1.25rem; padding-top: 1rem; padding-bottom: 1rem">
          <!--seler section   -->
          <div>
            <p style="font-family: 'Inter'; font-style: normal; font-weight: 400; font-size: 14px; line-height: 126.02%; color: #7b7b7b">Anda Ingin Menjual?</p>
            <div style="margin-top: 0.5rem">
              <div style="display: flex; justify-content: space-between">
                <div style="width: 6rem; height: 1.75rem; background-color: #dbeafe; border-radius: 1.125rem">
                  <a href="../seller/login" style="text-decoration:none;background: #3b82f6; padding: 16px 6px; text-align: center; border-radius: 24px">
                    <p style="font-family: 'Inter'; font-style: normal; font-weight: 700; font-size: 12px; line-height: 126.02%; color: white; text-decoration: none">Klik disini</p>
                  </a>
                </div>
                <div style="display: flex; gap: 0.5rem">
                  <!--  -->
                  <a href="./cart.php">
                  <div
                    style="border: 1px solid #3b82f6; padding: 0.5rem; width: fit-content; border-radius: 100%; display: flex; align-items: center; justify-content: center; position: relative">
                    <?php
                    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                      ?>
                                          <div style="
                          height: 1.25rem;
                          width: 1.25rem;
                          padding: 0.1rem;
                          background-color: #fb7777;
                          border-radius: 100%;
                          position: absolute;
                          right: -5px;
                          top: -5px;
                          font-size: 8px;
                          text-align: center;
                          color: white;
                          display: flex;
                          align-items: center;
                          text-align: center;
                          justify-content: center;
                        ">

              <?php
              echo count($_SESSION['cart']); ?>
            </div>
            <?php

                    } ?>
                    <svg width="17" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M2.05163 6.88587C2.08017 6.53023 2.24162 6.1984 2.50382 5.95645C2.76602 5.7145 3.10973 5.58019 3.4665 5.58026H12.0225C12.3792 5.58019 12.723 5.7145 12.9852 5.95645C13.2474 6.1984 13.4088 6.53023 13.4374 6.88587L14.0071 13.9815C14.0228 14.1768 13.9979 14.3732 13.9339 14.5584C13.87 14.7435 13.7684 14.9135 13.6355 15.0574C13.5027 15.2014 13.3415 15.3163 13.1621 15.3949C12.9826 15.4735 12.7889 15.5142 12.593 15.5142H2.89601C2.70012 15.5142 2.50635 15.4735 2.32692 15.3949C2.14749 15.3163 1.98628 15.2014 1.85344 15.0574C1.7206 14.9135 1.619 14.7435 1.55505 14.5584C1.4911 14.3732 1.46617 14.1768 1.48184 13.9815L2.05163 6.88587V6.88587Z"
                        stroke="#3B82F6" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round" />
                      <path
                        d="M10.5828 7.70896V4.16112C10.5828 3.40836 10.2838 2.68644 9.75148 2.15416C9.2192 1.62188 8.49728 1.32285 7.74452 1.32285C6.99177 1.32285 6.26984 1.62188 5.73756 2.15416C5.20528 2.68644 4.90625 3.40836 4.90625 4.16112V7.70896"
                        stroke="#3B82F6" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round" />
                    </svg>
                  </div>
                </a>
                <a href="./notify.php">
                  <div
                    style="border: 1px solid #3b82f6; height: 2.25rem; width: 2.25rem; border-radius: 100%; display: flex; align-items: center; justify-content: center; position: relative">
                    <?php
                    if (isset($_SESSION['notif']) && count($_SESSION['notif']) > 0) {
                      ?>
                            <div style="
                          height: 1.25rem;
                          width: 1.25rem;
                          padding: 0.1rem;
                          background-color: #fb7777;
                          border-radius: 100%;
                          position: absolute;
                          right: -5px;
                          top: -5px;
                          font-size: 8px;
                          text-align: center;
                          color: white;
                          display: flex;
                          align-items: center;
                          text-align: center;
                          justify-content: center;
                        ">

                        <?php
                        echo count($_SESSION['notif']); ?>
                      </div>
                      <?php

                    } ?>
                    <svg width="15" height="19" viewBox="0 0 15 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M13.7344 14.75H13.2422V7.77734C13.2422 4.88369 11.1032 2.49248 8.32031 2.09463V1.29688C8.32031 0.843652 7.95322 0.476562 7.5 0.476562C7.04678 0.476562 6.67969 0.843652 6.67969 1.29688V2.09463C3.89678 2.49248 1.75781 4.88369 1.75781 7.77734V14.75H1.26562C0.902637 14.75 0.609375 15.0433 0.609375 15.4062V16.0625C0.609375 16.1527 0.683203 16.2266 0.773438 16.2266H5.20312C5.20312 17.4939 6.23262 18.5234 7.5 18.5234C8.76738 18.5234 9.79688 17.4939 9.79688 16.2266H14.2266C14.3168 16.2266 14.3906 16.1527 14.3906 16.0625V15.4062C14.3906 15.0433 14.0974 14.75 13.7344 14.75ZM7.5 17.2109C6.95654 17.2109 6.51562 16.77 6.51562 16.2266H8.48438C8.48438 16.77 8.04346 17.2109 7.5 17.2109ZM3.23438 14.75V7.77734C3.23438 6.63711 3.67734 5.5666 4.4833 4.76064C5.28926 3.95469 6.35977 3.51172 7.5 3.51172C8.64023 3.51172 9.71074 3.95469 10.5167 4.76064C11.3227 5.5666 11.7656 6.63711 11.7656 7.77734V14.75H3.23438Z"
                        fill="#3B82F6" />
                    </svg>
                  </div>
                </a>
             
                  <!--  -->
                </div>
              </div>
              <div></div>
            </div>
          </div>
        </div>

        <div className="mt-4" style="margin-top: 1rem">
          <div style="width: 100%; height: 100vh; background-color: #ffffff; border-radius: 3rem">
            <div style="padding-left: 2rem; padding-right: 2rem; padding-top: 2.25rem; padding-bottom: 0.25rem; display: flex; flex-direction: column; gap: 1rem">
              <div style="display: flex; gap: 8px">
                <span
                  >
                  <a href="../buyer/notify.php"><svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 1L1 6L6 11" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M1 6H9C14.523 6 19 10.477 19 16V17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg></a>
                </span>
                <p style="font-family: 'Inter'; font-style: normal; font-weight: 500; font-size: 24px; line-height: 29px; color: #4a4a4a; margin-bottom: 1rem">Rating</p>
              </div>
            </div>
            <div style="display: flex; gap: 4px; align-items: center;padding:.5rem 2rem;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M22.5 8.01001L21 3.51001C20.9479 3.35478 20.8463 3.22089 20.7109 3.1288C20.5754 3.03671 20.4136 2.99148 20.25 3.00001H3.75005C3.5865 2.99148 3.42465 3.03671 3.28922 3.1288C3.15379 3.22089 3.05223 3.35478 3.00005 3.51001L1.50005 8.01001C1.48924 8.08965 1.48924 8.17038 1.50005 8.25001V12.75C1.50005 12.9489 1.57906 13.1397 1.71972 13.2803C1.86037 13.421 2.05114 13.5 2.25005 13.5H3.00005V21H4.50005V13.5H9.00005V21H21V13.5H21.75C21.949 13.5 22.1397 13.421 22.2804 13.2803C22.421 13.1397 22.5 12.9489 22.5 12.75V8.25001C22.5109 8.17038 22.5109 8.08965 22.5 8.01001ZM19.5 19.5H10.5V13.5H19.5V19.5ZM21 12H18V9.00001H16.5V12H12.75V9.00001H11.25V12H7.50005V9.00001H6.00005V12H3.00005V8.37001L4.29005 4.50001H19.71L21 8.37001V12Z"
                    fill="#3b82f6" />
                </svg>
                <div
                  style="font-family: 'Inter'; font-style: normal; font-weight: 400; font-size: 16px; line-height: 19px; color: #3b82f6">
                  <?php echo $shopInformation['store_name'] ?>
                </div>
              </div>
              <?php if($status == 'err'): ?>
                <p>Gagal Menambahkan Rating</p>
              <?php endif; ?>

            <!-- CARD RATING -->
            <?php
            $query_detail_produk = "SELECT transaction_detail.id_product, product.name, product.price, product.image, product_uom.uom FROM transaction_detail JOIN product ON transaction_detail.id_product = product.product_id JOIN product_uom ON product.product_uom = product_uom.id_product_uom WHERE id_transaction = '$id_transaction'";
            $result_detail_produk = mysqli_query(connection(), $query_detail_produk);
            while ($data_detail_produk = mysqli_fetch_array($result_detail_produk)):
            ?>
            <div style="padding: 24px 36px">
              <div style="background: #ffffff; box-shadow: 0px 0px 16px rgba(0, 0, 0, 0.1); border-radius: 8px; display: flex; gap: 20px; overflow: hidden">
                <div style="width: 114px; height: 98px; background-color: #bfbfbf; position: relative">
                  <img src="../assets/produk/<?= $data_detail_produk['image'] ?>" style="object-fit: cover; width: 100%; height: 100%" alt="" />
                </div>
                <div style="display: flex; flex-direction: column; justify-content: center; padding: 8px 0">
                  <div style="font-family: 'Inter'; font-style: normal; font-weight: 400; font-size: 10px; line-height: 12px; color: #3b82f6; margin-top: 12px; margin-bottom: 7px"><?= $data_detail_produk['name'] ?></div>
                  <div style="font-family: 'Inter'; font-style: normal; font-weight: 700; font-size: 12px; line-height: 15px; color: #3b82f6">Rp <?= $data_detail_produk['price'] ?>/<?= $data_detail_produk['uom'] ?></div>
                  <span id="rating" style="display:flex">
                    
                  </span>
                </div>
              </div>
              <div
                style="
                  font-family: 'Inter';
                  font-style: normal;
                  font-weight: 700;
                  font-size: 12px;
                  line-height: 15px;
                  color: #ffffff;
                  background-color: #3b82f6;
                  padding: 6px 12px;
                  border-radius: 10px;
                  /* width: 152px; */
                  align-items: center;
                  display: flex;
                  flex-direction: column;
                  margin-top: 6px;
                  padding:.5rem;
                "
              >
                <form action="handle_rating.php" method="POST" style="display:flex;align-items:center">
                  <input type="hidden" name="id_transaction" value="<?= $id_transaction ?>">
                  <input type="hidden" name="id_produk" value="<?= $data_detail_produk['id_product'] ?>">
                  <div id="decrementButton" style="cursor: pointer;width: 2.5rem;display: flex;justify-content: center;align-items: center;font-size: 1.125rem;line-height: 1.75rem;font-weight: bold;height: 100%;color: #618D80;">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M7 11H15M21 11C21 16.5228 16.5228 21 11 21C5.47715 21 1 16.5228 1 11C1 5.47715 5.47715 1 11 1C16.5228 1 21 5.47715 21 11Z"
                        stroke="#fff" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </div>
                  <input type="number" id="rating-value" name="rating" placeholder="1-5" style="width:40px;outline:none;border:none;border-radius:.25rem;text-align:center">
                  <div id="incrementButton" style="cursor: pointer;width: 2.5rem;display: flex;justify-content: center;align-items: center;font-size: 1.125rem;line-height: 1.75rem;font-weight: bold;height: 100%;color: #618D80;">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M11 7V15M7 11H15M21 11C21 16.5228 16.5228 21 11 21C5.47715 21 1 16.5228 1 11C1 5.47715 5.47715 1 11 1C16.5228 1 21 5.47715 21 11Z"
                        stroke="#fff" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </div>
                  <button type="submit" style="border:none;background:white;color:#3b82f6;border-radius:.75rem;padding:.5rem .75rem;">Beri Rating</button>
                </form>
              </div>
              
            </div>
            <?php endwhile; ?>
            <!--  -->
          </div>
        </div>
      </div>
    </div>
    <script src="./rating.js" type="text/javascript"></script> 
  </body>
</html>
