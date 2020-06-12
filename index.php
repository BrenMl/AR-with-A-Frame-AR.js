<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>GeoAR.js demo</title>
    <script src='https://aframe.io/releases/0.9.2/aframe.min.js'></script>
    <script src="https://raw.githack.com/jeromeetienne/AR.js/master/aframe/build/aframe-ar.min.js"></script>
    <script src="https://raw.githack.com/donmccurdy/aframe-extras/master/dist/aframe-extras.loaders.min.js"></script>
    <script>
        THREEx.ArToolkitContext.baseURL = 'https://raw.githack.com/jeromeetienne/ar.js/master/three.js/'
    </script>
    <!-- <script src="./script.js"></script> -->
    <!-- <link rel="stylesheet" type="text/css" href="./style.css"/> -->
</head>

<body style='margin: 0; overflow: hidden;'>
    <div class="centered instructions"></div>
    <a-scene 
        vr-mode-ui='enabled: false' 
        embedded
        arjs='sourceType: webcam; sourceWidth:1280; sourceHeight:960; displayWidth: 1280; displayHeight: 960; debugUIEnabled: false;'>
        <a-entity  position="2 0.5 0" rotation="0 -90 0"  gltf-model="./assets/charmander/model.gltf" scale="0.5 0.5 0.5" animation-mixer crossOrigin="anonymous">
        </a-entity>
    <a-camera  position="2 1.2 0"></a-camera>
    <!-- <a-plane height="5" width="5" position="0 0 3" rotation="-90 0 0"></a-plane> -->
</a-scene>
</body>