<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            padding: 0;
            margin: 0;
        }

        p,
        h1 {
            margin: 0;
        }
    </style>
</head>

<body>
    <div style="width: 100vw;display: flex;flex-direction: column;justify-content: center;align-items: center;">
        <div style="display: flex;flex-direction: column;width: 100vw;max-width: 24rem;background-color: white;min-height:100vh;">
            <div style="padding: .75rem 1.25rem;background-color: white;box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05); border: 1px solid #cbd5e0;border-radius: .25rem;display: flex;width: 100%;justify-content: space-between;align-items: center;">
                <a href="../beranda-mitra/">
                    <svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.0023e-09 6.50258C0.00167844 6.72498 0.0871314 6.93803 0.238333 7.09676L0.243333 7.10707L5.24333 12.259C5.4005 12.4154 5.611 12.5019 5.8295 12.5C6.048 12.498 6.25701 12.4077 6.41152 12.2485C6.56602 12.0893 6.65366 11.8739 6.65556 11.6488C6.65746 11.4237 6.57347 11.2068 6.42167 11.0448L2.845 7.35779H19.1667C19.3877 7.35779 19.5996 7.26733 19.7559 7.1063C19.9122 6.94527 20 6.72687 20 6.49914C20 6.27141 19.9122 6.05301 19.7559 5.89198C19.5996 5.73096 19.3877 5.64049 19.1667 5.64049H2.845L6.42167 1.95516C6.57347 1.79322 6.65746 1.57632 6.65556 1.35119C6.65366 1.12605 6.56602 0.910693 6.41152 0.751493C6.25701 0.592292 6.048 0.501989 5.8295 0.500032C5.611 0.498076 5.4005 0.584623 5.24333 0.741033L0.243333 5.89293L0.238333 5.90152C0.164147 5.97897 0.105278 6.07054 0.0650001 6.17114C0.0221002 6.27484 -9.40675e-06 6.38641 3.0023e-09 6.49914V6.50258Z" fill="black" />
                    </svg>

                </a>
                <a href="../logout/">
                    <div style="color: white;background-color: rgb(248 113 113);padding: .25rem .75rem;border-radius: .5rem;font-weight: bold;box-shadow: 0 1px 2px 0 #fca5a5;">
                        Log Out
                    </div>
                </a>
            </div>
            <div style="padding: .75rem;">
                <div style="padding: .75rem;display: flex;flex-direction: column;justify-content: space-between;align-items: center;">
                    <h1 style="font-size: 1.125rem;font-weight: bold;color: rgb(51 65 85);filter: drop-shadow(0 1px 1px rgb(0 0 0 / 0.05));margin-bottom: .15rem;margin-right: auto;">
                        Edit Profil Tokomu
                    </h1>
                    <img src="../assets/toko/aldamtoko_1686475718.png" className="rounded-full w-[100px] h-[100px]" style="border-radius: 50%;height: 100px;width: 100px;" alt=""></img>

                    <form className="flex flex-col w-full sm:w-96 p-12 text-slate-600" style="display: flex;flex-direction: column;max-width: 24rem;padding: 3rem;color: rgb(71 85 105);">
                        <div className="p-3 m-6 mt-0 rounded-full relative bg-mygreen_dark/70 hover:bg-mygreen_dark hover:cursor-pointer transition-colors" style="padding: .75rem;margin: 1.5rem;margin-top: 0;border-radius: 2rem;position: relative;background-color: #3ac2fa;cursor: pointer;">
                            <input type="file" accept=".jpg, .png, .svg, .jfif, .webp" className="absolute hover:cursor-pointer rounded-3xl w-full h-full top-0 left-0 opacity-0 focus:outline-none font-normal text-sm form-control" style="position: absolute;cursor: pointer;border-radius: 1.5rem;width: 100%;height: 100%;top: 0;left: 0;opacity: 0;font-size: .875rem;" />
                            <div className="flex" style="display: flex;">
                                <p className="font-bold text-center text-white w-full" style="font-weight: bold;text-align: center;color: white;width: 100%;">
                                    Unggah Foto Profil
                                </p>
                                <div className="bg-white bg-[url('/icons/upload.svg')] absolute -left-3 -top-3 my-auto rounded-full shadow-md w-[40px] h-[40px]"></div>
                            </div>
                        </div>
                        <label htmlFor="nama-toko" className="text-sm mb-3 ml-3">
                            Nama Toko
                        </label>
                        <input type="text" id="nama-toko" placeholder="Nama Toko" value="{!isLoading ? namaToko " className="py-3 px-6 mb-6 rounded-3xl focus:outline-none font-medium hover:opacity-95" />
                        <label htmlFor="id-toko" className="text-sm mb-3 ml-3">
                            ID Toko
                        </label>
                        <input type="text" id="id-toko" placeholder="ID Toko" value="{!isLoading ? idToko : " className="py-3 px-6 mb-6 rounded-3xl focus:outline-none font-medium hover:opacity-95" />
                        <label htmlFor="alamat" className="text-sm mb-3 ml-3">
                            Alamat
                        </label>
                        <textarea placeholder="Alamat" id="alamat" value="{!isLoading ? alamat : " style="height: 100px" className="py-3 px-6 mb-6 rounded-3xl focus:outline-none overflow-auto font-medium hover:opacity-95 resize-none"></textarea>
                        <button type="submit" className="p-3 mb-6 rounded-3xl bg-red-400 font-bold text-white hover:bg-red-500/90 transition-colors">
                            Ubah Profil
                        </button>
                    </form>
                    <div className="text-red-400 px-3 py-1 rounded-xl font-bold hover:bg-red-100 hover:cursor-pointer">
                        Delete Toko
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>