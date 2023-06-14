<?php

session_start();
include "../conn.php";
if (!isset($_GET['toko_id']) || empty($_GET['toko_id']) || !is_numeric($_GET['toko_id'])) {
  header("Location:index.php");
}

foreach ($_SESSION['cart'] as $toko) {

  if ($toko->toko_id == $_GET['toko_id']) {
    $detailCartInformation = $toko;
  }


}
$total_price_cart = 0;
foreach ($detailCartInformation->products as $product) {
  $total_price_cart += $product->price * $product->qt;
}


?>




  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      * {
        margin: 0px;
      }

      a {
        display: block;
        border-radius: 0.25rem;
        color: #000000;
      }
    </style>
  </head>
  <body>
    <div style="display: flex; justify-content: center">
      <div style="width: 100vw; max-width: 28rem; background-color: #dbeafe; position: relative; border: 1px solid #adcec4 #cfcfcf">
        <div style="padding-left: 1.25rem; padding-right: 1.25rem; color: #dbeafe; padding-top: 0.5rem; padding-bottom: 0.5rem; font-weight: bold; display: flex; gap: 0.5rem; align-items: center">
          <a href="index.php">
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
          <div className="">
            <p style="font-family: 'Inter'; font-style: normal; font-weight: 400; font-size: 14px; line-height: 126.02%; color: #7b7b7b">Anda Ingin Menjual?</p>
            <div style="margin-top: 0.5rem">
              <div style="display: flex; justify-content: space-between">
                <div style="width: 6rem; height: 1.75rem; background-color: #dbeafe; border-radius: 1.125rem">
                  <a href="../seller/login" style="background: #3b82f6; padding: 16px 6px; text-align: center; border-radius: 24px">
                    <p style="font-family: 'Inter'; font-style: normal; font-weight: 700; font-size: 12px; line-height: 126.02%; color: white; text-decoration: none">Klik disini</p>
                  </a>
                </div>
                <div className=" flex gap-2" style="display: flex; gap: 0.5rem">
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
          <div style="width: 100%; height: 100vh; background-color: #ffffff; border-radius: 3rem; position: relative">
            <div style="padding-left: 2rem; padding-right: 2rem; padding-top: 2.25rem; padding-bottom: 0.25rem; display: flex; flex-direction: column; gap: 1rem">
              <p style="font-family: 'Inter'; font-style: normal; font-weight: 500; font-size: 24px; line-height: 29px; color: #4a4a4a; margin-bottom: 1rem"> Detail Keranjang belanjaan anda</p>
            </div>
            
          <?php
          foreach ($detailCartInformation->products as $product) {
            $getCardInformationQuery = "SELECT product.name as product_name, toko.name as store_name, toko.image_profile, product.image FROM product
            join  toko on toko.toko_id=product.toko_id WHERE product.product_id = $product->id_product";
            $getCardInformation = mysqli_query(connection(), $getCardInformationQuery);
            $cardInformationData = $getCardInformation->fetch_assoc();
            ?>

              
                      <div style="padding: 24px 36px">
                        <div style="background: #ffffff; box-shadow: 0px 0px 16px rgba(0, 0, 0, 0.1); border-radius: 8px; display: flex; gap: 20px; overflow: hidden">
                          <div style="width: 114px; height: 98px; background-color: #bfbfbf; position: relative">
                            <img src="../assets/produk/<?php echo $cardInformationData['image'] ?>" style="object-fit: cover; width: 100%; height: 100%" alt="" />
                          </div>
                          <div style="display: flex; flex-direction: column; justify-content: center">
                            <div style="display: flex; gap: 4px; align-items: center">
                              <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                  d="M11.2499 4.00499L10.4999 1.75499C10.4738 1.67737 10.423 1.61043 10.3553 1.56438C10.2876 1.51834 10.2067 1.49572 10.1249 1.49999H1.8749C1.79313 1.49572 1.7122 1.51834 1.64449 1.56438C1.57678 1.61043 1.52599 1.67737 1.4999 1.75499L0.749902 4.00499C0.744499 4.04481 0.744499 4.08517 0.749902 4.12499V6.37499C0.749902 6.47445 0.78941 6.56983 0.859737 6.64016C0.930063 6.71048 1.02545 6.74999 1.1249 6.74999H1.4999V10.5H2.2499V6.74999H4.4999V10.5H10.4999V6.74999H10.8749C10.9744 6.74999 11.0697 6.71048 11.1401 6.64016C11.2104 6.56983 11.2499 6.47445 11.2499 6.37499V4.12499C11.2553 4.08517 11.2553 4.04481 11.2499 4.00499ZM9.7499 9.74999H5.2499V6.74999H9.7499V9.74999ZM10.4999 5.99999H8.9999V4.49999H8.2499V5.99999H6.3749V4.49999H5.6249V5.99999H3.7499V4.49999H2.9999V5.99999H1.4999V4.18499L2.1449 2.24999H9.8549L10.4999 4.18499V5.99999Z"
                                  fill="#3B82F6"
                                />
                              </svg>
                              <div style="font-family: 'Inter'; font-style: italic; font-weight: 400; font-size: 8px; line-height: 10px; color: #3b82f6"><?php echo $cardInformationData['store_name'] ?></div>
                            </div>
                            <div style="font-family: 'Inter'; font-style: normal; font-weight: 400; font-size: 10px; line-height: 12px; color: #3b82f6; margin-top: 12px; margin-bottom: 7px"><?php echo $cardInformationData['product_name'] ?></div>
                            <div style="font-family: 'Inter'; font-style: normal; font-weight: 700; font-size: 12px; line-height: 15px; color: #3b82f6">Rp <?php echo $product->price * $product->qt ?></div>
                          </div>
                        </div>
                      </div>


            <?php }
          ?>

<form action="index.php" method="POST" style="width: 100%;">
                        <input type="text" hidden name="toko_id" value=<?php echo $toko->toko_id?> >
                        <input type="text" hidden name="buyfromcart" value=true >
                        <button
              style="
                position: fixed;
                bottom: 0;
                display: flex;
                justify-content: space-between;
                width: inherit;
                max-width: 28rem;
                padding: 10px 16px;
                background-color: #fb7777;
                font-family: 'Inter';
                font-style: normal;
                font-weight: 700;
                font-size: 24px;
                line-height: 29px;
                color: #ffffff;
                cursor:pointer;
              "
            >
              <div>Rp. <?php echo $total_price_cart ?></div>
              <div>Checkout</div>
          </button>
                      </form>          
          </div>
        </div>
      </div>
    </div>
  </body>
