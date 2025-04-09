<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>

<div class="container py-4">
  <h2 class="mb-4">Form Pemesanan</h2>
  <form>
    <div class="mb-3">
      <label for="nama" class="form-label">Nama Customer</label>
      <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="mb-3">
      <label for="produk" class="form-label">Pilih Produk</label>
      <select class="form-select" id="produk" name="produk">
        <option value="kastengel">Kastengel</option>
        <option value="nastar">Nastar</option>
        <option value="sagu">Sagu Keju</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="jumlah" class="form-label">Jumlah</label>
      <input type="number" class="form-control" id="jumlah" name="jumlah" required>
    </div>
    <button type="submit" class="btn btn-primary">Pesan</button>
  </form>
</div>
