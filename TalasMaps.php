<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>AppGrids - Bootstrap 5 App Landing Page Template</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="assets/img/favicon.svg"
    />
    <!-- ========================= CSS here ========================= -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/main.css" />

    <style>
      input[type="text"] {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
      }
  
      input[type="submit"] {
        padding: 8px 16px;
        background-color: #8743DF;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
      }
  
      input[type="submit"]:hover {
        background-color: #69318F;
      }
    </style>
  </head>
  <body>
    <!-- ========================= preloader start ========================= -->
    <div class="preloader">
      <div class="loader">
        <div class="ytp-spinner">
          <div class="ytp-spinner-container">
            <div class="ytp-spinner-rotator">
              <div class="ytp-spinner-left">
                <div class="ytp-spinner-circle"></div>
              </div>
              <div class="ytp-spinner-right">
                <div class="ytp-spinner-circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- preloader end -->

    <!-- ========================= header start ========================= -->
    <header class="header">
      <div class="navbar-area">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.php">
                  <img src="assets/img/logo/logo.png" alt="Logo" />
                </a>
                <button
                  class="navbar-toggler"
                  type="button"
                  data-toggle="collapse"
                  data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                </button>

                <div
                  class="collapse navbar-collapse sub-menu-bar justify-content-end"
                  id="navbarSupportedContent"
                >
                  <ul id="nav" class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="forum.php">Forum</a>
                    </li>
                    <li class="nav-item">
                      <a href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="page-scroll" href="#download">Talas</a>
                      <div class="dropdown-content">
                        <a href="TalasInfo.php">TalasInfo</a>
                        <a href="TalasAI.php">TalasAI</a>
                        <a href="TalasMaps.php">TalasMaps</a>
                        <a href="TalasDetection.php">TalasDetection</a>
                      </div>
                    </li>
                    <li class="nav-item2">
                      <div class="border-first-button">
                        <a href="#contact">Sign In</a>
                      </div>
                    </li>
                    <!-- <li class="nav-item3">
                      <div class="border-first-button">
                        <a href="#contact">Sign Up</a>
                      </div>
                    </li> -->
                  </ul>
                </div>
                <!-- navbar collapse -->
              </nav>
              <!-- navbar -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- navbar area -->
    </header>
    <!-- ========================= header end ========================= -->

    <!-- ========================= feature-section start ========================= -->
    <section id="feature" class="feature-section pt-140">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xxl-12 col-xl-12 col-lg-8">
            <div class="section-title text-center mb-30">
              <h2 class="mb-50 wow fadeInUp" data-wow-delay=".2s">
              Pesebaran Toko Obat Hama di Bogor
              </h2>
              <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="single-feature">
                    <div class="content">
                      <div id="map">
                <iframe src="Maps/index.html" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- ========================= feature-section end ========================= -->

    <!-- ========================= tracking-section start ========================= -->
    <section id="tracking" class="tracking-section pt-150">
      <div class="container">
        <div class="row align-items-center">
          <!-- ========================= Filter-section start ========================= -->
          <div class="col-lg-1 col-xl-5">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title">Jenis Toko</h3>
                <div class="card-text">
                  <p><input type="checkbox" name="Obat Tanaman"/> Obat Tanaman</p>
                  <p><input type="checkbox" name="Olahan Talas"/> Olahan Talas</p>
                  <p><input type="checkbox" name="Hasil Panen Talas"/> Hasil Panen Talas</p>
                </div>
                <h3 class="card-title">Lokasi Toko</h3>
                <div class="card-text">
                  <p><input type="checkbox" name="kota bogor"/> Kota Bogor</p>
                  <p><input type="checkbox" name="kabupaten bogor"/> Kabupaten Bogor</p>
                </div>
                <h3 class="card-title">Rating Toko</h3>
                <div class="card-text">
                  <p><input type="checkbox" name="lima_rating"/> <img src="images/Bintang/Bintang_5.png" height="35"/></p>
                  <p><input type="checkbox" name="empat_rating"/> <img src="images/Bintang/Bintang_4.png" height="35"/></p>
                  <p><input type="checkbox" name="tiga_rating"/> <img src="images/Bintang/Bintang_3.png" height="35"/></p>
                  <p><input type="checkbox" name="dua_rating"/> <img src="images/Bintang/Bintang_2.png" height="35"/></p>
                  <p><input type="checkbox" name="lima_rating"/> <img src="images/Bintang/Bintang_1.png" height="35"/></p>
                </div>
              </div>
            </div>
          </div>
          <!-- ========================= Filter-section end ========================= -->
          <!-- ========================= Content-section start ========================= -->
          <div class="col-lg-6 col-xl-7">
            <div class="tracking-content">
              <div class="section-title mb-50">
                <form action="#" method="get">
                  <input type="text" name="search">
                  <input type="submit" value="Search">
                </form>
              </div>
              <div class="row mb-30">
                <div class="col-md-2">
                  <div class="border-first-button">
                    <a href="#">Semua</a>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="border-first-button">
                    <a href="#">Rekomendasi</a>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="border-first-button">
                    <a href="#">Terdekat</a>
                  </div>
                </div>
              </div>
              <div class="row mb-30">
                <div class="col-md-6">
                  <div class="card">
                    <img
                      src="images/Bintang/Toko tani jaya.png"
                      style="max-width: 100%; height: 167px"
                      alt="Gambar Card"
                    />
                    <div class="card-body">
                      <h3 class="card-title">Tani Jaya</h3>
                      <img src="images/Bintang/Bintang_5.png" height="15"><br/><br/>
                      <a href="detail_toko.html" class="btn btn-small btn-main btn-round-full"
                        >Lihat Detail</a
                      >
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <img
                      src="images/Bintang/Toko pertanian pilar tani.png"
                      style="max-width: 100%; height: 167px"
                      alt="Gambar Card"
                    />
                    <div class="card-body">
                      <h3 class="card-title">Pertanian Pilar Tani</h3>
                      <img src="images/Bintang/Bintang_4.png" height="15"><br/><br/>
                      <a href="#" class="btn btn-small btn-main btn-round-full"
                        >Lihat Detail</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ========================= Content-section end ========================= -->
        </div>
      </div>
    </section>
    <!-- ========================= tracking-section end ========================= -->
    <!-- ========================= footer start ========================= -->
    <footer id="footer" class="footer">
      <!-- <div class="footer-shape">
        <img
          src="assets/img/footer/asd.png"
          alt=""
          class="shape shape-1"
        />
      </div> -->
      <div class="container">
        <div class="widget-wrapper">
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
              <div class="footer-widget">
                <div class="logo">
                  <a href="index.php">
                    <img
                      src="assets/img/logo/logo2.png"
                      alt=""
                      class="logo-2"
                    />
                    <img src="assets/img/logo/logo.png" alt="" class="logo-1" />
                  </a>
                  <div class="accordion-body">
                  <p>
                  Sumber informasi dan komunitas peduli tanaman talas di Bogor. Tempat berbagi pengalaman
                dan belajar untuk mendapatkan wawasan baru dalam menjaga kesehatan tanaman talas. </p>
                <p>© TalasCare 2023</p>
            </div>
                </div>
               
              </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
              <div class="footer-widget">
                <h3>Alamat</h3>
                <p>Jln Kumbang No. 14, RT.02/RW.06, Babakan, Kec. Bogor Tengah, Kota Bogor, Jawa Barat 16128</p>
              </div>
            </div>

            <div class="col-xl-3 col-lg-2 col-md-6 col-sm-6">
              <div class="footer-widget">
                <h3>Kontak</h3>
                <p>Email: sv@apps.ipb.ac.id<p>
                <p>No Telp: (0251) 8376845<p>
              </div>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
              <div class="footer-widget">
                <h3></h3>
                <ul class="socials">
                  <li>
                    <a href="facebook.com">
                      <i class="lni lni-facebook-filled"></i>
                    </a>
                  </li>
                  <li>
                    <a href="twitter.com">
                      <i class="lni lni-twitter-filled"></i>
                    </a>
                  </li>
                  <li>
                    <a href="instagram.com">
                      <i class="lni lni-instagram-filled"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="copy-right-wrapper">
          <p>
            Designed and Developed by
            <a href="#" rel="nofollow" target="_blank"
              >Net Think</a
            >
          </p>
        </div>
      </div>
    </footer>
    <!-- ========================= footer end ========================= -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
      <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="assets/js/bootstrap.5.0.0.alpha-2-min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

  </body>
</html>
