<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <title>Mexant HTML5 Template - About page</title>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/fontawesome.css">
  <link rel="stylesheet" href="../css/template.css">
  <link rel="stylesheet" href="../css/owl.css">
  <link rel="stylesheet" href="../css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
</head>

<body>
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <a href="../index.php" class="logo">
              <img src="../images/logo.png" alt="">
            </a>
            <ul class="nav">
              <li class="scroll-to-section"><a href="../index.php">Home</a></li>
              <li class="scroll-to-section"><a href="./about.php">About</a></li>
              <li class="has-sub">
                <a href="javascript:void(0)">Pages</a>
                <ul class="sub-menu">
                  <li><a href="./about.php">About Us</a></li>
                  <li><a href="./contact.php">Contact Us</a></li>
                </ul>
              </li>
              <li><a href="./register.php">Register</a></li>
              <li><a href="./login.php">Login</a></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2>Student Login</h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="contact-us-form mb-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
        </div>
        <div class="col-lg-10 offset-lg-1">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <label for="username">Username:</label><input type="text" name="username" id="username" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="password">Password</label><input type="password" name="password" id="password" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">Login</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2023 Njenga Mbugua.

            <br>Designed by <a title="CSS Templates" rel="sponsored" href="https://templatemo.com" target="_blank">Njenga Mbugua</a>
          </p>
        </div>
      </div>
    </div>
  </footer>

  <script src="../jquery/jquery.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>

  <script src="../js/isotope.js"></script>
  <script src="../js/owl-carousel.js"></script>

  <script src="../js/tabs.js"></script>
  <script src="../js/swiper.js"></script>
  <script src="../js/custom.js"></script>
  <script>
    let interleaveOffset = 0.5;

    let swiperOptions = {
      loop: true,
      speed: 1000,
      grabCursor: true,
      watchSlidesProgress: true,
      mousewheelControl: true,
      keyboardControl: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },
      on: {
        progress: function() {
          let swiper = this;
          for (let i = 0; i < swiper.slides.length; i++) {
            let slideProgress = swiper.slides[i].progress;
            let innerOffset = swiper.width * interleaveOffset;
            let innerTranslate = slideProgress * innerOffset;
            swiper.slides[i].querySelector(".slide-inner").style.transform =
              "translate3d(" + innerTranslate + "px, 0, 0)";
          }
        },
        touchStart: function() {
          let swiper = this;
          for (let i = 0; i < swiper.slides.length; i++) {
            swiper.slides[i].style.transition = "";
          }
        },
        setTransition: function(speed) {
          let swiper = this;
          for (let i = 0; i < swiper.slides.length; i++) {
            swiper.slides[i].style.transition = speed + "ms";
            swiper.slides[i].querySelector(".slide-inner").style.transition =
              speed + "ms";
          }
        }
      }
    };

    let swiper = new Swiper(".swiper-container", swiperOptions);
  </script>
</body>

</html>