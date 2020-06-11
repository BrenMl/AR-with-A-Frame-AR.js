<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Location-based AR.js demo</title>
    <script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>
    <script src="https://unpkg.com/aframe-look-at-component@0.8.0/dist/aframe-look-at-component.min.js"></script>
    <script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar-nft.js"></script>
  </head>

  <body style="margin: 0; overflow: hidden;">
    <a-scene
      vr-mode-ui="enabled: false"
      embedded
      arjs="sourceType: webcam; debugUIEnabled: false;"
    >
    <a-entity gltf-model="./assets/magnemite/scene.gltf" 
        rotation="0 180 0" scale="0.15 0.15 0.15" 
        gps-entity-place="longitude: 18.617806; latitude: -100.907436;" animation-mixer/>
      <!-- <a-text
        value="TE AMO MUCHO"
        look-at="[gps-camera]"
        scale="15 15 15"
        gps-entity-place="latitude: 18.617806; longitude: -100.907436;"
      ></a-text> -->
      <a-camera gps-camera rotation-reader> </a-camera>
    </a-scene>
  </body>
</html>