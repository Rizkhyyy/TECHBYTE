<?php
include "config.php";

if(!isset($_SESSION['user'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechBrand - Future Technology</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.0/font/bootstrap-icons.min.css" integrity="sha512-rDTlSC+d3sQQeTwkSYI7grcqLTrDZjOEEddzt/7IRA+9Q7x1Zud4j++lH29VSlNrTI0RZ/9d45X6qrFK0RD94w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top" style: height: 12px;>
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">TECHBYTE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#products">Products</a></li>
        <li class="nav-item"><a class="nav-link" href="#Support">Support</a></li>
        <li class="nav-item"><a class="nav-link" href="#Footer">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="login.php">LogOut</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero-section d-flex align-items-center">
  <div class="container text-center text-white">
    <h1 class="display-4 fw-bold">Next Generation Motherboard</h1>
    <p class="lead">Performance • Stability • Innovation</p>
    <a href="#products" class="btn btn-primary btn-lg mt-3">Explore Products</a>
  </div>
</section>

<!-- Products -->
<section id="products" class="py-5 bg-dark text-white">
  <div class="container">
    <h2 class="text-center mb-5">Featured Products</h2>
    <div class="row g-4">

        <div class="col-md-4">
        <div class="card bg-black border-0 product-card">
          <img src="assets/img/Z890 Taichi(L1).png" class="card-img-top" alt="">
          <div class="card-body text-center">
            <h5 class="card-title">Z890 Taichi</h5>
            <p class="card-text">Premium Overclocking Board</p>
            <a href="Product/product.php" class="btn btn-outline-light btn-sm">Learn More</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card bg-black border-0 product-card">
          <img src="assets/img/20001.png" class="card-img-top" alt="">
          <div class="card-body text-center">
            <h5 class="card-title">X870E Aorus Pro X3D</h5>
            <p class="card-text">Reliable & Powerful</p>
            <a href="Product/product2.php" class="btn btn-outline-light btn-sm">Learn More</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card bg-black border-0 product-card">
          <img src="assets/img/X870E Nova WiFi(L1).png" class="card-img-top" alt="">
          <div class="card-body text-center">
            <h5 class="card-title">X870E Nova</h5>
            <p class="card-text">Extreme Gaming Performance</p>
            <a href="Product/product3.php" class="btn btn-outline-light btn-sm">Learn More</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card bg-black border-0 product-card">
          <img src="assets/img/h732.png" class="card-img-top" alt="">
          <div class="card-body text-center">
            <h5 class="card-title">Nvidia GeForce RTX 5080 Astral</h5>
            <p class="card-text">The Fastest Graphic Card</p>
            <a href="Product/product4.php" class="btn btn-outline-light btn-sm">Learn More</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card bg-black border-0 product-card">
          <img src="assets/img/Radeon RX 7900 XTX Taichi White 24GB OC(L1).png" class="card-img-top" alt="">
          <div class="card-body text-center">
            <h5 class="card-title">Radeon RX 7900 XTX Taichi White</h5>
            <p class="card-text">Best Graphic Card For Gaming</p>
            <a href="Product/product5.php" class="btn btn-outline-light btn-sm">Learn More</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card bg-black border-0 product-card">
          <img src="assets/img/112.webp" class="card-img-top" alt="">
          <div class="card-body text-center">
            <h5 class="card-title">MPG 850GLS</h5>
            <p class="card-text">Best Power Supply</p>
            <a href="Product/product6.php" class="btn btn-outline-light btn-sm">Learn More</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

 <section id="Support" class="bg-dark text-white margin-top: 80px;">
            <div class="row text-center">
                <div class="col-12 p-5>">
                    <h2 class="display-4">SUPPORT</h2>
                </div>
                <div class="col-12 col-sm-6 col-3">
                        <i class="bi bi-motherboard" style="font-size:80px"></i>
                    <h3>Registration</h3>
                    <p>Register product on the Product Registraion and get more personalized service.</p>
                </div>

                <div class="col-12 col-sm-6 col-3">
                    <i class="bi bi-shield-check" style="font-size:80px"></i>
                    <h3>Warranty</h3>
                    <p>We want you to experience the best service you have ever had. Check the warranty policy online.</p>
                </div>

                <div class="col13">
                    <i class="bi bi-headset" style="font-size:80px"></i>
                    <h3>Customer Service</h3>
                    <p>If you have any further question or suggestions about our service, please contact us via eSupport system.</p>
                </div>

            </div>

       </section>

<!-- Footer -->
<div id="Footer">
    <footer class="bg-black text-center text-white py-4">
  <div style="text-align: center;">
            <p class="text-center mt-4" style="color: white;">Connect With Us</p>
            <a href="https://www.facebook.com/riskhy.dwi.7" class="text-light" title="Facebook"><i class="bi bi-facebook" style="font-size: 20px;"></i></a>
            <a href="https://www.instagram.com/rizkhy_20" class="text-light" title="Instagram"><i class="bi bi-instagram" style="font-size: 20px; padding-left: 6px;"></i></a>
            <a href="https://wa.me/6285706396802?text=Anda ingin bertanya/berkonsultasi?" class="text-light" title="WhatsApp"><i class="bi bi-whatsapp" style="font-size: 20px; padding-left: 6px;"></i></a>
          </div>
  <p class="mb-0">© 2026 TechBrand. All Rights Reserved.</p>
</footer>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS -->
<script src="assets/script.js"></script>

</body>
</html>