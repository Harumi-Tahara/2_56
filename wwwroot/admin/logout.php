<?php
//  logout.php
require_once(__DIR__ . '/../init.php');

//  アクセス制御
unset($_SESSION['admin_auth']);

//  indexに移動させる
header('Location: ./index.php');