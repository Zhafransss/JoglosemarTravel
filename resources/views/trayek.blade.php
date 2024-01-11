@extends('layouts.app')

@section('content')


<link rel="shortcut icon" href="favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Comforter+Brush&family=Heebo:wght@400;500;600;700&display=swap"
    rel="stylesheet">

    <main>
    <article>

      

      <section class="section destination">
        <div class="container">

          <p class="section-subtitle">Jadwal Travel</p>

          <h2 class="h2 section-title">Jadi Kamu mau kemana ?</h2>

          <center>
        <table border="2" cellspacing=0 cellpadding=5 summary="Tabel Menu" bgcolor="white">
        
        
        
        <tr bgcolor="029E9D">
        <th width="35"><font color="white" size="4">No</font>
        <th width="200"><font color="white" size="4">Nama Kendaraan</font>
        <th width="180"><font color="white" size="4">Asal</font>
        <th width="180"><font color="white" size="4">Tujuan</font>
        <th width="150"><font color="white" size="4">Jam Keberangkatan</font>
        <th width="150"><font color="white" size="4">Jam Sampai Tujuan</font>
        
        </tr>
        
        <tbody>
          <tr>
            <td align='center'>1<td align='center'>Innova Reborn<td align='center'>Purwokerto<td align='center'>Magelang
            <td align='center'>12:00 <td align='center'>17:00 
            
          </tr>
        
        <tr>
            <td align='center'>2<td align='center'>Toyota Hiace<td align='center'>Purwokerto<td align='center'>Jogjakarta
            <td align='center'>12:00 <td align='center'>16:00
            
        </tr>
        
        <tr>
           <td align='center'>3<td align='center'>Alphard<td align='center'>Purwokerto<td align='center'>Solo
           <td align='center'>15:00 <td align='center'>19:00
           
        </tr>
        <tr>
          <td align='center'>4<td align='center'>Fortuner<td align='center'>Purwokerto<td align='center'>Semarang
          <td align='center'>15:00 <td align='center'>19:00
          
        </tr>
        <tr>
          <td align='center'>5<td align='center'>Innova Reborn<td align='center'>Purwokerto<td align='center'>Temanggung
          <td align='center'>17:00 <td align='center'>20:00
          
        </tr>
        <tr>
          <td align='center'>6<td align='center'>Innova Reborn<td align='center'>Purwokerto<td align='center'>Purbalingga
          <td align='center'>19:00 <td align='center'>21:00
          
        </tr>
        <tr>
          <td align='center'>7<td align='center'>Alphard<td align='center'>Purwokerto<td align='center'>Klaten
          <td align='center'>12:00 <td align='center'>17:00
          
       </tr>
       <tr>
          <td align='center'>8<td align='center'>Innova Reborn<td align='center'>Purwokerto<td align='center'>Wonosobo
          <td align='center'>12:00 <td align='center'>17:00
          
       </tr>
          <tr>
          <td align='center'>9<td align='center'>Innova Reborn<td align='center'>Semarang<td align='center'>Magelang
          <td align='center'>12:00 <td align='center'>17:00
          
       </tr>
       <tr>
          <td align='center'>10<td align='center'>Toyota Hiace<td align='center'>Semarang<td align='center'>Jogjakarta
          <td align='center'>12:00 <td align='center'>17:00
          
       </tr>
       <tr>
          <td align='center'>11<td align='center'>Alphard<td align='center'>Semarang<td align='center'>Solo
          <td align='center'>12:00 <td align='center'>17:00
          
       </tr>
       <tr>
          <td align='center'>12<td align='center'>Fortuner<td align='center'>Semarang<td align='center'>Temanggung
          <td align='center'>12:00 <td align='center'>17:00
          
       </tr>
       <tr>
          <td align='center'>13<td align='center'>Innova Reborn<td align='center'>Semarang<td align='center'>Purbalingga
          <td align='center'>12:00 <td align='center'>17:00
          
       </tr>
       <tr>
         <td align='center'>14<td align='center'>Innova Reborn<td align='center'>Semarang<td align='center'>Klaten
         <td align='center'>12:00 <td align='center'>17:00
         
       </tr>
       <tr>
         <td align='center'>15<td align='center'>Alphard<td align='center'>Semarang<td align='center'>Wonosobo
         <td align='center'>12:00 <td align='center'>17:00
        
       </tr>
       <tr>
          <td align='center'>16<td align='center'>Innova Reborn<td align='center'>Semarang<td align='center'>Wonosobo
          <td align='center'>12:00 <td align='center'>17:00
          
       </tr>
       <tr>
          <td align='center'>17<td align='center'>Innova Reborn<td align='center'>Jogjakarta<td align='center'>Magelang
          <td align='center'>12:00 <td align='center'>17:00
          
       </tr>
    
       <tr>
          <td align='center'>18<td align='center'>Toyota Hiace<td align='center'>Jogjakarta<td align='center'>Jogjakarta
          <td align='center'>12:00 <td align='center'>16:00
          
       </tr>
       <tr>
          <td align='center'>19<td align='center'>Alphard<td align='center'>Jogjakarta<td align='center'>Solo
          <td align='center'>12:00 <td align='center'>17:00
          
       </tr>
       <tr>
          <td align='center'>20<td align='center'>Fortuner<td align='center'>Jogjakarta<td align='center'>Semarang
          <td align='center'>12:00 <td align='center'>17:00
          
      </tr>
      <tr>
          <td align='center'>21<td align='center'>Innova Reborn<td align='center'>Jogjakarta<td align='center'>Temanggung
          <td align='center'>12:00 <td align='center'>17:00
          
      </tr>
      <tr>
          <td align='center'>22<td align='center'>Innova Reborn<td align='center'>Jogjakarta<td align='center'>Purbalingga
          <td align='center'>12:00 <td align='center'>17:00
          
      </tr>
      <tr>
          <td align='center'>23<td align='center'>Alphard<td align='center'>Jogjakarta<td align='center'>Klaten
          <td align='center'>12:00 <td align='center'>17:00
          
      </tr>
      <tr>
          <td align='center'>24<td align='center'>Innova Reborn<td align='center'>Jogjakarta<td align='center'>Wonosobo
          <td align='center'>12:00 <td align='center'>17:00
          
      </tr>
      <tr>
          <td align='center'>25<td align='center'>Innova Reborn<td align='center'>Solo<td align='center'>Magelang
          <td align='center'>12:00 <td align='center'>17:00
          
      </tr>
      <tr>
          <td align='center'>26<td align='center'>Toyota Hiace<td align='center'>Solo<td align='center'>Jogjakarta
          <td align='center'>12:00 <td align='center'>17:00
          
      </tr>
      <tr>
          <td align='center'>27<td align='center'>Alphard<td align='center'>Solo<td align='center'>Solo
          <td align='center'>12:00 <td align='center'>17:00
          
      </tr>
      <tr>
          <td align='center'>28<td align='center'>Fortuner<td align='center'>Solo<td align='center'>Temanggung
          <td align='center'>12:00 <td align='center'>17:00
          
      </tr>
      <tr>
          <td align='center'>29<td align='center'>Innova Reborn<td align='center'>Solo<td align='center'>Purbalingga
          <td align='center'>12:00 <td align='center'>17:00
          
      </tr>
      <tr>
          <td align='center'>30<td align='center'>Innova Reborn<td align='center'>Solo<td align='center'>Klaten
          <td align='center'>12:00 <td align='center'>17:00
          
      </tr>
      <tr>
          <td align='center'>31<td align='center'>Alphard<td align='center'>Solo<td align='center'>Wonosobo
          <td align='center'>12:00 <td align='center'>17:00
          
      </tr>
      <tr>
          <td align='center'>32<td align='center'>Innova Reborn<td align='center'>Solo<td align='center'>Wonosobo
          <td align='center'>12:00 <td align='center'>17:00
          
      </tr>
        




        </table>
          

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

  <footer class="footer" style="background-image: url('footer-bg.png')">
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
            <a href="trayek" class="footer-link">Pesan Tiket</a>
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

@endsection


