<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/fontawesome.css">
  <link rel="stylesheet" href="../css/template.css">
  <link rel="stylesheet" href="../css/owl.css">
  <link rel="stylesheet" href="../css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
</head>

<body>
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