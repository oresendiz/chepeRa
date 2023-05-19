<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <script src="https://cdn.jsdelivr.net/gh/hiukim/mind-ar-js@1.1.5/dist/mindar-image.prod.js"></script>
    <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/hiukim/mind-ar-js@1.1.5/dist/mindar-image-aframe.prod.js"></script>

    <script>

      // const showInfo = () => {

      //       const webButton     = document.querySelector("#web-button");
      //       const youtubeButton = document.querySelector("#youtube-button");
            
      //       setTimeout(() => {
      //                           webButton.setAttribute("visible", true);
      //                         }, 100);
          
      //       setTimeout(() => {
      //                           youtubeButton.setAttribute("visible", true);
      //                         }, 100);
      // }
      const showInfo = () => {
        let y = 0;
        
        const webButton = document.querySelector("#web-button");
        
        const youtubeButton = document.querySelector("#youtube-button");
        const text = document.querySelector("#text");

        
        setTimeout(() => {
          webButton.setAttribute("visible", true);
        }, 100);
      
        setTimeout(() => {
          youtubeButton.setAttribute("visible", true);
        }, 100);

        let currentTab = '';
        webButton.addEventListener('click', function (evt) {
          text.setAttribute("value", "https://homevism.com");
          currentTab = 'web';
        });
       
      
       youtubeButton.addEventListener('click', function (evt) {
          console.log("loc");
          text.setAttribute("value", "https://www.youtube.com");
          currentTab = 'youtube';
        });

        text.addEventListener('click', function (evt) {
          if (currentTab === 'web') {
            window.location.href="https://homevism.com";
          }
        });
      }

      const showPortfolio = (done) => {
        const portfolio = document.querySelector("#portfolio-panel");
        const portfolioLeftButton = document.querySelector("#portfolio-left-button");
        const portfolioRightButton = document.querySelector("#portfolio-right-button");
        // const paintandquestPreviewButton = document.querySelector("#paintandquest-preview-button");

        let y = 0;
        let currentItem = 0;

        portfolio.setAttribute("visible", true);

        const showPortfolioItem = (item) => {
          for (let i = 0; i <= 2; i++) {
            document.querySelector("#portfolio-item" + i).setAttribute("visible", i === item);
          }
        }
        const id = setInterval(() => {
          y += 0.008;
          if (y >= 0.6) {
            clearInterval(id);
            portfolioLeftButton.setAttribute("visible", false);
            portfolioRightButton.setAttribute("visible", false);
            portfolioLeftButton.addEventListener('click', () => {
              currentItem = (currentItem + 1) % 3;
              showPortfolioItem(currentItem);
            });
            portfolioRightButton.addEventListener('click', () => {
              currentItem = (currentItem - 1 + 3) % 3;
              showPortfolioItem(currentItem);
            });
const testVideo = document.createElement( "video" );
            const canplayWebm = testVideo.canPlayType( 'video/webm; codecs="vp8, vorbis"' );
            document.querySelector("#paintandquest-video-link").setAttribute("src", "#paintandquest-video-mp4");
                document.querySelector("#paintandquest-video-mp4").play();
            // paintandquestPreviewButton.addEventListener('click', () => {
            //   paintandquestPreviewButton.setAttribute("visible", false);
            //   const testVideo = document.createElement( "video" );
            //   const canplayWebm = testVideo.canPlayType( 'video/webm; codecs="vp8, vorbis"' );
            //   if (canplayWebm == "") {
            //     document.querySelector("#paintandquest-video-link").setAttribute("src", "#paintandquest-video-mp4");
            //     document.querySelector("#paintandquest-video-mp4").play();
            //   } else {
            //     document.querySelector("#paintandquest-video-link").setAttribute("src", "#paintandquest-video-webm");
            //     document.querySelector("#paintandquest-video-webm").play();
            //   }
            // });

            setTimeout(() => {
              done();
            }, 100);
          }
          portfolio.setAttribute("position", "0 " + y + " -0.01");
        }, 10);
      }

      const showAvatar = (onDone) => {
        const avatar = document.querySelector("#avatar");
        let z = -0.3;
        const id = setInterval(() => {
          z += 0.008;
          if (z >= 0.2) {
            clearInterval(id);
            onDone();
          }
          avatar.setAttribute("position", "0 -0.25 " + z);
        }, 10);
      }

      AFRAME.registerComponent('mytarget', {
        init: function () {
          this.el.addEventListener('targetFound', event => {
            console.log("target found");
            showAvatar(() => {
              setTimeout(() => {
                showPortfolio(() => {
                  setTimeout(() => {
                    showInfo();
                  }, 100);
                });
              }, 100);
            });
          });
          this.el.addEventListener('targetLost', event => {
            console.log("target found");
          });
          //this.el.emit('targetFound');
        }
      });
    </script>

    <style>
      body {
        margin: 0;
      }
      .example-container {
        overflow: hidden;
        position: absolute;
        width: 100%;
        height: 100%;
      }
     
      #example-scanning-overlay {
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background: transparent;
    z-index: 2;
      }
      @media (min-aspect-ratio: 1/1) {
    #example-scanning-overlay .inner {
      width: 50vh;
      height: 50vh;
    }
      }
      @media (max-aspect-ratio: 1/1) {
    #example-scanning-overlay .inner {
      width: 80vw;
      height: 80vw;
    }
      }

      #example-scanning-overlay .inner {
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;

    background:
      linear-gradient(to right, white 10px, transparent 10px) 0 0,
      linear-gradient(to right, white 10px, transparent 10px) 0 100%,
      linear-gradient(to left, white 10px, transparent 10px) 100% 0,
      linear-gradient(to left, white 10px, transparent 10px) 100% 100%,
      linear-gradient(to bottom, white 10px, transparent 10px) 0 0,
      linear-gradient(to bottom, white 10px, transparent 10px) 100% 0,
      linear-gradient(to top, white 10px, transparent 10px) 0 100%,
      linear-gradient(to top, white 10px, transparent 10px) 100% 100%;
    background-repeat: no-repeat;
    background-size: 40px 40px;
      }

      #example-scanning-overlay.hidden {
    display: none;
      }

      #example-scanning-overlay img {
    opacity: 0.6;
    width: 90%;
    align-self: center;
      }

      #example-scanning-overlay .inner .scanline {
    position: absolute;
    width: 100%;
    height: 10px;
    background: white;
    animation: move 2s linear infinite;
      }
      @keyframes move {
    0%, 100% { top: 0% }
    50% { top: calc(100% - 10px) }
      }
    </style>
  </head>
  <body>
  
    <div class="example-container">
      <div id="example-scanning-overlay" class="hidden">
    <div class="inner">
      <img src="https://cdn.glitch.global/235a95a2-bf3c-4003-b40a-2814c68eac9e/Visiting%20Card%20Back%202.jpg?v=1663316954255"/>
      <div class="scanline"></div>
    </div>
      </div>

      <a-scene mindar-image="imageTargetSrc: ../asset/flyerUno.mind; showStats: false; uiScanning: #example-scanning-overlay;" embedded color-space="sRGB" renderer="colorManagement: true, physicallyCorrectLights" vr-mode-ui="enabled: false" device-orientation-permission-ui="enabled: false">
        <a-assets>
          <img id="card" src="https://cdn.glitch.global/235a95a2-bf3c-4003-b40a-2814c68eac9e/Visiting%20Card%20Back%202.jpg?v=1663316954255" />
          <img id="icon-web" src="https://cdn.glitch.global/235a95a2-bf3c-4003-b40a-2814c68eac9e/webicon.png?v=1663647348825" />
          <img id="icon-youtube" src="https://cdn.glitch.global/235a95a2-bf3c-4003-b40a-2814c68eac9e/youtubeicon.png?v=1663647352409" />
         
