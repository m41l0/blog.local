<?php 

require_once("database.php"); 
require_once("models/articles.php"); 

$link = db_connect();

$title = 'Главная';
$article = articles_all($link);

// Внутренний шаблон
$content = template ('views/articles.php', array('article' => $article));
//var_dump($content);die;
// Внешний шаблон
//$page = template ('views/articles.php', array('title' => $title, 'content' => $content));
//var_dump($page);die;
// Вывод на экран
echo $content;
//echo $page;

//include("views/articles.php");