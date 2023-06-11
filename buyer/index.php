<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <style>
        html,
        body {
            padding: 0;
            margin: 0;
        }

        p {
            margin: 0;
        }

        a {
            text-decoration: none;
            color: #000;
        }

        @keyframes pulse {
            50% {
                opacity: .5;
            }
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>
    <div style="display: flex;justify-content: center;">
        <div style="width: 100vw; max-width: 28rem;background-color: #DBEAFE;border: 1px solid #DBEAFE;position: relative; ">
            <!-- CHECKOUT FORM -->
            <!-- <div style="background-color: rgba(100 116 139,0.2);height: 100%;position: absolute;z-index: 20;display: flex;justify-content: center;"></div>
            <div style="justify-content: center;display: flex;">
                <div style="width: 18rem;height: 575px;background-color: white;padding: 1.5rem 1.25rem;border-radius: 0.5rem;position: fixed;top: 1.5rem;z-index: 30;">
                    <p style="font-size: 1.5rem;line-height: 2rem;color: #618D80;font-weight: 500;">Checkout Belanja!</p>
                    <form style="display: flex;flex-direction: column;gap: 3rem;margin-top: 4rem;">
                        <input onChange={handleChange} type="text" name="name" placeholder="Nama" style="border: none; border-bottom: 1px solid #618D80;color: #618D80;padding: .25rem;" />
                        <input onChange={handleChange} type="text" name="contact" placeholder="No. Whatsapp" style="border: none; border-bottom: 1px solid #618D80;color: #618D80;padding: .25rem;" />
                        <input onChange={handleChange} type="text" name="alamat" placeholder="Alamat" style="border: none; border-bottom: 1px solid #618D80;color: #618D80;padding: .25rem;" />
                        <div style="border: none; border-bottom: 1px solid #618D80;color: #618D80;padding: .25rem;font-size: 1rem;line-height: 1.5rem">
                            Total Belanja : <span className=" font-bold">Rp. 10.000</span>
                        </div>
                        <-- FORM TIDAK LOADING ->
                        <button onClick={handleConfirm} style="border: none;background-color: #fb7777;border-radius: 1.5rem;height: 4rem;width: 100%;color: white;font-size: 1rem;line-height: 1.5rem;padding: .5rem 0;font-weight: bold;">
                            <div style="padding-bottom: .25rem;">Konfirmasi</div>
                        </button>
                        <-- FORM TIDAK LOADING ->

                        <-- FORM LOADING ->
                        <button disabled onClick={handleConfirm} style="border: none;background-color: #fb7777;border-radius: 1.5rem;height: 4rem;width: 100%;color: white;font-size: 1rem;line-height: 1.5rem;padding: .5rem 0;font-weight: bold;">
                            <div style="display: flex;justify-content: center;align-items: center;gap: .5rem;">
                                <svg aria-hidden="true" style="width: 2.25rem;height: 2.25rem;color: rgb(229 231 235);animation: spin 1s linear infinite;fill: #fff;" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
                                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
                                </svg>
                                <div style="padding-bottom: .25rem;">Konfirmasi</div>
                            </div>
                        </button>
                        <-- FORM LOADING ->
                    </form>
                </div>
            </div> -->
            <!-- NOTIF ETC -->
            <div style="padding: 1rem 1.25rem">
                <div>
                    <p style="color: #7b7b7b;">Anda Ingin Menjual?</p>
                    <div style="margin-top: .5rem;">
                        <div style="display: flex;justify-content: space-between;">
                            <button style="width: 6rem;height: 1.75rem;background-color: #3B82F6;border-radius: 1.5rem;border-color: transparent;">
                                <a href="/seller">
                                    <p className="text-xs text-white font-bold" style="font-size: 0.75rem;line-height:1rem;font-weight: 700;color: white;">Klik disini</p>
                                </a>
                            </button>
                            <div style="display: flex;gap: .5rem;">
                                <!-- <Shopbagcircle colorStroke="#618D80" /> -->
                                <a href="./cart.php">
                                    <div style="border:1px solid #3B82F6;padding: .5rem;width: fit-content;border-radius: 100%;display: flex;align-items: center;justify-content: center;position: relative;">
                                        <div style="height: 1.25rem;width: 1.25rem;padding: .1rem; background-color: #fb7777; border-radius: 100%;position: absolute;right: -5px;top: -5px;font-size: 8px;text-align: center;color: white;">10</div>
                                        <svg width="17" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.05163 6.88587C2.08017 6.53023 2.24162 6.1984 2.50382 5.95645C2.76602 5.7145 3.10973 5.58019 3.4665 5.58026H12.0225C12.3792 5.58019 12.723 5.7145 12.9852 5.95645C13.2474 6.1984 13.4088 6.53023 13.4374 6.88587L14.0071 13.9815C14.0228 14.1768 13.9979 14.3732 13.9339 14.5584C13.87 14.7435 13.7684 14.9135 13.6355 15.0574C13.5027 15.2014 13.3415 15.3163 13.1621 15.3949C12.9826 15.4735 12.7889 15.5142 12.593 15.5142H2.89601C2.70012 15.5142 2.50635 15.4735 2.32692 15.3949C2.14749 15.3163 1.98628 15.2014 1.85344 15.0574C1.7206 14.9135 1.619 14.7435 1.55505 14.5584C1.4911 14.3732 1.46617 14.1768 1.48184 13.9815L2.05163 6.88587V6.88587Z" stroke="#3B82F6" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round" />
                                            <path d="M10.5828 7.70896V4.16112C10.5828 3.40836 10.2838 2.68644 9.75148 2.15416C9.2192 1.62188 8.49728 1.32285 7.74452 1.32285C6.99177 1.32285 6.26984 1.62188 5.73756 2.15416C5.20528 2.68644 4.90625 3.40836 4.90625 4.16112V7.70896" stroke="#3B82F6" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round" />
                                        </svg>
                                    </div>
                                </a>
                                <!-- <Notifcircle colorStroke="#618D80" /> -->
                                <a href="/notify">
                                    <div style="border:1px solid #3B82F6;height: 2.25rem;width: 2.25rem;border-radius: 100%; display: flex;align-items: center;justify-content: center;position: relative;">
                                        <div style="height: 1.25rem;width: 1.25rem;padding: .1rem; background-color: #fb7777; border-radius: 100%;position: absolute;right: -5px;top: -5px;font-size: 8px;text-align: center;color: white;">10</div>
                                        <svg width="15" height="19" viewBox="0 0 15 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.7344 14.75H13.2422V7.77734C13.2422 4.88369 11.1032 2.49248 8.32031 2.09463V1.29688C8.32031 0.843652 7.95322 0.476562 7.5 0.476562C7.04678 0.476562 6.67969 0.843652 6.67969 1.29688V2.09463C3.89678 2.49248 1.75781 4.88369 1.75781 7.77734V14.75H1.26562C0.902637 14.75 0.609375 15.0433 0.609375 15.4062V16.0625C0.609375 16.1527 0.683203 16.2266 0.773438 16.2266H5.20312C5.20312 17.4939 6.23262 18.5234 7.5 18.5234C8.76738 18.5234 9.79688 17.4939 9.79688 16.2266H14.2266C14.3168 16.2266 14.3906 16.1527 14.3906 16.0625V15.4062C14.3906 15.0433 14.0974 14.75 13.7344 14.75ZM7.5 17.2109C6.95654 17.2109 6.51562 16.77 6.51562 16.2266H8.48438C8.48438 16.77 8.04346 17.2109 7.5 17.2109ZM3.23438 14.75V7.77734C3.23438 6.63711 3.67734 5.5666 4.4833 4.76064C5.28926 3.95469 6.35977 3.51172 7.5 3.51172C8.64023 3.51172 9.71074 3.95469 10.5167 4.76064C11.3227 5.5666 11.7656 6.63711 11.7656 7.77734V14.75H3.23438Z" fill="#3B82F6" />
                                        </svg>
                                    </div>
                                </a>
                                <!-- <SettingCircle colorStroke="#618D80" /> -->
                            </div>
                        </div>
                        <div></div>
                    </div>
                </div>
            </div>
            <!-- SEARCH SECTION -->
            <div style="padding: 1rem 1.25rem;">
                <!-- <SearchSection func={handleSearch} /> -->
                <div style="display: flex;justify-content: center;width: 100%;">
                    <div style="position: relative;width: 100%;">
                        <div style="display: flex;position: absolute;top: 0px;bottom: 0px;left: 0;align-items: center;padding-left:0.75rem;pointer-events: none;">
                            <svg aria-hidden="true" style="width: 1.25rem;height: 1.25rem;color: rgb(107 114 128);" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>

                        <input type="search" id="default-search" style="display: block;width: 100%;height: 2.5rem;padding: 1rem; text-indent: 1.5rem;font-size: 0.875rem;line-height: 1.25rem;color: rgb(17 24 39);background-color: rgb(249 250 251);border-radius: 60px;border:1px solid rgb(209 213 219);" placeholder="Cari sayur, buah, makanan dan lain-lain" required name="search" />
                    </div>
                </div>
            </div>
            <!-- CATEGORY -->
            <div style="padding: 0 1.25rem;">
                <div style="display: flex; align-items: center;">
                    <div style="font-size: 0.75rem;line-height: 1rem;margin-right: .5rem;display: flex;font-weight: 400;color: #3B82F6;">Kategori : </div>
                    <div className="flex gap-2 flex-wrap" style="display: flex;gap: .5rem;flex-wrap: wrap;">
                        <button value="Minuman" className="hover:text-white hover:bg-[#618D80] hover:-translate-y-1 hover:transition-transform hover:bg-opacity-40" style="
                        height: 1.25rem;background-color: white;border: 1px solid #3B82F6;width: fit-content;padding: 0 0.75rem;font-size: 8px;border-radius: 1.5rem;display: flex;align-items: center;color: #3B82F6;">
                            Minuman
                        </button>
                    </div>
                </div>
            </div>
            <!-- PRODUK -->
            <div style="margin-top: 1rem;">
                <div style="width: 100%;background-color: white;border-top-left-radius: 1.5rem;border-top-right-radius: 1.5rem;min-height: 100vh;">
                    <div style="padding: 1.25rem 0;display: flex;justify-content: space-evenly;flex-wrap: wrap;gap: 1.25rem;">
                        <!-- LOADING PRODUK -->
                        <div key="1" className="hover:-translate-y-1 hover:translate-x-1 hover:transition-transform " style="display: flex; height: 15rem;width: 10rem;background-color: white;box-shadow: 0 4px 6px #0001;border-radius: 1.5rem;overflow: hidden;flex-direction: column;position: relative;">
                            <!-- {/* Empty */} -->
                            <div style="background-color: rgb(209 213 219);width: 100%;animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;height: 8rem;overflow: hidden;"></div>
                            <!-- {/* DETAIL*/} -->
                            <div style="padding: 0.5rem 0.75rem; flex-direction: column;height: 7rem;">
                                <div>
                                    <p style="font-size: 10px;color: #618D80;background-color: rgb(209 213 219);animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;border-radius: 1.5rem;width: 8rem;height: 0.75rem;"></p>
                                    <p style="font-size: 10px;color: #618D80;background-color: rgb(209 213 219);animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;border-radius: 1.5rem;width: 3rem;height: 0.75rem;margin-top: 1rem;"></p>
                                    <p style="font-size: 10px;color: #618D80;background-color: rgb(209 213 219);animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;border-radius: 1.5rem;width: 5rem;height: 0.75rem;margin-top: .5rem;"></p>
                                </div>
                                <div style="display: flex;align-items: center;position: absolute;bottom: .75rem;">
                                    <p style="font-size: 10px;color: #618D80;background-color: rgb(209 213 219);animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;border-radius: 1.5rem;width: 5rem;height: 0.5rem;margin-top: .5rem;"></p>
                                </div>
                            </div>
                        </div>
                        <!-- LOADING PRODUK -->

                        <!-- ADA PRODUK -->
                        <a href="./productDetail.php?id=berapa">
                            <div className="hover:-translate-y-1 hover:translate-x-1 hover:transition-transform " style="display: flex; height: 15rem;width: 10rem;background-color: white;box-shadow: 0 4px 6px #0001;border-radius: 1.5rem;overflow: hidden;flex-direction: column;position: relative;">
                                <!-- JIKA STOK PRODUK KOSONG -->
                                <!-- <div className=" w-full h-full flex items-center justify-center absolute bg-black z-10 bg-opacity-50" style="width: 100%;height: 100%;display: flex;align-items: center;justify-content: center;position: absolute;background-color: #0005;z-index: 10;">
                                    <div style="background-color: #fb7777;color: white;height: 2.25rem;width: 8rem;display: flex;align-items: center;justify-content: center;border-radius: 1.5rem;">
                                        Habis
                                    </div>
                                </div> -->
                                <!-- JIKA STOK PRODUK KOSONG -->

                                <!-- GAMBAR PRODUK -->
                                <div style="width: 100%;height: 8rem;overflow: hidden;background-color: rgb(243 244 246);">
                                    <img priority width="120" height="120" style="width: 100%;height: 100%;object-fit: cover;" alt="" src="https://pemweb-uas-frontend.vercel.app/_next/image?url=https%3A%2F%2Fpemweb-api.aldam.my.id%2Fapi%2Fseller%2Ffile%2Fproduct%2F646fa91694c216f6d358c1b3-1686369679608.jpg&w=128&q=75" />
                                    <!-- src=process.env.NEXT_PUBLIC_BASE_URL/api/seller/file/product/${productImage -->
                                </div>
                                <!-- DETAIL PRODUK -->
                                <div style="padding: .25rem .75rem;flex-direction: column;height: 7rem;">
                                    <div>
                                        <p style="font-size: 10px;color: #3B82F6;">Kopi Susu</p>
                                        <p style="font-size: 0.75rem;line-height: 1rem;font-weight: bold;color: #3B82F6;margin-top: .5rem;">
                                            Rp 10000/kg
                                        </p>
                                        <div style="display: flex;gap: .25rem;margin-top: .25rem;">
                                            <?php $i = 0;
                                            for ($i; $i < 5; $i++) : ?>
                                                <svg width="10" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.08104 2.848L6.54204 2.479L5.40704 0.178004C5.37604 0.115004 5.32504 0.0640037 5.26204 0.0330037C5.10404 -0.0449963 4.91204 0.0200037 4.83304 0.178004L3.69804 2.479L1.15904 2.848C1.08904 2.858 1.02504 2.891 0.976038 2.941C0.9168 3.00189 0.884157 3.0838 0.885282 3.16875C0.886407 3.25369 0.921208 3.33471 0.982038 3.394L2.81904 5.185L2.38504 7.714C2.37486 7.77283 2.38137 7.83334 2.40383 7.88866C2.42629 7.94398 2.4638 7.99189 2.51211 8.02698C2.56041 8.06206 2.61759 8.08291 2.67714 8.08716C2.73669 8.0914 2.79624 8.07888 2.84904 8.051L5.12004 6.857L7.39104 8.051C7.45304 8.084 7.52504 8.095 7.59404 8.083C7.76804 8.053 7.88504 7.888 7.85504 7.714L7.42104 5.185L9.25804 3.394C9.30804 3.345 9.34104 3.281 9.35104 3.211C9.37804 3.036 9.25604 2.874 9.08104 2.848Z" fill="#FFD600" />
                                                </svg>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                    <div style="display: flex;align-items: center;position: absolute;bottom: .75rem;">
                                        <span>
                                            <!-- <img src="" alt="" priority="true" /> -->
                                            <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.25 3.24501L10.5 0.995012C10.4739 0.917394 10.4232 0.85045 10.3554 0.804405C10.2877 0.758359 10.2068 0.735744 10.125 0.740012H1.87502C1.79325 0.735744 1.71232 0.758359 1.64461 0.804405C1.5769 0.85045 1.52612 0.917394 1.50002 0.995012L0.750024 3.24501C0.744621 3.28483 0.744621 3.32519 0.750024 3.36501V5.61501C0.750024 5.71447 0.789532 5.80985 0.859859 5.88018C0.930185 5.9505 1.02557 5.99001 1.12502 5.99001H1.50002V9.74001H2.25002V5.99001H4.50002V9.74001H10.5V5.99001H10.875C10.9745 5.99001 11.0699 5.9505 11.1402 5.88018C11.2105 5.80985 11.25 5.71447 11.25 5.61501V3.36501C11.2554 3.32519 11.2554 3.28483 11.25 3.24501ZM9.75002 8.99001H5.25002V5.99001H9.75002V8.99001ZM10.5 5.24001H9.00002V3.74001H8.25002V5.24001H6.37502V3.74001H5.62502V5.24001H3.75002V3.74001H3.00002V5.24001H1.50002V3.42501L2.14502 1.49001H9.85502L10.5 3.42501V5.24001Z" fill="#3B82F6" />
                                            </svg>

                                        </span>
                                        <p style="color: #3B82F6;font-size: 8px;transform: scale(.8);">Aldam Store</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- ADA PRODUK -->
                        <!-- TIDAK ADA PRODUK -->
                        <div style="padding: 2rem 0;display: flex;align-items: center;opacity: .5;font-weight: bold;">
                            <h1>Produk Tidak Tersedia</h1>
                        </div>
                        <!-- TIDAK ADA PRODUK -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>