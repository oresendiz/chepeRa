<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://aframe.io/releases/1.3.0/aframe.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/mind-ar@1.2.1/dist/mindar-image-aframe.prod.js"></script>
  </head>
  <body>

    <a-scene mindar-image="imageTargetSrc:asset/QueEsEtica.mind?1;" color-space="sRGB" renderer="colorManagement: true, physicallyCorrectLights" vr-mode-ui="enabled: false" device-orientation-permission-ui="enabled: false">
      <a-assets>
          <a-video id="QueEsEtica" src="asset/QueEsEtica.mp4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></a-video>
      </a-assets>
      <a-camera position="0 0 0" look-controls="enabled: false"></a-camera>
      <a-entity mindar-image-target="targetIndex: 0">
        <a-plane src="#QueEsEtica" position="0 0 0" height="1.3" width="1" rotation="0 0 0"></a-plane>
      </a-entity>
    </a-scene>


    <a-scene mindar-image="imageTargetSrc:asset/flyerUno.mind?1;" color-space="sRGB" renderer="colorManagement: true, physicallyCorrectLights" vr-mode-ui="enabled: false" device-orientation-permission-ui="enabled: false">
      <a-assets>
        <img id="flyerUno" src="asset/flyerUno.jpg" />
      </a-assets>
      <a-camera position="0 0 0" look-controls="enabled: false"></a-camera>
      <a-entity mindar-image-target="targetIndex: 0">
        <a-plane src="#flyerUno" position="0 0 0" height="1.3" width="1" rotation="0 0 0"></a-plane>
      </a-entity>
    </a-scene>



  </body>
</html>