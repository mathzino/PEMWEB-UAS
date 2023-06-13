<?php
session_start();
include '../../conn.php';
if (!isset($_SESSION['id_toko'])) {
    header("Location: ../formulir-mitra");
} elseif (!isset($_SESSION['id'])) {
    header("Location: ../login");
}
$status = isset($_GET['status']) ? $_GET['status'] : '';
?>
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
                <a href="../logout/" style="text-decoration: none;">
                    <div style="color: white;background-color: rgb(248 113 113);padding: .25rem .75rem;border-radius: .5rem;font-weight: bold;box-shadow: 0 1px 2px 0 #fca5a5;">
                        Log Out
                    </div>
                </a>
            </div>
            <?php
            $query = "SELECT * FROM toko WHERE toko_id = '$_SESSION[id_toko]'";
            $result = mysqli_query(connection(), $query);
            ?>
            <?php while ($data_toko = mysqli_fetch_array($result)) : ?>
                <div style="padding: .75rem;background-color: #dbeafe;">
                    <div style="padding: .75rem;display: flex;flex-direction: column;justify-content: space-between;align-items: center;">
                        <h1 style="font-size: 1.125rem;font-weight: bold;color: rgb(51 65 85);filter: drop-shadow(0 1px 1px rgb(0 0 0 / 0.05));margin-bottom: .15rem;margin-right: auto;">
                            Edit Profil Tokomu
                        </h1>

                        <img src="../assets/toko/<?= $data_toko['image_profile'] ?>" style="border-radius: 50%;height: 100px;width: 100px;margin-top: 1.5rem;" alt="foto"></img>


                        <form style="display: flex;flex-direction: column;max-width: 24rem;padding: 3rem;color: rgb(71 85 105);" action="verif_setting.php" method="POST" enctype="multipart/form-data">

                            <div style="padding: .75rem 1.5rem;margin: 1.5rem;margin-top: 0;border-radius: 2rem;position: relative;background-color: #3b82f6;cursor: pointer;">
                                <input type="hidden" name="image_profile_old" value="<?= $data_toko['image_profile'] ?>">
                                <input type="file" name="image_profile_new" accept=".jpg, .png, .svg, .jfif, .webp" style="position: absolute;cursor: pointer;border-radius: 1.5rem;width: 100%;height: 100%;top: 0;left: 0;opacity: 0;font-size: .875rem;" />
                                <div className="flex" style="display: flex;">
                                    <p style="font-weight: bold;text-align: center;color: white;width: 100%;">
                                        Unggah Foto Profil
                                    </p>
                                    <div style="background-color: white;position: absolute;left: -0.75rem;top: -0.75rem;margin: auto 0;border-radius: 50%;width: 40px;height: 40px;">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20 0C14.6957 0 9.60859 2.10714 5.85786 5.85786C2.10714 9.60859 0 14.6957 0 20C0 25.3043 2.10714 30.3914 5.85786 34.1421C9.60859 37.8929 14.6957 40 20 40C25.3043 40 30.3914 37.8929 34.1421 34.1421C37.8929 30.3914 40 25.3043 40 20C40 14.6957 37.8929 9.60859 34.1421 5.85786C30.3914 2.10714 25.3043 0 20 0V0ZM26.608 11.2C26.8395 11.1991 27.0688 11.2438 27.283 11.3317C27.4972 11.4195 27.6919 11.5488 27.856 11.712L29.8912 13.744C30.2182 14.0765 30.4014 14.5241 30.4014 14.9904C30.4014 15.4567 30.2182 15.9043 29.8912 16.2368L28.344 17.7808L27.7504 18.3744L17.44 28.6848L10.6432 30.9504L12.9088 24.1536L23.2448 13.8688L23.2256 13.8496L25.3632 11.712C25.6939 11.3831 26.1416 11.199 26.608 11.2ZM26.608 12.7872C26.5712 12.7872 26.5344 12.8064 26.496 12.8432L24.9248 14.4112L27.2064 16.6592L28.7584 15.1072C28.8336 15.0336 28.8336 14.9472 28.7584 14.8752L26.7264 12.8432C26.7116 12.8266 26.6937 12.8131 26.6736 12.8035C26.6536 12.7939 26.6318 12.7883 26.6096 12.7872H26.608ZM23.8128 15.5632L15.0768 24.256L17.344 26.5216L26.072 17.7904L23.8128 15.5632ZM14.1248 25.568L13.1744 28.4224L16.032 27.4688L14.1248 25.568Z" fill="#FB7777" />
                                        </svg>

                                    </div>

                                </div>
                            </div>
                            <div style="display: flex;justify-content: center;background-color: white;padding: .5rem 0;border-radius: .75rem;margin-bottom: .5rem;<?= $status == '' ? 'display:none' : '' ?>">
                                <?php
                                if ($status == 'err') {
                                    echo "<p style='color:red'>Gagal Update Profile</p>";
                                } elseif ($status == 'ok') {
                                    echo "<p style='color:green'>Update Profile Berhasil</p>";
                                }
                                ?>
                            </div>
                            <label htmlFor="nama-toko" className="text-sm mb-3 ml-3" style="font-size: .875rem;margin-bottom: .75rem;margin-left: .75rem;">
                                Nama Toko
                            </label>
                            <input type="text" id="nama-toko" name="namatoko" placeholder="Nama Toko" value="<?= $data_toko['name'] ?>" className="py-3 px-6 mb-6 rounded-3xl focus:outline-none font-medium hover:opacity-95" style="padding: .75rem 1.5rem;margin-bottom: 1.5rem;border-radius: 1.5rem;font-weight: 600;border: none;outline: none;" />
                            <label htmlFor="alamat" className="text-sm mb-3 ml-3" style="font-size: .875rem;margin-bottom: .75rem;margin-left: .75rem;">
                                Alamat
                            </label>
                            <textarea placeholder="Alamat" id="alamat" name="alamat" className="py-3 px-6 mb-6 rounded-3xl focus:outline-none overflow-auto font-medium hover:opacity-95 resize-none" style="font-family: sans-serif;height: 100px;padding: .75rem 1.5rem;margin-bottom: 1.5rem;border-radius: 1.5rem;font-weight: 600;border: none;overflow: auto;resize: none;outline: none;"><?= $data_toko['alamat'] ?></textarea>
                            <button type=" submit" className="p-3 mb-6 rounded-3xl bg-red-400 font-bold text-white hover:bg-red-500/90 transition-colors" style="padding: .75rem;margin-bottom: 1.5rem;border-radius: 1.5rem;background-color: rgb(248 113 113);font-weight: bold;color: white;border: none;cursor: pointer;">
                                Ubah Profil
                            </button>
                        </form>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</body>

</html>