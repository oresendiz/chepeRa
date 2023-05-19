<html>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <script src="ARQRO/js/mindar-image.prod.js"></script>
    <script src="ARQRO/js/aframe.min.js"></script>
    <script src="ARQRO/js/mindar-image-aframe.prod.js"></script>
    <script src="ARQRO/js/jquery-3.7.0.min.js"></script>
    <link href="ARQRO/css/style.css" rel="stylesheet">
  </head>


  <body>

    <div class="example-container">

      <!-- IMAGEN EN EL SCANEO -->
      <div id="ImgScaner" class="hidden"> 
          <div class="inner">
            <img src="ARQRO/asset/FlyerUnoV.jpg"/>
            <div class="scanline"></div>
          </div>
      </div>

      <a-scene mindar-image="imageTargetSrc: ARQRO/asset/flyerUno.mind?1; showStats: false; uiScanning: #ImgScaner;" embedded color-space="sRGB" renderer="colorManagement: true, physicallyCorrectLights" vr-mode-ui="enabled: false" device-orientation-permission-ui="enabled: false">
        
         <a-assets>
          <img      id="card" src="ARQRO/asset/flyerUno.jpg" />
        </a-assets>

        <a-camera position="0 0 0" look-controls="enabled: false" cursor="fuse: false; rayOrigin: mouse;" raycaster="far: 10000; objects: .clickable">
        </a-camera>

        <a-entity id="mytarget" mytarget mindar-image-target="targetIndex: 0">
            <a-plane src="#card" position="0 0 0" height="1.3" width="1" rotation="0 0 0"></a-plane>
        </a-entity>

      </a-scene>





    </div>

  </body>
</html>


<script>

      const VisualizarFlyer = () => {

            const mytarget  = document.querySelector("#mytarget");
                  mytarget.setAttribute("visible", true);
                  console.log("mostrar flyer");

      }


      const OcultarFlyer = () => {

            const ImgScaner  = document.querySelector("#ImgScaner");
                  ImgScaner.setAttribute("class", 'show');

            const mytarget  = document.querySelector("#mytarget");
                  mytarget.setAttribute("visible", false);
                  console.log("ocultar flyer");

      }



      AFRAME.registerComponent('mytarget', {
        init: function () {
          this.el.addEventListener('targetFound', event => {
            console.log("Se encontro target");
                VisualizarFlyer();
          });
          this.el.addEventListener('targetLost', event => {
            console.log("se perdio target");
            OcultarFlyer()
          });
        }
      });



    </script>