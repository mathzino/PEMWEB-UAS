<!DOCTYPE html>
<html>
<head lang="en" dir="ltr">
  <meta charset="utf-8">
  <title>Form Login</title>
  <link rel="stylesheet" type="text/css" href="style5.css">
</head>
<body>
   <h3>Tambah Produk</h3>
  <div class="container">
    <form action="" method="get">
       <center><img class="gambar" src="packaging.png"></center>

       <div class="form-group">
        <input type="text" id="namaproduk" name="namatoko" placeholder="Nama Produk" required>
      </div>

     <div class="form-group">
        <input type="number" id="" name="jumlah" placeholder="Jumlah (Stok)" required>
      </div>

      <div class="form-group1">
        <input type="text" id="harga" name="harga" placeholder="Harga" required>
        <select>
          <option value="">Pilih</option>
          <option value="kg">Kg</option>
             <option value="ons">ons</option>
             <option value="pcs">pcs</option>
        </select>
      </div>

      <h5>Tambah Produk</h5>


      <div class="form-group">
        <select type="text" name="kategori" id="kategori" placeholder="Pilih Kategori">
          <option value="">Pilih Kategori</option>
          <option value="Sayur">Sayur</option>
          <option value="Buah">Buah</option>
          <option value="Sembako">Sembako</option>
          <option value="Minuman">Minuman</option>
          <option value="Makanan">Makanan</option>
          <option value="Obat">Obat</option>
          <option value="Bumbu">Bumbu</option>
          <option value="Perlengkapan">Perlengkapan</option>
          <option value="Perlengkapan">;ainnya</option>
        </select>
       
      </div>

      <div class="form-group">
        <center><input type="submit" value="Tambah Produk"></center>

      </div>
    </form>
  </div>
</body>
</html>
