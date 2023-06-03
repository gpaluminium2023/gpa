<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-179557783-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-179557783-1');
</script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Contact Us</title>
  <!-- Pat icon -->
  <link rel="icon" href="img/logo.png" type="image/png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #eee;
    }
    .map-container-section {
      overflow: hidden;
      position: relative;
      height: 0;
    }
    .map-container-section iframe {
      left: 0;
      top: 0;
      height: 100%;
      width: 100%;
      position: absolute;
    }
  </style>
</head>

<body>

  <!-- Navigation & Intro -->
  <header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top scrolling-navbar white">
      <div class="container">
        <a class="navbar-brand font-weight-bold title" href="index.php">
          <img src="img/logo.png" height="30" alt="Patcollins_Logo"> 
          PATCOLLINS
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="list-unstyled navbar-nav mr-auto smooth-scroll">
            <li class="nav-item ml-3">
              <a class="nav-link title" href="about.php" data-offset="90">About</a>
            </li>
            <li class="nav-item ml-3 smooth-scroll">
              <a class="nav-link title" href="products.php" data-offset="90">Products</a>
            </li>
            <li class="nav-item ml-3 smooth-scroll">
              <a class="nav-link title" href="services.php" data-offset="90">Services</a>
            </li>
            <li class="nav-item ml-3 smooth-scroll">
              <a class="nav-link title" href="gallery.php" data-offset="90">Gallery</a>
            </li>
            <li class="blue nav-item ml-3 smooth-scroll">
              <a class="nav-link title" href="contact.php" data-offset="90">Contact</a>
            </li>
          </ul>

          <!-- Social Icon  -->
          <ul class="navbar-nav nav-flex-icons">

          <li class="nav-item">
              <a class="nav-link" href="https://web.facebook.com/official.rexedge">
                <i class="fab fa-facebook-f title"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="https://g.page/The-Redstudio?gm">
                <i class="fab fa-google-plus-g title"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="https://www.instagram.com/official.rexedge/">
                <i class="fab fa-instagram title"></i>
              </a>
            </li>

          </ul>

        </div>
      </div>
    </nav>

    <section>
    <div id="map-container-demo-section" class="map-container-section mb-4" style="height: 500px">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.7878576930077!2d3.3038183291655567!3d6.628105931841842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b91196f6a13fd%3A0x72bd856a9f206e1!2sArigbanla%20St%2C%20Agege%2C%20Lagos!5e0!3m2!1sen!2sng!4v1599279982776!5m2!1sen!2sng" frameborder="0" style="border:0"></iframe>
    </div>
    </section>

  </header>
  <!-- Navigation & Intro -->

  <!-- Main content -->
  <main>

<div class="container-fluid mb-5">

  <!-- Grid row -->
  <div class="row" style="margin-top: -100px;">

    <!-- Grid column -->
    <div class="col-md-12">

      <div class="card pb-5">
        <div class="card-body">

          <div class="container">

            <!-- Section: Contact v.2 -->
            <section class="text-center">

              <!-- Section heading -->
              <h2 class="font-weight-bold title h1 my-5">Contact us</h2>
              <!-- Section description -->
              <p class="grey-text w-responsive mx-auto mb-5">
                Feel the form below to cantact us if you need to inquire about our products, you can also call
                us on the numbers below or visit our head office and factory at the address shown below.
              </p>

              <div class="row pt-5">

                <!--Grid column-->
                <div class="col-md-8 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control">
                                    <label for="name" class="">Your name</label>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control">
                                    <label for="email" class="">Your email</label>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="subject" name="subject" class="form-control">
                                    <label for="subject" class="">Subject</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                    <label for="message">Your message</label>
                                </div>

                            </div>
                        </div>
                        <!--Grid row-->

                    </form>

                    <div class="text-center text-md-left">
                        <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
                    </div>
                    <div class="status"></div>
                </div>
                <!--Grid column-->

                <!-- Grid column -->
                <div class="col-md-4 col-xl-3">
                  <ul class="list-unstyled contact-icons">
                    
                    <li>
                      <i class="fas fa-industry fa-2x orange-text"></i> Factory
                      <p>45, Arigbanla Street, Off Ipaja Road, Abekoko B/Stop, Agege, Lagos State</p>
                    </li>

                    <li>
                      <i class="fas fa-phone fa-2x orange-text"></i> Phone Numbers
                      <p>08033249420 | 07088589940 | 08038102388</p>
                    </li>

                    <li>
                      <i class="fas fa-envelope fa-2x orange-text"></i> Email Address
                      <p>patcollins2000@gmail.com</p>
                    </li>
                  </ul>
                </div>
                <!-- Grid column -->

              </div>

            </section>
            <!-- Section: Contact v.2 -->

          </div>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>

