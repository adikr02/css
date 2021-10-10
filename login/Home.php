<?php
session_start();
if($_SESSION["username"])
{
echo "Welcome ".$_SESSION["username"]. " to Home Page";
}
else
{
	header("Location:login.php");
}

?>

<a href="logout.php">LOGOUT</a>
