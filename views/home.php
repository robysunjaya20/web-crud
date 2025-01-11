<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food and Beverage Landing Page</title>
    <link href="assets/css/main.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #FF5722;
            color: white;
            padding: 1rem 0;
            text-align: center;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 0 1rem;
        }
        nav .menu {
            display: flex;
        }
        nav a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
            display: block;
        }
        nav a:hover {
            background-color: #575757;
        }
        nav img {
            height: 40px;
            border-radius: 50%;
        }
        section {
            padding: 2rem;
            text-align: center;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1rem 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<!-- Hero Section -->
<section id="hero" class="hero section dark-background">

  <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

  <div class="container">
    <div class="row">
      <div class="col-lg-8 d-flex flex-column align-items-center align-items-lg-start">
        <h2 data-aos="fade-up" data-aos-delay="100">Welcome to <span>Restaurant Roby</span></h2>
        <p data-aos="fade-up" data-aos-delay="200">Tempat ternyaman untuk memuaskan perut anda</p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
          <a href="?page=makanan" class="cta-btn">Menu Lainya</a>
          <a href="?page=makanan" class="cta-btn">Daftar Makanan</a>
        </div>
      </div>
    </div>
  </div>

</section><!-- /Hero Section -->

<!-- About Section -->
<section id="about" class="about section">

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row gy-4">
    <div class="col-lg-6 order-1 order-lg-2">
      <img src="assets/img/about.jpg" class="img-fluid about-img" alt="">
    </div>
    <div class="col-lg-6 order-2 order-lg-1 content">
      <h3>Restaurant Roby</h3>
      <p class="fst-italic">
        JL. Mencintaimu sampai mati, Cikarang Pusat, Bekasi
      </p>
      
      <p>
      Restoaurant Roby menyajikan makanan Korea autentik dengan konsep all you can eat. Resto ini cocok dikunjungi bersama keluarga atau teman karena porsi makannya yang besar dan suasana tempatnya nyaman.
      </p>
      <p>Kalau ke sini kamu bisa mencoba menu favoritnya, yaitu Roast Chicken Original, BBQ Roast Chicken, dan Bonless Fried Chicken. Tersedia juga berbagai macam saus yang bisa kamu pilih untuk menemani hidangan utama. </p>
    </div>
  </div>

</div>

</section><!-- /About Section -->

<!-- Why Us Section -->
<section id="why-us" class="why-us section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Mengapa</h2>
  <p>Memilih Restoran Kami</p>
</div><!-- End Section Title -->

<div class="container">

  <div class="row gy-4">

    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
      <div class="card-item">
        <span>01</span>
        <h4><a href="" class="stretched-link">Kualitas Makanan yang Unggul</a></h4>
        <p>Kami menggunakan bahan-bahan segar dan berkualitas untuk setiap hidangan, memastikan cita rasa yang autentik dan lezat.</p>
      </div>
    </div><!-- Card Item -->

    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
      <div class="card-item">
        <span>02</span>
        <h4><a href="" class="stretched-link">Variasi Menu yang Menarik</a></h4>
        <p>Restoran kami menawarkan berbagai pilihan menu yang dapat memenuhi selera setiap pelanggan, dari hidangan khas lokal hingga internasional.</p>
      </div>
    </div><!-- Card Item -->

    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
      <div class="card-item">
        <span>03</span>
        <h4><a href="" class="stretched-link">Suasana Nyaman dan Berkelas</a></h4>
        <p>Restoran kami dirancang untuk memberikan suasana yang nyaman dan menyenangkan, cocok untuk makan bersama keluarga, teman, atau acara spesial.</p>
      </div>
    </div><!-- Card Item -->

  </div>

</div>

</section><!-- /Why Us Section -->

</body>
</html>