<!--           <img id="icon-play" src="https://cdn.glitch.global/235a95a2-bf3c-4003-b40a-2814c68eac9e/playicon.png?v=1663649768996" /> -->
          <img id="icon-left" src="../icons/left.png" />
          <img id="icon-right" src="../icons/right.png" />
<!--           <img id="paintandquest-preview" src="./assets/card-example/portfolio/paintandquest-preview.png" /> -->
          <a-video  src="https://www.youtube.com/embed/tvdEO4dlgJY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></a-video>
          <video id="paintandquest-video-mp4" autoplay="true" loop="true" src="https://cdn.glitch.global/235a95a2-bf3c-4003-b40a-2814c68eac9e/green.mp4?v=1663650945560"></video>
          <video id="paintandquest-video-webm" autoplay="true" loop="true" src="https://cdn.glitch.global/235a95a2-bf3c-4003-b40a-2814c68eac9e/green.mp4?v=1663650945560"></video>
          <img id="coffeemachine-preview" src="../icons/coffeemachine-preview.png" />
          <img id="peak-preview" src="../icons/peak-preview.png" />
          
          <a-asset-item id="avatarModel" src=""></a-asset-item>
        </a-assets>

        <a-camera position="0 0 0" look-controls="enabled: false" cursor="fuse: false; rayOrigin: mouse;" raycaster="far: 10000; objects: .clickable">
        </a-camera>

        <a-entity id="mytarget" mytarget mindar-image-target="targetIndex: 0">
          <a-plane src="#card" position="0 0 0" height="0.552" width="1" rotation="0 0 0"></a-plane>

          <a-entity visible=false id="portfolio-panel" position="0 0 -0.01">
            <a-text value="Portfolio" color="black" align="center" width="2" position="0 0.4 0"></a-text>
            <a-entity id="portfolio-item0">
              <a-video id="paintandquest-video-link" webkit-playsinline playsinline width="1" height="0.552" position="0 0 0"></a-video>
