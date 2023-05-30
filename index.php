<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" type="image/png" href="./src/public/icon.png" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&family=Nunito:wght@300;500&family=Podkova:wght@500&family=Signika+Negative:wght@500&display=swap" rel="stylesheet" />

    <script type="text/javascript" src="https://www.bing.com/api/maps/mapcontrol?key=Avnu0ji1_4GO78QnO-6TuZN_vuDCUYQtyqL1QgA3hROdiQGbUn514KyTM0b5ESeb"></script>
    <title>GreenTechify</title>

    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="stylesheet" href="/src/styles/style.css" />
  </head>
  <body onload="loadMapScenario()">
    <!-- Navbar-->
    <nav class="navbar">
      <a href="#home"><img src="/src/public/image/Logo.png" class="logo" alt="GreenTechify Logo" />

      <div class="navbar-nav">
        <a href="#mapnav">Peta</a>
        <a href="#calculate">Kalkulator Karbon</a>
        <a href="#pelaporan">Pelaporan</a>
        <a href="#abouts">About US</a>
      </div>

      <div class="navbar-extra">
        <a id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>

    <!-- Hero -->
    <section class="hero" id="home">
      <main class="hero-content">
      <h1>Tanaman Memberikan Dampak <br>Positif Pada <span> Lingkungan</span></h1>
      <p>Menggabungkan Teknologi dan Lingkungan untuk <br>Dunia yang Lebih Hijau</p>
      <a href="#" class="btn">Tertarik?</a>
      <br>
      <h2>Registrasi & Login</h2>
            <ul>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
    </main>
    <div class="images-1">
      <img src="/src/public/image/img2.png" class="lead1" alt="" />
    </div>
    </section>

    <section class="content">
      <h2>Pentingnya Penghijauan dalam <br>Masa Kini</h2>
      <p>Pohon memiliki peran vital dalam menjaga <br>
        keseimbangan ekosistem. Mereka berfungsi <br>
        sebagai produsen utama yang mengubah karbon <br> 
        dioksida menjadi oksigen melalui proses <br>
        fotosintesis. Oksigen yang dihasilkan oleh pohon <br> 
        sangat penting bagi kelangsungan hidup makhluk <br> 
        hidup lainnya, termasuk manusia. Selain itu, <br>
        pohon juga menyediakan habitat bagi berbagai<br>
        spesies tumbuhan dan hewan, serta menyimpan <br>
        keanekaragaman hayati yang kaya.</p>
      
      <div class="images-2">
        <img src="/src/public/image/content.png" alt="">
      </div>
    </section>

    <!-- MAPS Section -->
    <section class="maps" id="mapnav">
      <h1>Daerah Penghijauan Se-Indonesia</h1>
      <main class="map">
        <div id="map"></div>
      </main>
    </section>

    <!-- Kalkulator Section -->
    <section class="calculators" id="calculate">
      <main class="calculator"></main>
      <h1>Kalkulator Emisi Karbon</h1>
      <div class="clc">
        <img src="/src/public/image/Calculator.png" alt="">
      </div>
      <label for="electricity"><img src="/src/public/image/electric.png" alt=""></i>Pemakaian Listrik (KWh)</label>
      <input type="number" id="electricity" name="electricity">

      <label for="gasoline"><img src="/src/public/image/fuel.png" alt="">Pemakaian Bensin (Liter)</label>
      <input type="number" id="gasoline" name="gasoline">

      <label for="diesel"><img src="/src/public/image/oil.png" alt=""> Pemakaian Solar (Liter)</label>
      <input type="number" id="diesel" name="diesel">

      <button type="button" id="calculate-button">Hitung Jejak Karbon</button>


      <p id="result"></p>
    </section>

    <!-- Pelaporan Section -->
    <section class="report" id="pelaporan">
      <h1>Pelaporan Lokasi Penghijauan</h1>
      <h3>"Bergabunglah dengan kami dalam menjaga lingkungan Indonesia! <br>Laporkan lokasi yang membutuhkan penghijauan dan bersama-sama <br> kita bisa menciptakan daerah yang lebih hijau dan sejuk." </h3>
      <div class="leaf"><img src="/src/public/image/image1.png" alt=""></div>
      <div class="leaf2"><img src="/src/public/image/image2.png" alt=""></div>
      <button type="button" id="">Mulai Melaporkan</button>
    </section>

    <section class="about" id="abouts">
      <h1>Tentang Kami</h1>
      <div class="card-container">
        <div class="card">
          <img src="/src/public/image/Syahrul-Nizam.jpg" alt="Profile Picture">
          <h3>Syahrul Nizam</h3>
          <p>Aku butuh duiittt!!!</p>
        </div>
    
        <div class="card">
          <img src="/src/public/image/Rizka-Rosalinda.png" alt="Profile Picture">
          <h3>Rizka Rosalinda Pratiwi</h3>
          <p>Sipaling jamet BEKASI</p>
        </div>
    
        <div class="card">
          <img src="/src/public/image/Ismail-Marzuki.jpg" alt="Profile Picture">
          <h3>Ismail Marzuki</h3>
          <p>Upin Ipin Friends</p>
        </div>
    
        <div class="card">
          <img src="/src/public/image/Deshinta-Modeong.jpg" alt="Profile Picture">
          <h3>Deshinta Modeong</h3>
          <p>gatau isi apa</p>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="footer-content">
        <div class="footer-section">
          <h4>Content Utama</h4>
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#mapnav">Peta Penghijauan</a></li>
            <li><a href="#calculate">Kalkulator Karbon</a></li>
            <li><a href="#">Kontak</a></li>
          </ul>
        </div>
        <div class="footer-section">
          <div class="logo-social">
            <img src="/src/public/image/Logo.png" class="logo" alt="GreenTechify Logo" />
            <h4>Mulai melaporkan penghijauan?</h4>
            <h4>Temukan Kami di Sosial Media</h4>
            <div class="social-media">
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-github"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
        </div>
        <div class="footer-section">
          <h4>Informasi Kontak</h4>
          <p>Email: info@greentechify.com</p>
          <p>Telepon: +62xxx</p>
          <p>Alamat: Jl. Xxx No.X</p>
        </div>
      </div>
    </footer>
    

    <script>
      feather.replace();
    </script>

    <script src="/src/scripts/index.js"></script>
  </body>
</html>
