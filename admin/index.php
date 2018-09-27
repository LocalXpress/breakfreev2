<?php

	session_start();
	require_once '../core/core.php';
	require_once '../includes/connection.php';
	require_once 'model/Article.php';


	$core 		= new Core;
	$article 	= new Article;

		if(isset($_SESSION['adminID']) && (!isset($_GET['pid'])) && (!isset($_POST['submitArticle'])) && (!isset($_POST['editArticle'])))
		{   
			//redirect to the admin page
			$articles = $article->fetchArticleList();
			echo $core->renderPhpFile("view/adminPanel.php",$articles);
		}
	else if(isset($_POST['submitArticle']))
		{
			$article->createArticle(
				$_POST['title'],$_POST['content'],
				$_POST['writer'],$_POST['fblink'], 
				$_POST['linkedinlink'],$_POST['timerequired'],
				$_FILES['headerImage'],$_POST['catagory'],$_POST['summary']
			);
			header("Location:index.php");
		}
		
	else if(isset($_POST['editArticle']))	
		{
			$article->editArticle($_POST['articleId'],
				$_POST['title'],$_POST['content'],
				$_POST['writer'],$_POST['fblink'], 
				$_POST['linkedinlink'],$_POST['timerequired'],
				$_FILES['headerImage'],$_POST['catagory'],$_POST['summary']
			);
		}	
	else if(isset($_SESSION['adminID']) && (isset($_GET['pid'])))
		{
			if($_GET['pid']=="logout")
			{
				//Logout
				session_destroy();
				echo $core->renderPhpFile('view/login.php');
			}
			else if($_GET['pid']=="view")
			{
				//View Article Post
				$data = $article->fetchArticle($_GET['articleid']);
				echo $core->renderPhpFile('view/viewPost.php',$data);
			

			}
			else if($_GET['pid']=="edit")
			{
				//Edit Post Part
				$data = $article->fetchArticle($_GET['articleid']);
				echo $core->renderPhpFile('view/editPost.php',$data);
			}
			else if($_GET['pid']=="delete")
			{
				//Delete Post Part
				$article->deleteArticle( $_GET['articleid']);
				header("Location:index.php");
			}
			else if($_GET['pid']=="publish")
			{
				//Edit Post Part
				//only the post with publish value 1 will be showeds
				$article->publish($_GET['articleid']);
				header("Location:index.php");
			}
			else
			{	
				//Create Post Part
				echo $core->renderPhpFile('view/createPost.php');
			}
		}
	else if(isset($_POST['submit']))
		{
			//check if the credentials is right or wrong simple if else condion will do.
			if($_POST['password']=="breakfreeRudra1234!")
			{
				$_SESSION['adminID'] = $_POST['name'];
				header("Location:index.php");
			}
			else
			{
				echo "ERROR IN CREDENTIALS";
				echo $core->renderPhpFile('view/login.php');
			}
		}

	else
		{
			//redirect to the login page
			echo $core->renderPhpFile('view/login.php');
		}
?>