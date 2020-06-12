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
        <a-entity  position="0 0 2.15"  gltf-model="./assets/charmander/model.gltf" scale="4 4 4" animation-mixer crossOrigin="anonymous">
        </a-entity>
    <a-camera "></a-camera>
</a-scene>
</body>