<!--               <a-image id="paintandquest-preview-button" class="clickable" src="#paintandquest-preview" alpha-test="0.5" position="0 0 0" height="0.552" width="1"> -->
<!--               </a-image> -->
            </a-entity>
            <a-entity id="portfolio-item1" visible=false>
              <a-image class="clickable" src="#coffeemachine-preview" alpha-test="0.5" position="0 0 0" height="0.552" width="1">
              </a-image>
            </a-entity>
            <a-entity id="portfolio-item2" visible=false>
              <a-image class="clickable" src="#peak-preview" alpha-test="0.5" position="0 0 0" height="0.552" width="1">
              </a-image>
            </a-entity>

            <a-image visible=false id="portfolio-left-button" class="clickable" src="#icon-left" position="-0.7 0 0" height="0.15" width="0.15"></a-image>
            <a-image visible=false id="portfolio-right-button" class="clickable" src="#icon-right" position="0.7 0 0" height="0.15" width="0.15"></a-image>
          </a-entity>

       <a-image visible=false id="youtube-button" class="clickable" onclick="window.open('https://youtube.com', '_blank')" src="#icon-youtube" position="-0.42 -0.5 0" height="0.15" width="0.15"
            animation="property: scale; to: 1.2 1.2 1.2; dur: 1000; easing: easeInOutQuad; loop: true; dir: alternate"
          ></a-image>

          <a-image visible=false id="web-button" onclick="window.open('https://homevism.com', '_blank')" class="clickable" src="#icon-web" alpha-test="0.5" position="-0.14 -0.5 0" height="0.15" width="0.15"
            animation="property: scale; to: 1.2 1.2 1.2; dur: 1000; easing: easeInOutQuad; loop: true; dir: alternate"
          ></a-image>


         

          <a-gltf-model id="avatar" rotation="0 0 0" position="0 -0.25 0" scale="0.004 0.004 0.004" src="#avatarModel"></a-gltf-model>

          <a-text id="text" class="clickable" value="" color="black" align="center" width="2" position="0 -1 0" geometry="primitive:plane; height: 0.1; width: 2;" material="opacity: 0.5"></a-text>
        </a-entity>
      </a-scene>
    </div>
  </body>
</html>