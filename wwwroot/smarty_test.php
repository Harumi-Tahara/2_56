<?php
//  smarty_test.php

//  smartyのインクルード
require_once( __DIR__ . '/vendor/smarty-3.1.30/libs/Smarty.class.php');

//  smartyの初期設定
$smarty_obj = new Smarty();
//var_dump($smarty_obj);
$smarty_obj->setTemplateDir( __DIR__ . '/../smarty/templates/');
$smarty_obj->setCompileDir( __DIR__ . '/../smarty/templates_c/');


//  エスケープを自動でONする
$smarty_obj->escape_html = true;

//  smartyへのデータの入力

$s = '<b>test</b>';
$smarty_obj->assign('val', $s);
$awk['a'] = '配列のa';
$awk['b'] = '配列のb';
$smarty_obj->assign('ar', $awk);

//  テンプレートを指定して出力

$smarty_obj->display('smarty_test.tpl');


//  確認用
//echo 'OK';

?>