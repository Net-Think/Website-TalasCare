<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>AppGrids - Bootstrap 5 App Landing Page Template</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
      .chat-container {
        max-width: 800px;
        margin: 50px auto;
        background-color: #fff;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        overflow: hidden;
      }

      .chat-header {
        background-color: #663399;
        color: #fff;
        padding: 10px 20px;
        font-size: 18px;
      }

      .chat-messages {
        white-space: pre-wrap;
        padding: 20px;
        overflow-y: auto;
        max-height: 400px;
      }

      .user-message,
      .bot-message {
        margin-bottom: 10px;
        padding: 10px;
        border-radius: 10px;
      }

      .user-message {
        text-align: right;
      }

      .bot-message {
        text-align: left;
      }

      .input-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
        background-color: #eeecec;
      }

      .input-box {
        flex-grow: 1;
        padding: 12px;
        border-radius: 10px 0 0 10px;
        border: 2px solid #3498db;
        font-size: 16px;
        transition: border-color 0.3s ease-in-out,
          background-color 0.3s ease-in-out;
        background-color: #fcfcfc;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        position: relative;
        border: none;
      }

      .input-box::before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 2px;
        background-color: transparent;
        transition: background-color 0.2s ease-in-out;
      }

      .input-box:focus {
        outline: none;
        background-color: white;
      }

      .send-button {
        background-color: #663399;
        color: #fff;
        border: none;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
        padding: 12px 20px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
      }

      .send-button:hover {
        background-color: #21073a;
      }
    </style>
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
    <link rel="stylesheet" href="plugins/themify/css/themify-icons.css" />
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
                        <a href="#">TalasMaps</a>
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
    <section class="page-title">
      <div class="container">
        <div class="chat-container">
          <div class="chat-header">HamaAI</div>
          <div class="chat-messages" id="chatMessages">
            &nbsp Halo, Ada yang bisa saya bantu?
          </div>
          <div class="input-container">
            <input
              type="text"
              class="input-box"
              id="userInput"
              placeholder="Type your Message..."
            />
            <button class="send-button" id="sendMessage">Send</button>
          </div>
        </div>
      </div>
    </section>

    <!-- ========================= hero-section end ========================= -->

    <!-- ========================= footer start ========================= -->
    <footer id="footer" class="footer">
      <br /><br />
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
                </div>
                <ul class="socials">
                  <li>
                    <a href="#">
                      <i class="lni lni-facebook-filled"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="lni lni-twitter-filled"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="lni lni-instagram-filled"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="lni lni-linkedin-original"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
              <div class="footer-widget">
                <h3>Lorem</h3>
                <ul class="links">
                  <li><a href="#">Lorem Ipsum</a></li>
                  <li><a href="#">Lorem Ipsum</a></li>
                  <li><a href="#">Lorem Ipsum</a></li>
                  <li><a href="#">Lorem Ipsum</a></li>
                </ul>
              </div>
            </div>

            <div class="col-xl-3 col-lg-2 col-md-6 col-sm-6">
              <div class="footer-widget">
                <h3>Lorem</h3>
                <ul class="links">
                  <li><a href="#">Lorem Ipsum</a></li>
                  <li><a href="#">Lorem Ipsum</a></li>
                  <li><a href="#">Lorem Ipsum</a></li>
                  <li><a href="#">Lorem Ipsum</a></li>
                </ul>
              </div>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
              <div class="footer-widget">
                <h3>Lorem</h3>
                <ul class="links">
                  <li><a href="#">Lorem Ipsum </a></li>
                  <li><a href="#">Lorem Ipsum </a></li>
                  <li><a href="#">Lorem Ipsum</a></li>
                  <li><a href="#">Lorem Ipsum</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="copy-right-wrapper">
          <p>
            Designed and Developed by
            <a href="#" rel="nofollow" target="_blank">Net Think</a>
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
    <script
      src="https://code.jquery.com/jquery-3.7.1.js"
      integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
      crossorigin="anonymous"
    ></script>
  </body>
</html>