<?php 

/*************************
Тестовое задание для WEB-ALT
Загрузка фотографий на сайт
Сластенов Дмитрий 
mail: slastenovd@mail.ru
ph: +79622976146
*************************/

require_once "prepare.php";

$rows = $db->select('SELECT * FROM photos order by date desc LIMIT 32');
$items = '';
$date_photo = '';
$iteration_counter = 1;
$smarty->assign('hidden_mobile', 0) ;

foreach ($rows as $numRow => $row) {
	if ($iteration_counter > 27){
		break;
	}

	if ($iteration_counter > 19){
		$smarty->assign('hidden_mobile', 1);
	}

	if ( $iteration_counter === 1 ) { // Первой ставим полноразмерное фото
		$date_photo = $row['date'];
		$smarty->assign('description',$row['description']);
		$smarty->assign('author',$row['author']);
		$smarty->assign('photo_url',$row['photo_url']);
		$smarty->assign('day',date('d',strtotime ($row['date'])) ) ;
		$smarty->assign('month',date('F',strtotime ($row['date'])) ) ;
	} elseif ( $iteration_counter === 5 ) { // реклама
	    $items.=$smarty->fetch('ad-1.tpl');
	} elseif ( $iteration_counter === 9 ) { // реклама
	    $items.=$smarty->fetch('ad-3.tpl');
	} elseif ( $iteration_counter === 20 ) { // реклама
	    $items.=$smarty->fetch('ad-2.tpl');
	} else {

		if ( $date_photo != $row['date'] && $iteration_counter > 1 ) { // устанавливаем блок с датой
			$smarty->assign('day_thumbnail',date('d',strtotime ($row['date'])) ) ;
			$smarty->assign('month_thumbnail',date('F',strtotime ($row['date'])) ) ;
		    $items.=$smarty->fetch('date.tpl');
			$date_photo = $row['date'];
	    	$iteration_counter++;
		} 

		 // блок с маленькой фото
	    $smarty->assign('thumbnail_url',$row['thumbnail_url']);
	    $items.=$smarty->fetch('item.tpl');
	}

	$iteration_counter++;
}

$smarty->assign('items',$items) ;
$smarty->display('index.tpl');