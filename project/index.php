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
$block_counter = 1;
$smarty->assign('hidden_mobile', 0) ;

foreach ($rows as $num_row => $row) {

	if ($block_counter > 27){
		break;
	}

	if ($block_counter > 19){
		$smarty->assign('hidden_mobile', 1);
	}

	if ( $block_counter === 1 ) { // Первой ставим полноразмерное фото
		$date_photo = $row['date'];
		$smarty->assign('description',$row['description']);
		$smarty->assign('author',$row['author']);
		$smarty->assign('photo_url',$row['photo_url']);
		$smarty->assign('day',date('d',strtotime ($row['date'])) ) ;
		$smarty->assign('month',date('F',strtotime ($row['date'])) ) ;
	} elseif ( $block_counter === 5 ) { // реклама
	    $items.=$smarty->fetch('ad-1.tpl');
	} elseif ( $block_counter === 9 ) { // реклама
	    $items.=$smarty->fetch('ad-3.tpl');
	} elseif ( $block_counter === 20 ) { // реклама
	    $items.=$smarty->fetch('ad-2.tpl');
	} else {

		if ( $date_photo != $row['date'] && $block_counter > 1 ) { // устанавливаем блок с датой
			$smarty->assign('day_thumbnail', date('d',strtotime ($row['date'])) );
			$smarty->assign('month_thumbnail', date('F',strtotime ($row['date'])) );
		    $items .= $smarty->fetch('date.tpl');
			$date_photo = $row['date'];
	    	$block_counter++;
		} 

		// блок с маленькой фото
	    $smarty->assign('thumbnail_url',$row['thumbnail_url']);
	    $items.=$smarty->fetch('item.tpl');
	}
	$block_counter++;
}

$smarty->assign('items',$items) ;
$smarty->display('index.tpl');