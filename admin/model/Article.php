<?php
	class Article
	{

		/*
		FETCH THE LIST OF THE ARTICLES IN THE DESCENDING ORDER OF THE DATES AND POSSIBLY IMPLEMENT
		PAGINATION AND SEARCH PARAMETERS.
		*/
		public function fetchArticleList()
		{
			global $pdo;
			$queryString	= "select * from article";
			$query 			= $pdo->prepare($queryString);
			$query->execute();
			return $query->fetchAll();

		}
		/*
		FETCHES THE INFORMATION REGARDING A PARTICULAR POSTs
		*/
		function fetchArticle($articleid)
		{
			global $pdo;
			$queryString	= "select * from article where articleId=?";
			$query 			= $pdo->prepare($queryString);
			$query->bindValue(1,$articleid);
			$query->execute();
			return $query->fetch();
		}

		function editArticle($articleId,$articleTitle,$articleBody,$articleWriter,$fblink,$linkedinlink,$timetoread,$headerimage,$catagory,$summary)
		{
			global $pdo;
			$target_dir = "img/BlogHeader/";
			$target_file = $target_dir.basename($headerimage["name"]);
			move_uploaded_file($headerimage["tmp_name"], $target_file);
			$blogHeaderImage=$target_file;


			$queryString 	= 	"update article set
								articleTitle=?,
								articleBody=?,
								articleWriter=?,
								fblink=?,
								linkedinlink=?,
								timetoread=?,
								headerimage=?,
								catagory=?,
								summary=? where articleId=?"; 
			$query 			= $pdo->prepare($queryString);
			$query->bindValue(1,$articleTitle);
			$query->bindValue(2,$articleBody);
			$query->bindValue(3,$articleWriter);
			$query->bindValue(4,$fblink);
			$query->bindValue(5,$linkedinlink);
			$query->bindValue(6,$timetoread);
			$query->bindValue(7,$blogHeaderImage);
			$query->bindValue(8,$catagory);
			$query->bindValue(9,$summary);
			$query->bindValue(10,$articleId);
			$query->execute();
		}

		function deleteArticle($articleid)
		{
			global $pdo;
			$queryString	= "delete from article where articleId=?";
			$query 			= $pdo->prepare($queryString);
			$query->bindValue(1,$articleid);
			$query->execute();
		}
		//LIST OF DATA IS TAKEN AS ARGUMENTs
		function createArticle($articleTitle,$articleBody,$articleWriter,$fblink,$linkedinlink,$timetoread,$headerimage,$catagory,$summary)
		{
			global $pdo;
			$target_dir = "img/BlogHeader/";
			$target_file = $target_dir.basename($headerimage["name"]);
			move_uploaded_file($headerimage["tmp_name"], $target_file);
			$blogHeaderImage=$target_file;

			
			$queryString 	= "insert into article 
							(articleTitle,articleBody,articleWriter,fblink,linkedinlink,timetoread,views,headerimage,catagory,summary)
							values(?,?,?,?,?,?,?,?,?,?)"; 
			$query 			= $pdo->prepare($queryString);
			$query->bindValue(1,$articleTitle);
			$query->bindValue(2,$articleBody);
			$query->bindValue(3,$articleWriter);
			$query->bindValue(4,$fblink);
			$query->bindValue(5,$linkedinlink);
			$query->bindValue(6,$timetoread);
			$query->bindValue(7,0);
			$query->bindValue(8,$blogHeaderImage);
			$query->bindValue(9,$catagory);
			$query->bindValue(10,$summary);

			$query->execute();
		}

		function publish($articleid)
		{
			global $pdo;
			$queryString	= "update article set published=1 where articleId=?";
			$query 			= $pdo->prepare($queryString);
			$query->bindValue(1,$articleid);
			$query->execute();
		}
	} 
?>