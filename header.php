<?php
// header.php — Common Header for Gold Loan Website
$companyName = "CashForGold";
$contactPhone = "+91-9000000000";
$contactEmail = "info@cashforgold.in";
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $companyName ?> | Gold Loan</title>

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Custom Styles -->
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background: #000; /* Page background black */
      color: #FFD700;  /* Golden text */
    }

    /* Topbar */
    .topbar {
      background: #111;
      color: #FFD700;
      font-size: 0.9rem;
      padding: 6px 0;
    }
    .topbar a {
      color: #FFD700;
      text-decoration: none;
    }
    .topbar a:hover {
      text-decoration: underline;
    }

    /* Navbar */
    .navbar {
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      background: #fff; /* Navbar background white */
      transition: all 0.3s ease;
    }
    .navbar .navbar-brand img {
      height: 50px;
      width: auto;
      transition: transform 0.3s;
    }
    .navbar .navbar-brand img:hover {
      transform: scale(1.05);
    }

    /* Navbar links */
    .navbar-nav .nav-link {
      color: #c28819 !important; /* Golden text */
      font-weight: 500;
      margin: 0 8px;
      position: relative;
      transition: color 0.3s ease;
    }
    .navbar-nav .nav-link::after {
      content: "";
      position: absolute;
      width: 0%;
      height: 2px;
      bottom: 0;
      left: 0;
      background-color: #a97512;
      transition: width 0.3s;
    }
    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-link.active {
      color: #a97512 !important;
    }
    .navbar-nav .nav-link:hover::after,
    .navbar-nav .nav-link.active::after {
      width: 100%;
    }

    /* Apply Now button */
    .btn-apply {
      background: #c28819;
      color: #000 !important;
      border-radius: 6px;
      padding: 6px 14px;
      font-weight: 500;
      transition: all 0.3s;
    }
    .btn-apply:hover {
      background: #a97512;
      color: #fff !important;
      transform: scale(1.05);
    }

    /* Responsive adjustments */
    @media (max-width: 992px) {
      .navbar-nav {
        text-align: center;
      }
      .navbar-nav .nav-item {
        margin: 8px 0;
      }
    }

    @media (max-width: 576px) {
      .topbar .text-end {
        text-align: center !important;
        margin-top: 5px;
      }
    }

    /* Navbar toggler icon in gold */
    .navbar-light .navbar-toggler-icon {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgb(194,136,25)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }
  </style>
</head>
<body>

<!-- 🔹 Topbar -->
<div class="topbar">
  <div class="container d-flex flex-wrap justify-content-between align-items-center">
    <div>
      <small><i class="bi bi-telephone"></i> <?= $contactPhone ?></small>
    </div>
    <div class="text-end">
      <small><i class="bi bi-envelope"></i> <?= $contactEmail ?></small>
    </div>
  </div>
</div>

<!-- 🔹 Navbar -->
<nav class="navbar navbar-expand-lg sticky-top navbar-light">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand" href="index.php">
      <img src="images/cg.png" alt="<?= $companyName ?>">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto align-items-lg-center">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about-us.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact-us.php">Contact Us</a>
        </li>
        <li class="nav-item ms-lg-3">
          <a href="#apply" class="btn btn-apply">Apply Now</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
