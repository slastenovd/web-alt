<?php 

require_once "prepare.php";
// $smarty->assign('items',$items) ;

$rows = $db->select('SELECT * FROM photos order by date desc');

$items = '';

foreach ($rows as $num_row => $row) {
	$smarty->assign('id',$row['id']);
	$smarty->assign('description',$row['description']);
	$smarty->assign('author',$row['author']);
	$smarty->assign('date',$row['date']);
    $smarty->assign('photo_url',$row['photo_url']);
    $items.=$smarty->fetch('img.tpl');
}

$smarty->assign('items',$items) ;
$smarty->display('admin.tpl');
?>