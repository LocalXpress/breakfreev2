<?php
	class Article
	{
		public $articleId;
		public $articleTitle;
		public $articleBody;
		public $articleWriter;
		public $articleDate;

		//function to list all the article titles of the blog
		public function fetchTitleList()
		{
			global $pdo;
			$query = $pdo->prepare("SELECT articleId,articleTitle,articleWriter,articleDate FROM article");
			$query->execute();
			return $query->fetchAll();

		}

	}
?>