<?php
//  smarty_init.php_ini_loaded_file
/*
 * Smarty用初期処理
 */

//  smartyのインクルード
require_once( __DIR__ . '/vendor/smarty-3.1.30/libs/Smarty.class.php');

//  smartyの初期設定
$smarty_obj = new Smarty();
//var_dump($smarty_obj);
$smarty_obj->setTemplateDir( __DIR__ . '/../smarty/templates/');
$smarty_obj->setCompileDir( __DIR__ . '/../smarty/templates_c/');


//  エスケープを自動でONする
$smarty_obj->escape_html = true;
?>