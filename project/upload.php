
<?php 

/*************************
AJAX контроллер
Тестовое задание для WEB-ALT
Загрузка фотографий на сайт
Сластенов Дмитрий 
mail: slastenovd@mail.ru
ph: +79622976146
*************************/

require_once "prepare.php";

if ($_FILES) {
	
	$name = $_FILES['filename']['name'];
	move_uploaded_file($_FILES['filename']['tmp_name'], $name);

	$new_file_name = time().'.jpg';
	$photo_url = "fullsizeimg/".$new_file_name; 
	$thumbnail_url = "thumbnails/small_".$new_file_name;

	$image = WideImage::load($name);
	$resized = $image->resize(700, 455,'fill');
	$resized->saveToFile($photo_url);
	$resized = $image->resize(160, 104, 'fill');
	$resized->saveToFile($thumbnail_url);

	unlink($name);

	$row = array( 'date' => htmlspecialchars( $_POST['date'] ),
				  'description' => htmlspecialchars( $_POST['description'] ),
				  'author' => htmlspecialchars( $_POST['author'] ),
				  'photo_url' => $photo_url,
				  'thumbnail_url' => $thumbnail_url
	);

	$id = $db->query('INSERT INTO photos(?#) VALUES(?a)',
    	array_keys($row), 
    	array_values($row)
	);

	if ( $id ) {
		echo "Фото успешно загружено. <br>";	
		echo '<a href="#" onclick="history.back();">Загрузить еще</a>';
		echo "<br><img src=$photo_url>";
	} else {
		echo "Не удалось корректно выполнить загрузку фото.";
	}
}

?>