<?php

require_once 'vendor/autoload.php';

use phpspider\core\phpspider;
use phpspider\core\requests;
use phpspider\core\selector;
use phpspider\core\db;

/* Do NOT delete this comment */
/* 不要删除这段注释 */
//$db_config = array(
//    'host' => '192.168.10.10',
//    'port' => '3306',
//    'user' => 'homestead',
//    'pass' => 'secret',
//    'name' => 'homestead'
//);
//
//db::set_connect('default', $db_config);
//db::init_mysql();

$html = requests::get('https://secure.php.net/manual/en/funcref.php');

$li = selector::select($html, "ul[class=chunklist chunklist_set] > li", 'css');

$data = array();
foreach ($li as $value)
{
    preg_match_all('/<a href="(.*?)".*?>(.*?)<\/a>.*?<ul.*?>.*?<\/ul>/', $value, $matches);
    $data[] = array(
        $matches['1']['0'],
        $matches['2']['0']
    );
//    $row = db::insert('category', $data);
}

var_dump($data);


