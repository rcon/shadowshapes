<?php
    $id = $_GET[id];
    $imagesDir = 'images/thumbs/' . $id ;
    $images = glob($imagesDir . '/*.{jpg,jpeg,png}', GLOB_BRACE);
    echo json_encode($images);
?>