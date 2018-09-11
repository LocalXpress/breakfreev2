<?php

if(isset($_POST['submit']))
{
	if($_POST['password']=="breakfreeRudra1234!")
		header('Location: full_page.php');
	else
		echo "Wrong Password!";
}
else
{
?>
	<p>ENTER THE PASSCODE</p>
	<form action="index.php" method="post">
		<input type="password" name="password">
		<input type="submit" name="submit" value="SUBMIT">
	</form>	
<?php	
}
?>