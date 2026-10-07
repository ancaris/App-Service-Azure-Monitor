<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$filename = './images/test.png';
imagepng(imagecreatefromjpeg("./images/img01.jpg"), $filename);