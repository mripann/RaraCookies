<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Rara Cookis</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom Styles */
    body {
      min-height: 100vh;
      background-color: #f8f9fa;
      background: #EECBB2;

    }

    /* Topbar Styling */
    .topbar {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1030;
      background: #D1A382;
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .menu-icons {
      display: flex;
      gap: 1.5rem;
      align-items: center;
    }

    .menu-icons .btn {
      font-size: 1.25rem;
      padding: 0.5rem;
    }

    /* Sidebar Styling */
    .offcanvas.offcanvas-end {
      transform: translateX(100%);
      transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      width: 250px;
      border-left: 1px solid #dee2e6;
    }

    .offcanvas.show:not(.hiding) {
      transform: translateX(0);
    }

    .offcanvas-header {
      border-bottom: 1px solid #dee2e6;
      padding: 1rem 1.5rem;
    }

    .offcanvas-title {
      font-size: 1.25rem;
      color: #0d6efd;
    }

    /* Menu Item Hover Effect */
    .hover-effect {
      transition: all 0.2s ease;
      border-radius: 8px;
      margin: 4px 12px;
    }

    .hover-effect:hover {
      background-color: rgba(13, 110, 253, 0.1);
    }

    .hover-effect .nav-link {
      color: #333 !important;
      font-weight: 500;
    }

    .hover-effect:hover .nav-link {
      color: #0d6efd !important;
    }

    /* Responsive Behavior */
    @media (min-width: 768px) {
      main {
        margin-right: 0;
        transition: margin-right 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        padding-top: 70px;
      }
      
      .offcanvas.show ~ main {
        margin-right: 250px;
      }
      
      .offcanvas-backdrop {
        display: none !important;
      }
    }

    @media (max-width: 767px) {
      main {
        padding-top: 70px;
        transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      }
      
      .offcanvas.show ~ main {
        transform: translateX(-250px);
      }
      
      .offcanvas.show ~ .topbar {
        transform: translateX(-250px);
      }
      
      .offcanvas-backdrop {
        opacity: 0.5 !important;
      }
    }
  </style>
</head>
<body>

<!-- Topbar -->
<div class="topbar">
  <div class="logo fw-bold fs-4">
    <img src="assets/pict/logo.png" alt="Logo" style="height: 50px;">
    Rara Cookies
  </div>
  <div class="menu-icons">
    <i class="fas fa-search"></i>
    <i class="fas fa-shopping-cart"></i>
    <button class="btn" data-bs-toggle="offcanvas" data-bs-target="#sidebar">
      <i class="fas fa-bars"></i>
    </button>
  </div>
</div>

<!-- Right Sidebar -->
<div style="background-color: #D1A382;" class="offcanvas offcanvas-end" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
  <div class="offcanvas-header">
    <h5 style="color:black" class="offcanvas-title" id="sidebarLabel">Menu</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body p-0">
    <ul class="nav flex-column">
      <li class="nav-item hover-effect">
        <a href="home.php?page=home" class="nav-link px-4 py-3 d-flex align-items-center">
          <i class="fas fa-home me-3"></i>Dashboard
        </a>
      </li>
      <li class="nav-item hover-effect">
        <a href="pesan.php" class="nav-link px-4 py-3 d-flex align-items-center">
          <i class="fas fa-envelope me-3"></i>Pesan
        </a>
      </li>
      <li class="nav-item hover-effect">
        <a href="customer.php" class="nav-link px-4 py-3 d-flex align-items-center">
          <i class="fas fa-users me-3"></i>Customer
        </a>
      </li>
      <li class="nav-item hover-effect">
        <a href="produk.php" class="nav-link px-4 py-3 d-flex align-items-center">
          <i class="fas fa-box-open me-3"></i>Produk
        </a>
      </li>
      <li class="nav-item hover-effect">
        <a href="lapor.php" class="nav-link px-4 py-3 d-flex align-items-center">
          <i class="fas fa-file-alt me-3"></i>Lapor
        </a>
      </li>
    </ul>
  </div>
</div>

<!-- Main Content -->
<main class="p-4">
  <div class="container py-4">
    <!-- Konten produk -->
  </div>
</main>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Inisialisasi offcanvas
  const sidebar = new bootstrap.Offcanvas(document.getElementById('sidebar'));
  
  // Handle responsive behavior
  window.addEventListener('resize', () => {
    if(window.innerWidth >= 768) {
      sidebar.show();
    } else {
      sidebar.hide();
    }
  });
</script>

</body>
</html>