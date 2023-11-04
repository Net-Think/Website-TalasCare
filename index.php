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
                      <a  href="forum.php">Forum</a>
                    </li>
                    <li class="nav-item">
                      <a  href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="page-scroll" href="#download">Talas</a>
                      <div class="dropdown-content">
                        <a href="TalasInfo.php">TalasInfo</a>
                        <a href="TalasAI.php">TalasAI</a>
                        <a href="#">TalasMaps</a>
                        <a href="TalasDetection.php">TalasDetection</a>
                      </div>
                    </li>
                    <li class="nav-item2">
                      <div class="border-first-button">
                        <a href="login.php">Sign In</a>
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

    <!-- ========================= hero-section start ========================= -->
    <section id="home" class="hero-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content">
              <h1 class="wow fadeInUp" data-wow-delay=".2s">
                TalasCare
              </h1>
			  <h2 class="wow fadeInUp" data-wow-delay=".2s">Bersama Melawan Hama dan Penyakit Tanaman Talas</h2>
              <p class="wow fadeInUp mt-20" data-wow-delay=".4s">
				Sebuah website sumber informasi dan komunitas peduli tanaman talas di Bogor
              </p>
              <div class="hero-btns">
                <a
                  href="#"
                  class="main-btn btn-hover wow fadeInUp"
                  data-wow-delay=".6s"
                  >Gabung Sekarang</a
                >
                <a
                  href="#"
                  class="main-btn border-btn btn-hover wow fadeInUp"
                  data-wow-delay=".6s"
                  >Konsultasi AI</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero-img wow fadeInUp" data-wow-delay=".5s">
              <img src="assets/img/hero/icon.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ========================= hero-section end ========================= -->

    <!-- ========================= feature-section start ========================= -->
    <section id="feature" class="feature-section pt-140">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xxl-5 col-xl-6 col-lg-7">
            <div class="section-title text-center mb-30">
              <h1 class="mb-25 wow fadeInUp" data-wow-delay=".2s">
                Visi Misi Talas Care
              </h1>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-8 col-sm-10">
            <div class="single-feature">
              <div class="icon color-1">
              <i class="lni lni-heart"></i>
              </div>
              <div class="content">
                <h3>Solusi Kesehatan Tanaman Talas Yang Terpercaya</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-8 col-sm-10">
            <div class="single-feature">
              <div class="icon color-2">
              <i class="lni lni-eye"></i>
              </div>
              <div class="content">
                <h3>Deteksi Hama dan Penyakit Tanaman Talas dengan AI</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-8 col-sm-10">
            <div class="single-feature">
              <div class="icon color-3">
                <i class="lni lni-grow"></i>
              </div>
              <div class="content">
                <h3>Dukung Ketahanan Pangan Indonesia</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ========================= feature-section end ========================= -->

    <!-- ========================= feature-section start ========================= -->
    <section id="feature" class="feature-section pt-140">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xxl-12 col-xl-12 col-lg-8">
            <div class="section-title text-center mb-30">
				<h1 class="mb-50 wow fadeInUp" data-wow-delay=".2s">
					Pesebaran Toko Obat Hama di Bogor
				  </h1>
              <div class="widget">
                <div class="widget-item">
                  <h1>124</h1>
                  <p>Total Toko Obat Hama</p>
                </div>
                <div class="widget-item">
                  <h1>456</h1>
                  <p> di Kota Bogor</p>
                </div>
                <div class="widget-item">
                  <h1>789</h1>
                  <p>di Kabupaten Bogor</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="single-feature">
              <div class="content">
                <div id="map">
					<iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe>
				  </div>
            </div>
          </div>
        </div>
		<div class="row justify-content-center">
			<div class="col-lg-6 col-md-12 col-sm-12">
		<a
                  href="#"
                  class="map-btn btn-hover wow fadeInUp"
                  data-wow-delay=".6s"
                  >Lihat Lebih Lengkap</a
                >
				</div></div>
      </div>
    </section>
    <!-- ========================= feature-section end ========================= -->

    <!-- ========================= tracking-section start ========================= -->
    <section class="search-section pt-150">
      <div class="container pt-100">
        <div class="row align-items-left">

            <div class="search-content">
              <div class="section-title text-left mb-50">
                <h1 class="mb-40 wow fadeInUp" data-wow-delay=".2s">
                Talas Terserang Hama & Penyakit? Perhatikan Ciri-cirinya!
                </h1>

                <div class="container">
          <div class="row">
            <div class="col-xl-5 col-lg-5">
              <div class="blog-item">
                <img src="assets/images/talas-lubang.png"
                alt=""
                class="img-fluid rounded float-left"/>
              </div>
            </div>

            <div class="text-left col-xl-6">
                <h3>Daun Tanaman Berlubang</h3>
                <p>
                  Biasanya, hama yang sudah diketahui sering menyerang tanaman talas dengan ciri-ciri
                  di antaranya: <br>• Ngengat Elang Anggur, <br>• Belalang Bertanduk Pendek, <br>• Wereng Pucuk Teh,<br>• dan Ulat Grayak.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
			<div class="col-lg-6 col-md-12 col-sm-12">
		<a
                  href="#"
                  class="map-btn btn-hover wow fadeInUp"
                  data-wow-delay=".6s"
                  >Ayo Ketahui Lebih Banyak!</a
                >
				</div></div>
      </div>
      </div>
    </div>
  </div>
