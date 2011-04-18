<?php
    $id = $_GET[id];
    $imagesDir = 'images/thumbs/' . $id ;
    $raw = glob($imagesDir . '/*.{jpg,jpeg,png}', GLOB_BRACE);
    $images = array_reverse($raw);
    echo json_encode($images);
?>