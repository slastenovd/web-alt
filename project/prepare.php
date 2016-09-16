<?php

/*************************
Тестовое задание для WEB-ALT
Загрузка фотографий на сайт
Сластенов Дмитрий 
mail: slastenovd@mail.ru
ph: +79622976146
*************************/
error_reporting(E_ERROR|E_WARNING|E_PARSE|E_NOTICE);
ini_set('display_errors', 1);

if (!defined("MY_DBSIMPLE_DIR"))    define("MY_DBSIMPLE_DIR", "lib/dbsimple/");
if (!defined("MY_WIDEIMAGE_DIR"))   define("MY_WIDEIMAGE_DIR", "lib/WideImage/");
if (!defined("MY_SMARTY_DIR"))      define("MY_SMARTY_DIR",   "lib/smarty/");

require_once MY_WIDEIMAGE_DIR."WideImage.php";
require_once MY_DBSIMPLE_DIR."DbSimple/Generic.php";
require_once MY_DBSIMPLE_DIR."config.php";
require_once MY_SMARTY_DIR.'/libs/Smarty.class.php';

//$db = DbSimple_Generic::connect('mysqli://'.'root'.':'.''.'@'.'localhost'.'/'.'PhotoDay');
$db = DbSimple_Generic::connect("mysqli://root:@localhost/photoday");

$smarty = new Smarty();
$smarty->compile_check = true;
$smarty->template_dir = MY_SMARTY_DIR.'templates';
$smarty->compile_dir  = MY_SMARTY_DIR.'templates_c';
$smarty->cache_dir    = MY_SMARTY_DIR.'cache';
$smarty->config_dir   = MY_SMARTY_DIR.'configs';