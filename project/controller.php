<?php 
require_once "prepare.php";

switch ($_REQUEST['action']) {
    case "upload_photo":
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
                $result['status']='success';
                $result['message'] = "Фото успешно загружено";    
                $result['photo_url'] = $photo_url;
                $result['id'] = $id;
                $result['description'] = $row['description'];
                $result['author'] = $row['author'];
                $result['date'] = $row['date'];
            } else {
                $result['status']='error';
                $result['message'] = "Не удалось корректно выполнить загрузку фото.";
            }

        } else {
            $result['status']='error';
            $result['message'] = "Файл не найден.";
        }

        echo json_encode($result);
        break;

    case "delete":
        if( isset($_GET['id']) && $db->query("DELETE FROM photos WHERE id = ?",(int)$_GET['id']) ) {
            $result['status']='success';
        } else {
            $result['status']='error';
            $result['message']='Не удалось удалить объявление';
        }
        echo json_encode($result);
        break;

    case "save":
            $row = array( 'date' => htmlspecialchars( $_POST['date'] ),
                          'description' => htmlspecialchars( $_POST['description'] ),
                          'author' => htmlspecialchars( $_POST['author'] ),
                          
            );

            $id = htmlspecialchars( $_POST['id'] );
            if ( $id > 0 ){
                if ( $db->query("UPDATE photos SET ?a where id=$id",  $row) ) {
                    $result['status']='success';
                } else {
                    $result['status']='error';
                    $result['message'] = "UPDATE photos SET ?a where id=$id";
                }
            } else {
                $result['status']='error';
                $result['message'] = "Не указан id записи.";
            }

        echo json_encode($result);
        break;

    default:
        break;
}

?>