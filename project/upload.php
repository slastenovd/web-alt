<?php 
include "lib/WideImage/WideImage.php";

echo "start<br>";

if ($_FILES) {
	
	$name = $_FILES['filename']['name'];
	move_uploaded_file($_FILES['filename']['tmp_name'], $name);

	$new_file_name = time().'.jpg';
	echo $new_file_name;
	$image = WideImage::load($name);
	$resized = $image->resize(700, 455,'fill');
	$resized->saveToFile("fullsizeimg/".$new_file_name);
	$resized = $image->resize(160, 104, 'fill');
	$resized->saveToFile("thumbnails/small_".$new_file_name);

	$name = "fullsizeimg/".$new_file_name;
	echo "Image: .$name <br><img src=$name>";
}

?>