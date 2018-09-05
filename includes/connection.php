<?php
	try
	{
		//DB CONNECTED USING DBNAME=CMS USERNAME=ROOT AND PASSWORD=NULL. WILL CHANGE ACCORDING TO THE SERVER SETTINGS
		$pdo = new PDO('mysql:host=localhost;dbname=cms','root','');
	}
	catch(PDOExcetion $e)
	{
		echo "Not Connected";
	}
?>