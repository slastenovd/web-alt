<?php  
include "WideImage/WideImage.php";
$image = WideImage::load("image.jpg");
$resized = $image->resize(400, 300);
$resized->saveToFile("small.jpg");
echo "ok";
?>