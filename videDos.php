<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CHEPE CONTIGO.</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/corregi/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="apple-mobile-web-app-capable" content="yes">
  <script src="ARQRO/js/mindar-image.prod.js"></script>
  <script src="ARQRO/js/aframe.min.js"></script>
  <script src="ARQRO/js/mindar-image-aframe.prod.js"></script>
  <script src="ARQRO/js/jquery-3.7.0.min.js"></script>
  <link   href="ARQRO/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <h1>CHEPE <span>CONTIGO.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" >Inicio</a></li>
          <li><a href="videUno.php?12">Realidad Aumentada 1</a></li>
          <li><a href="videDos.php?12" class="active">Realidad Aumentada 2</a></li>
          <li><a href="contact.php">Contactanos</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <div class="example-container">

      <!-- IMAGEN EN EL SCANEO -->
      <div id="ImgScaner" class="hidden"> 
          <div class="inner">
            <img src="ARQRO/asset/video2.png"/>
            <div class="scanline"></div>
          </div>
      </div>

      <a-scene mindar-image="imageTargetSrc: ARQRO/asset/video2.mind?1; showStats: false; uiScanning: #ImgScaner;" embedded color-space="sRGB" renderer="colorManagement: true, physicallyCorrectLights" vr-mode-ui="enabled: false" device-orientation-permission-ui="enabled: false">
        
         <a-assets>
          <img id="paintandquest-preview" src="ARQRO/icons/play.png" />
          <video    id="paintandquest-video-mp4"  src="ARQRO/asset/video2.mp4" autoplay="false" loop="true" ></video>
        </a-assets>

        <a-camera position="0 0 0" look-controls="enabled: false" cursor="fuse: false; rayOrigin: mouse;" raycaster="far: 10000; objects: .clickable">
        </a-camera>

        <a-entity id="myvideo" myvideo mindar-image-target="targetIndex: 0">
            <a-entity id="videoUno">
              <a-video id="paintandquest-video-link" webkit-playsinline playsinline width="1" height="0.552" position="0 0 0"></a-video>
              <a-image id="play-button" visible=false  class="clickable" src="#paintandquest-preview" alpha-test="0.7" position="0 0 0" height="0.552" width="0.552">
            </a-entity>
        </a-entity>

      </a-scene>


    </div>

  </main><!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<script>

  $(document).ready(function(){
  });

      const VisualizarVideo = () => {

            const videoUno  = document.querySelector("#videoUno");
                  videoUno.setAttribute("visible", true);

            document.querySelector("#paintandquest-video-link").setAttribute("src", "#paintandquest-video-mp4");
            document.querySelector("#paintandquest-video-mp4").play();

      }


      const OcultarVideo = () => {

            const ImgScaner  = document.querySelector("#ImgScaner");
                  ImgScaner.setAttribute("class", 'show');

            const videoUno  = document.querySelector("#videoUno");
                  videoUno.setAttribute("visible", false);

            document.querySelector("#paintandquest-video-link").setAttribute("src", "#paintandquest-video-mp4");
            document.querySelector("#paintandquest-video-mp4").pause();

      }


      const ButtonPlay     =  document.querySelector("#play-button");
                              ButtonPlay.addEventListener('click', () => {
                                                                        document.querySelector("#paintandquest-video-mp4").play();
                                                                        ButtonPlay.setAttribute("visible", false);
                                                                      });

      AFRAME.registerComponent('myvideo', {
        init: function () {
          this.el.addEventListener('targetFound', event => {
            console.log("Se encontro target");
                VisualizarVideo();
          });
          this.el.addEventListener('targetLost', event => {
            console.log("se perdio target");
            OcultarVideo()

          });
        }
      });



    </script>