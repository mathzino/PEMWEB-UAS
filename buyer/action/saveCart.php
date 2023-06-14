<?php
session_start();
include("../lib/generateRandomId.php");

function saveCart($cart, $toko_id, $id_product, $qt, $price)
{
    $foundStore = false;
    $foundProduct = false;

    // Mengecek apakah toko sudah ada dalam data
    foreach ($cart as $store) {
        if (isset($store->toko_id) && $store->toko_id == $toko_id) {
            $foundStore = true;

            // Mengecek apakah produk sudah ada dalam toko
            foreach ($store->products as $product) {
                if (isset($product->id_product) && $product->id_product == $id_product) {
                    $foundProduct = true;
                    $product->qt += $qt; // Menambahkan kuantitas jika produk sudah ada
                    break;
                }
            }

            // Jika produk belum ada, tambahkan produk baru ke dalam toko
            if (!$foundProduct) {
                $newProduct = new stdClass();
                $newProduct->id_product = $id_product;
                $newProduct->qt = $qt;
                $newProduct->price = $price;
                $store->products[] = $newProduct;
            }
            break;
        }
    }

    // Jika toko belum ada, tambahkan toko baru dengan produk baru
    if (!$foundStore) {
        $newStore = new stdClass();
        $newStore->toko_id = $toko_id;
        $newProduct = new stdClass();
        $newProduct->id_product = $id_product;
        $newProduct->qt = $qt;
        $newProduct->price = $price;
        $newStore->products = array($newProduct);
        $cart[] = $newStore;
        $_SESSION['cart'] = $cart;

    }
    // print_r(json_encode($_SESSION['cart']) . $toko_id . $id_product . $qt);

    // return $cart;
    ;
}

if (isset($_POST)) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    saveCart($_SESSION['cart'], $_POST['toko_id'], $_POST['id_product'], $_POST['qt'], $_POST['price']);
}




// print_r($_SESSION['cart']);
header("Location:../index.php");





?>