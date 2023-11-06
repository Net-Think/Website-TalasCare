<!DOCTYPE html>
<html class="no-js" lang="">
<?php include 'views/Head.php' ?>
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
                      <a class="page-scroll" href="#feature">Forum</a>
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

    <!-- ========================= hero-section start ========================= -->
    <section class="page-title bg-1">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="block text-center">
              <span class="text-white">Our blog</span>
              <h1 class="text-capitalize mb-4 text-lg">TalasCare Blog</h1>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a href="index.php" class="text-white-50">Home</a>
                </li>
                <li class="list-inline-item">
                  <span class="text-white">/</span>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="text-white">Blog</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section blog-wrap bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 mb-5">
            <div class="blog-item">
              <img
                src="assets/img/blog/cover1.jpeg"
                alt=""
                class="img-fluid rounded"
              />

              <div class="blog-item-content bg-white p-5">
                <div class="blog-item-meta bg-gray py-1 px-2">
                  <span class="text-black text-capitalize mr-3"
                    ><i class="ti-pencil-alt mr-2"></i>Muhammad Faiz R
                  </span>
                  <span class="text-black text-capitalize mr-3"
                    ><i class="ti-time mr-1"></i> 28th January</span
                  >
                </div>
                
                <h3 class="mt-3 mb-3">
                  <a href="blog/detail.php"
                    >Manfaat Tanaman Talas bagi Kehidupan Manusia</a>
                </h3>
                <p class="mb-4">
                  Ada banyak sekali jenis tanaman yang ada di dunia ini. Dari
                  sekian jenis tanaman, ada yang berbahaya dan ada juga yang
                  bermanfaat bagi manusia...
                </p>

                <a
                  href="blog/detail.php"
                  class="btn btn-small btn-main btn-round-full"
                  >Details</a
                >
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 mb-5">
            <div class="blog-item">
              <img
                src="assets/img/blog/cover2.png"
                alt=""
                class="img-fluid rounded"
              />

              <div class="blog-item-content bg-white p-5">
                <div class="blog-item-meta bg-gray py-1 px-2">
                  <span class="text-black text-capitalize mr-3"
                    ><i class="ti-pencil-alt mr-2"></i>Muhammad Fiqih</span
                  >
                  <span class="text-black text-capitalize mr-3"
                    ><i class="ti-time mr-1"></i> 28th January</span
                  >
                </div>

                <h3 class="mt-3 mb-3">
                  <a href="blog/detail.php"
                    >Talas salah satu Alternatif Penyangga Ketahanan Pangan</a
                  >
                </h3>
                <p class="mb-4">
                  Ketahanan pangan merupakan salah satu sektor yang terpengaruh
                  secara langsung dari dampak kejadian perubahan iklim saat
                  ini,...
                </p>

                <a href="#" class="btn btn-small btn-main btn-round-full"
                  >Details</a
                >
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 mb-5">
            <div class="blog-item">
              <img
                src="assets/img/blog/cover3.png"
                alt=""
                class="img-fluid rounded"
              />

              <div class="blog-item-content bg-white p-5">
                <div class="blog-item-meta bg-gray py-1 px-2">
                  <span class="text-black text-capitalize mr-3"
                    ><i class="ti-pencil-alt mr-2"></i>Irna Aulia</span
                  >
                  <span class="text-black text-capitalize mr-3"
                    ><i class="ti-time mr-1"></i> 28th January</span
                  >
                </div>

                <h3 class="mt-3 mb-3">
                  <a href="blog/detail.php"
                    >Melirik Potensi Talas sebagai Pangan Lokal</a
                  >
                </h3>
                <p class="mb-4">
                  Talas selama ini menjadi icon oleh-oleh dari Kota Bogor.Bahkan
                  di kota hujan tersebut kini berkembang produk olahan pangan...
                </p>

                <a href="#" class="btn btn-small btn-main btn-round-full"
                  >Details</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 mb-5">
            <div class="blog-item">
              <img
                src="assets/img/blog/cover4.png"
                alt=""
                class="img-fluid rounded"
              />

              <div class="blog-item-content bg-white p-5">
                <div class="blog-item-meta bg-gray py-1 px-2">
                  <span class="text-black text-capitalize mr-3"
                    ><i class="ti-pencil-alt mr-2"></i>Zaky Ahmad Faisal
                  </span>
                  <span class="text-black text-capitalize mr-3"
                    ><i class="ti-time mr-1"></i> 28th January</span
                  >
                </div>

                <h3 class="mt-3 mb-3">
                  <a href="blog/detail.php"
                    >Tanaman Talas, Bukan Hanya Milik Bogor</a
                  >
                </h3>
                <p class="mb-4">
                  Pakar botani LIPI Made Sri Prana, seperti dikutip dalam laman
                  biotek.lipi.go.id, menyatakan, “Talas merupakan plasma
                  nutfah...
                </p>

                <a
                  href="blog/detail.php"
                  class="btn btn-small btn-main btn-round-full"
                  >Details</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 mb-5">
            <div class="blog-item">
              <img
                src="assets/img/blog/cover3.png"
                alt=""
                class="img-fluid rounded"
              />

              <div class="blog-item-content bg-white p-5">
                <div class="blog-item-meta bg-gray py-1 px-2">
                  <span class="text-black text-capitalize mr-3"
                    ><i class="ti-pencil-alt mr-2"></i>Irna Aulia</span
                  >
                  <span class="text-black text-capitalize mr-3"
                    ><i class="ti-time mr-1"></i> 28th January</span
                  >
                </div>

                <h3 class="mt-3 mb-3">
                  <a href="blog/detail.php"
                    >Melirik Potensi Talas sebagai Pangan Lokal</a
                  >
                </h3>
                <p class="mb-4">
                  Talas selama ini menjadi icon oleh-oleh dari Kota Bogor.Bahkan
                  di kota hujan tersebut kini berkembang produk olahan pangan...
                </p>

                <a href="#" class="btn btn-small btn-main btn-round-full"
                  >Details</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 mb-5">
            <div class="blog-item">
              <img
                src="assets/img/blog/cover4.png"
                alt=""
                class="img-fluid rounded"
              />

              <div class="blog-item-content bg-white p-5">
                <div class="blog-item-meta bg-gray py-1 px-2">
                  <span class="text-black text-capitalize mr-3"
                    ><i class="ti-pencil-alt mr-2"></i>Zaky Ahmad Faisal
                  </span>
                  <span class="text-black text-capitalize mr-3"
                    ><i class="ti-time mr-1"></i> 28th January</span
                  >
                </div>

                <h3 class="mt-3 mb-3">
                  <a href="blog/detail.php"
                    >Tanaman Talas, Bukan Hanya Milik Bogor</a
                  >
                </h3>
                <p class="mb-4">
                  Pakar botani LIPI Made Sri Prana, seperti dikutip dalam laman
                  biotek.lipi.go.id, menyatakan, “Talas merupakan plasma
                  nutfah...
                </p>

                <a
                  href="blog/detail.php"
                  class="btn btn-small btn-main btn-round-full"
                  >Details</a
                >
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center mt-5">
          <div class="col-lg-6 text-center">
            <nav class="navigation pagination d-inline-block">
              <div class="nav-links">
                <a class="prev page-numbers" href="#">Prev</a>
                <span aria-current="page" class="page-numbers current">1</span>
                <a class="page-numbers" href="#">2</a>
                <a class="next page-numbers" href="#">Next</a>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </section>

    <!-- ========================= hero-section end ========================= -->

    <!-- ========================= footer start ========================= -->
    <?php include 'views/Footer.php' ?>

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
    <script
      src="https://code.jquery.com/jquery-3.7.1.js"
      integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
      crossorigin="anonymous"
    ></script>
  </body>
</html>
