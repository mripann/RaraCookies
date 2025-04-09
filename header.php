<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Rara Cookis</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom CSS untuk topbar */
    .topbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem;
      background: #D1A382;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1030;
    }

    .menu-icons {
      display: flex;
      gap: 1.5rem;
      align-items: center;
    }

    /* Penyesuaian untuk sidebar kanan */
    @media (min-width: 768px) {
      main {
        margin-right: 0;
        transition: margin-right 0.3s ease;
      }
      
      .offcanvas.show ~ main {
        margin-right: 250px;
        margin-left: 0;
      }
    }
  </style>
</head>
<body>

<div class="topbar">
  <div class="logo">Rara cookis</div>
  <div class="menu-icons">
    <i class="fas fa-search"></i>
    <i class="fas fa-shopping-cart"></i>
    <button class="btn" data-bs-toggle="offcanvas" data-bs-target="#sidebar">
      <i class="fas fa-bars"></i>
    </button>
  </div>
</div>