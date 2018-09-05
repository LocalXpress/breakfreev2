<!--
LIST OF BLOG ARTICLES WILL BE PUT HERE.
DEVELOPED BY: BREAKFREE
DATE: 05-09-2018
-->
<?php
	include_once '../includes/connection.php';
	include_once 'models/Article.php';
	include_once 'controllers/Controller.php';

	$article 	= new Article;
	$controller = new Controller;

	$articles = $article->fetchTitleList();

	echo $controller->renderPhpFile('views/index.php', $articles);
?>