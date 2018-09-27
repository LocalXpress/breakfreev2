<style type="text/css">
	table, th, td 
	{
    	border: 				1px solid black;
	}
	table
	{
		width: 					100%;
	}
	th
	{
		background-color: 		orange;
	}
</style>

<center>
	<h3>Welcome, <?=$_SESSION['adminID']?></h3>
	<a href="index.php?pid=logout">LOG OUT</a>
</center><br>
<a href="index.php?pid=createpost">CREATE POST</a><br>

<table> 
	<tr> 
		<th>BD</th> 
		<th>Title of the Blog</th> 
		<th>Writer of the Blog</th> 
		<th>Time Stamp</th> 
		<th>VIEW</th> 
		<th>EDIT</th> 
		<th>DELETE</th>
		<th>PUBLISH</th> 
	</tr> 
	<?php foreach($data as $article):?>
		<tr> 
			<td><?=$article['articleId']?></td>
			<td><?=$article['articleTitle']?></td>
			<td><?=$article['articleWriter']?></td>
			<td><?=$article['articleDate']?></td>
			<td><a href="index.php?pid=view&&articleid=<?=$article['articleId']?>" target="_blank">view</a></td>
			<td><a href="index.php?pid=edit&&articleid=<?=$article['articleId']?>" target="_blank">edit</a></td>
			<td><a href="index.php?pid=delete&&articleid=<?=$article['articleId']?>">delete</a></td>

			<?php if ($article['published']==0):?>
				<td><a href="index.php?pid=publish&&articleid=<?=$article['articleId']?>">publish</a></td>
			<?php else: ?>
				<td>published</td>
			<?php endif ?>

		</tr> 
	<?php endforeach ?>
</table>