</div>
          </div>
    </section>
	
    <!-- ========================= tracking-section end ========================= -->

    <!-- ========================= search-section start ========================= -->
    <section class="search-section pt-150">
      <div class="container">
        <div class="row align-items-center">
            <div class="search-content">
              <div class="section-title text-center mb-40">
                <h1 class="mb-40 wow fadeInUp" data-wow-delay=".2s">
                   3 Fitur Andalan TalasCare
                </h1>
              </div>
              <div class="app-info">
                <div class="single-info">
                <img src="assets/image/beranda/forum.png">
                  <h4>Forum Diskusi</h4>
                </div>
                <div class="single-info">
                <img src="assets/image/beranda/talasdetection.png">
                  <h4>TalasDetection</h4>
                </div>
                <div class="single-info">
					<img src="assets/image/beranda/talasai.png">
                  <h4>TalasAI</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	
    <!-- ========================= search-section end ========================= -->
	
 <!-- FAQ Section Starts -->
 <section id="faq">

    <div class="container my-5 py-5 ">
      <h2 class="text-center  mb-5">Frequently asked questions</h2>


      <div class="accordion col-md-10 offset-md-1" id="accordionPanelsStayOpenExample">

        <div class="accordion-item mt-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-delay="0">
          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse"
              data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
              aria-controls="panelsStayOpen-collapseOne">
              Apa ciri - ciri tanaman talas terkena hama?
            </button>
          </h2>
          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
            <div class="accordion-body">
              <p>Beberapa ciri umum talas terkena hama adalah daun berlubang-lubang, layu, menguning, atau kering, dan umbi membusuk.</p>
            </div>
          </div>
        </div>
        <div class="accordion-item mt-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-delay="200">
          <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
              aria-controls="panelsStayOpen-collapseTwo">
              Hama apa yang sering menyerang tanaman talas?
            </button>
          </h2>
          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingTwo">
            <div class="accordion-body">
              <p>
Hama yang sering menyerang tanaman talas adalah ulat daun, belalang, kutu daun, penggerek batang, tungau merah, dan ulat grayak. Hama-hama ini dapat menyerang bagian daun, batang, maupun umbi talas.</p>
            </div>
          </div>
        </div>
        <div class="accordion-item mt-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-delay="400">
          <h2 class="accordion-header" id="panelsStayOpen-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
              aria-controls="panelsStayOpen-collapseThree">
              Penyakit apa yang sering menyerang tanaman talas?
            </button>
          </h2>
          <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingThree">
            <div class="accordion-body">
              <p>
Penyakit yang sering menyerang tanaman talas adalah busuk umbi, hawar daun, dan layu bakteri. Penyakit-penyakit ini dapat menyebabkan kematian tanaman talas.</p>
            </div>
          </div>
        </div>
        <div class="accordion-item mt-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-delay="600">
          <h2 class="accordion-header" id="panelsStayOpen-headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
              aria-controls="panelsStayOpen-collapseFour">
              Bagaimana cara mengendalikan hama belalang?
            </button>
          </h2>
          <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingFour">
            <div class="accordion-body">
              <p>Hama belalang dapat dikendalikan dengan cara pengendalian fisik, hayati, atau kimia. Pengendalian fisik dilakukan dengan mengumpulkan dan memusnahkan belalang secara manual. Pengendalian hayati dilakukan dengan memanfaatkan musuh alami belalang, seperti burung, katak, dan capung. Pengendalian kimia dilakukan dengan menggunakan pestisida yang sesuai.</p>
            </div>
          </div>
        </div>
        <div class="accordion-item mt-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-delay="800">
          <h2 class="accordion-header" id="panelsStayOpen-headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
              aria-controls="panelsStayOpen-collapseFive">
              Berapa rasio pupuk urea yang baik untuk tanaman talas?
            </button>
          </h2>
          <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingFive">
            <div class="accordion-body">
              <p>Rasio pupuk urea yang baik untuk tanaman talas adalah 100-150 kg urea/ha. Rasio ini dapat disesuaikan dengan kondisi lahan dan jenis talas yang dibudidayakan.</p>
            </div>
          </div>
        </div>



      </div>

    </div>
  </section>
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
