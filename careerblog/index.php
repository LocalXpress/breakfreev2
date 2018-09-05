<!--
LIST OF BLOG ARTICLES WILL BE PUT HERE.
DEVELOPED BY: BREAKFREE
DATE: 05-09-2018
-->
<?php

	include_once 'controllers/Controller.php';
	$controller = new Controller;
	echo $controller->renderPhpFile('views/index.php',$controller->file_contents_of('blogs'));
	
?>