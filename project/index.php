<?php 

/*************************
Тестовое задание для WEB-ALT
Загрузка фотографий на сайт
Сластенов Дмитрий 
mail: slastenovd@mail.ru
ph: +79622976146
*************************/

require_once "prepare.php";

// Запией на страницу
if ( isset($_REQUEST["page"]) && (int)$_REQUEST["page"] > 0 ) {
	$page = (int)$_REQUEST["page"];
} else {
	$page = 1;
}

$limit_from = ITEMS_PER_PAGE * ($page-1);
$limit   = ITEMS_PER_PAGE;

$rows = $db->select("SELECT * FROM photos order by date desc LIMIT $limit_from, $limit");
$items = '';
$date_photo = '';
$block_counter = 1;
$smarty->assign('hidden_mobile', 0) ;

foreach ($rows as $num_row => $row) {
	// echo '<br>'.$row['id'];
	// if ($block_counter > 27){
	// 	break;
	// }

	// if ($block_counter > 19){
	// 	$smarty->assign('hidden_mobile', 1);
	// }

	if ( $block_counter === 1 ) { 
		// полноразмерное фото
		$date_photo = $row['date'];
		$smarty->assign('description',$row['description']);
		$smarty->assign('author',$row['author']);
		$smarty->assign('photo_url',$row['photo_url']);
		$smarty->assign('day',date('d',strtotime ($row['date'])) ) ;
		$smarty->assign('month',date('F',strtotime ($row['date'])) ) ;
	} else {
		// блок с маленькой фото
	    $smarty->assign('thumbnail_url',$row['thumbnail_url']);
	    $items.=$smarty->fetch('item.tpl');
	}
	
	// реклама
	if ( $block_counter >= 4 && !isset($ad1) ) { $items.=$smarty->fetch('ad-1.tpl');  $ad1=1; } 
	if ( $block_counter >= 9 && !isset($ad3) ) { $items.=$smarty->fetch('ad-3.tpl');  $ad3=1; }
	if ( $block_counter >= 20 && !isset($ad2) ){ $items.=$smarty->fetch('ad-2.tpl');  $ad2=1; }
	 

	if ( $date_photo != $row['date'] && $block_counter > 1 ) { // блок с датой
		$smarty->assign('day_thumbnail', date('d',strtotime ($row['date'])) );
		$smarty->assign('month_thumbnail', date('F',strtotime ($row['date'])) );
	    $items .= $smarty->fetch('date.tpl');
		$date_photo = $row['date'];
    	$block_counter++;
	} 

	$block_counter++;
}


// Строим пагинацию
$paginationitems = '';
$record_count = $db->selectCell("SELECT count(*) cnt FROM photos");
$page_counter = ceil($record_count/ITEMS_PER_PAGE);
if ($page_counter>1) {
	for ($i=1; $i<=$page_counter ; $i++) { 
		$url = "index.php?page=$i";
		if ( $i == $page) {
		    $paginationitems .= "<li><a class='paginator__active' href='$url'>$i</a></li>";
		} else {
		    $paginationitems .= "<li><a href='$url'>$i</a></li>";
		}
	}
}

$smarty->assign('page_counter',$page_counter);
$smarty->assign('paginationitems',$paginationitems);

$smarty->assign('items',$items) ;
$smarty->display('index.tpl');