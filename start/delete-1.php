<head>
<link href="bootstrap.min.css" rel="stylesheet">
</head>
<?php

if(isset($_POST["delete"]))
{
$conn=mysqli_connect("localhost","root","","nsu"); //("database address","Username","Password","database name")
$roll=$_POST["t1"];
$sql="delete from stud where roll=$roll";
if(mysqli_query($conn,$sql))
{
	echo "OK";
}
else
{
	echo "Not Ok";
}

}
?>

<html>
<form action="delete.php" method="post">
Roll<input type="text" name="t1">
<input type="submit" name="delete" value="Delete">
</form> 


</html>