</div>

</main>
  <!-- Main content -->

  <!-- Footer -->
  <footer class="page-footer text-center text-md-left unique-color-dark pt-0 mt-0">

    <div class="top-pink-footer">
      <div class="container">

        <!-- Grid row -->
        <div class="row py-4 d-flex align-items-center">

          <!-- Grid column -->
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-md-0">
            <h6 class="mb-4 mb-md-0 white-text">Get connected with us on social networks!</h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6 col-lg-7 text-center text-md-right">
            <!-- Facebook -->
            <a class="p-2 m-2 fa-lg fb-ic ml-0" href="https://web.facebook.com/official.rexedge">
              <i class="fab fa-facebook-f white-text mr-lg-4"> </i>
            </a>
            <!-- Google + -->
            <a class="p-2 m-2 fa-lg gplus-ic" href="https://g.page/The-Redstudio?gm">
              <i class="fab fa-google-plus-g white-text mr-lg-4"> </i>
            </a>
            <!-- Instagram -->
            <a class="p-2 m-2 fa-lg ins-ic" href="https://www.instagram.com/official.rexedge/">
              <i class="fab fa-instagram white-text mr-lg-4"> </i>
            </a>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>
    </div>

    <!-- Footer Links -->
    <div class="container mt-5 mb-4 text-center text-md-left">
      <div class="row mt-3">

        <!-- First column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mb-5">
          <h6 class="spacing font-weight-bold">
            <strong>Patcollins Standard Aluminium</strong>
          </h6>
          <hr class="pink accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
          We are <strong>Business-Men and Engineers</strong> with the aim of 
          providing <strong>DURABLE and QUALITY</strong> Aluminium products to our clients and also to satisfy them 
          with the frequent <strong>Technical Innovations</strong> in the building industry.
          </p>
        </div>
        <!-- First column -->

        <!-- Second column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-5">
          <h6 class="spacing font-weight-bold">
            <strong>Products</strong>
          </h6>
          <hr class="pink accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="products.php#flatsheets">Flatsheets</a>
          </p>
          <p>
            <a href="products.php#roofingsheets">Roofing Sheets</a>
          </p>
          <p>
            <a href="products.php#stonetiles">Stone Tiles</a>
          </p>
          <p>
            <a href="products.php#accessories">Accessories</a>
          </p>
        </div>
        <!-- Second column -->

        <!-- Third column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-5">
          <h6 class="spacing font-weight-bold">
            <strong>Services</strong>
          </h6>
          <hr class="pink accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="services.php">Measurement</a>
          </p>
          <p>
            <a href="services.php">Quotation</a>
          </p>
          <p>
            <a href="services.php">Roofing</a>
          </p>
          <p>
            <a href="contact.php">Contact Us</a>
          </p>
        </div>
        <!-- Third column -->

        <!-- Fourth column -->
        <div class="col-md-4 col-lg-3 col-xl-3">
          <h6 class="spacing font-weight-bold">
            <strong>Contact</strong>
          </h6>
          <hr class="pink accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <i class="fas fa-industry mr-3"></i> 45, Arigbanla Street, Off Ipaja Road, Abekoko B/Stop, Agege, Lagos State</p>
          <p>
            <i class="fas fa-envelope mr-3"></i> patcollins2000@gmail.com</p>
          <p>
            <i class="fas fa-phone mr-3"></i> 08033249420 | 07088589940 | 08038102388</p>
        </div>
        <!-- Fourth column -->

      </div>
    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">
      <div class="container-fluid">
        <a href="https://rexedge.xyz" target="_blank">© R3D 5TUDIO 2020</a>
      </div>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script>
    // Animation init
    new WOW().init();

    // Material Select Initialization
    $(document).ready(function () {
      $('.mdb-select').material_select();
    });
  </script>

</body>

</html>
