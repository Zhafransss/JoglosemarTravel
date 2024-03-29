@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JOGLOSEMAR</title>
  

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="{{ asset('admin_assets/styleqr.css') }}
">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Comforter+Brush&family=Heebo:wght@400;500;600;700&display=swap"
    rel="stylesheet">

</head>

<style>

.qr{
  
  width: 300px;
  
  transform:translate(410px, 11px);
  

}

</style>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <!-- <header class="header" data-header>
    <div class="container">

      <a href="index.html">
        <h1 class="logo">JogloSemar </h1>
      </a>

      <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu">
        <ion-icon name="menu-outline" class="open"></ion-icon>
        <ion-icon name="close-outline" class="close"></ion-icon>
      </button>

      <nav class="navbar">

        <ul class="navbar-list">

        <li>
            <a href="home" class="navbar-link">Home</a>
          </li>
          <li>
            <a href="trayek" class="navbar-link">Jadwal Travel</a>
          </li>
          <li>
            <a href="pesan" class="navbar-link">Pesan Now</a>
          </li>
          <li>
            <a href="lacak" class="navbar-link">Lacak Paket</a>
          </li>
          <li>
            <a href="home#Aboutme" class="navbar-link">About Us</a>
          </li>
          <li>
            <a href="https://wa.me/+6285173240443" class="navbar-link">Contact Us</a>
          </li>

        </ul>

        
        

      </nav>

    </div>
  </header> -->





  <main>
    <article>

      

      <section class="section destination">
        <div class="container">

          

          <h2 class="h2 section-title">Pindai QR</h2>
          <img src="{{ asset('admin_assets/qr.jpg') }}" class="qr">

          

        </div>
      </section>
      
        <br/>
        <br/>
        </form>
        </body>
        </html>
      






      

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer" style="background-image: url('{{ asset('admin_assets/footer-bg.png') }}')">
    <div class="container">

      <div class="footer-top">

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Kota Tujuan</p>
          </li>

          <li>
            <a href="#destinasi" class="footer-link">Semarang</a>
          </li>

          <li>
            <a href="#destinasi" class="footer-link">Solo</a>
          </li>

          <li>
            <a href="#destinasi" class="footer-link">Jogjakarta</a>
          </li>

          <li>
            <a href="#destinasi" class="footer-link">Wonosobo</a>
          </li>

          <li>
            <a href="#destinasi" class="footer-link">Purwokerto</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Categories</p>
          </li>

          <li>
            <a href="#" class="footer-link">Travel</a>
          </li>

          <li>
            <a href="#" class="footer-link">Package</a>
          </li>

          <li>
            <a href="#" class="footer-link">Education</a>
          </li>

          <li>
            <a href="#" class="footer-link">Food & Drink</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Quick links</p>
          </li>

          <li>
            <a href="#Aboutme" class="footer-link">About</a>
          </li>

          <li>
            <a href="https://wa.me/+6285173240443" class="footer-link">Contact</a>
          </li>

          <li>
            <a href="login.html" class="footer-link">Pesan Tiket</a>
          </li>

          <li>
            <a href="paket.html" class="footer-link">Lacak Paket</a>
          </li>

        </ul>

        <div class="footer-list">

          <p class="footer-list-title">Get a newsletter</p>

          <p class="newsletter-text">
            For the latest deals and tips, travel no further than your inbox
          </p>

          <form action="" class="newsletter-form">
            <input type="email" name="email" required placeholder="Email address" class="newsletter-input">

            <button type="submit" class="btn btn-primary">Subscribe</button>
          </form>

        </div>

      </div>

      <div class="footer-bottom">

        <a href="#" class="logo">JogloSemar</a>

        <p class="copyright">
          &copy; 2022 <a href="#" class="copyright-link">JogloSemar</a>. All Rights Reserved
        </p>

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-google"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </div>
  </footer>





  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top aria-label="Go To Top">
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>

@endsection 