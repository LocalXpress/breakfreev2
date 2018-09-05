<?php
	include_once 'header.php';
	foreach ($data as $i)
	{
		echo "<a href='ArticleView.php?id=".$i['articleId']."'>".$i['articleId']."</a>";
		echo ' '.$i['articleTitle'];
		echo '<br>Dated: '.$i['articleDate'];
		echo ' By: '.$i['articleWriter'];
		echo '<br>';
	}
	include_once 'footer.php';
?>