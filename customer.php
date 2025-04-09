<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>

<main class="p-4">
  <div class="container py-4">
    <div class="card shadow-sm border-0">
      <div class="card-header bg-white border-bottom">
        <h2 class="mb-0 fw-bold text-primary">📝 Form Pemesanan</h2>
      </div>
      
      <div class="card-body">
        <form class="needs-validation" novalidate>
          <div class="row g-4">
            <!-- Form Column -->
            <div class="col-lg-6">
              <div class="mb-3">
                <label for="nama" class="form-label fw-medium text-secondary">
                  <i class="fas fa-user me-2"></i>Nama Customer
                </label>
                <input type="text" 
                       class="form-control form-control-lg border-primary" 
                       id="nama" 
                       name="nama" 
                       placeholder="Masukkan nama lengkap"
                       required>
                <div class="invalid-feedback">
                  Harap masukkan nama customer
                </div>
              </div>

              <div class="mb-3">
                <label for="produk" class="form-label fw-medium text-secondary">
                  <i class="fas fa-box me-2"></i>Pilih Produk
                </label>
                <select class="form-select form-select-lg border-primary" 
                        id="produk" 
                        name="produk">
                  <option value="kastengel">🥨 Kastengel</option>
                  <option value="nastar">🍍 Nastar</option>
                  <option value="sagu">🧀 Sagu Keju</option>
                </select>
              </div>
            </div>

            <!-- Price Calculation Column -->
            <div class="col-lg-6">
              <div class="mb-3">
                <label for="jumlah" class="form-label fw-medium text-secondary">
                  <i class="fas fa-calculator me-2"></i>Jumlah Pesanan
                </label>
                <input type="number" 
                       class="form-control form-control-lg border-primary" 
                       id="jumlah" 
                       name="jumlah" 
                       min="1" 
                       value="1"
                       required>
                <div class="invalid-feedback">
                  Jumlah pesanan minimal 1
                </div>
              </div>

              <div class="alert alert-primary d-flex align-items-center">
                <i class="fas fa-info-circle me-3 fs-5"></i>
                <div>
                  <strong>Harga Satuan:</strong>
                  <span id="hargaSatuan" class="ms-2">Rp 75.000</span>
                </div>
              </div>
            </div>
          </div>

          <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
            <button type="reset" class="btn btn-outline-secondary btn-lg px-4">
              <i class="fas fa-undo me-2"></i>Reset
            </button>
            <button type="submit" class="btn btn-primary btn-lg px-4">
              <i class="fas fa-paper-plane me-2"></i>Kirim Pesanan
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>

<style>
/* Custom Styling */
.form-control-lg, .form-select-lg {
  border-radius: 12px;
  transition: all 0.3s ease;
}

.form-control-lg:focus, .form-select-lg:focus {
  border-color: #0d6efd;
  box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.25);
}

.card {
  border-radius: 15px;
  overflow: hidden;
}

.btn-lg {
  border-radius: 10px;
  padding: 0.75rem 1.5rem;
}

.invalid-feedback {
  font-size: 0.9em;
}

.alert {
  border-radius: 12px;
}
</style>

<script>
// Form validation
(() => {
  'use strict'
  const forms = document.querySelectorAll('.needs-validation')
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }
      form.classList.add('was-validated')
    }, false)
  })
})()
</script>

<?php include 'footer.php'; ?>