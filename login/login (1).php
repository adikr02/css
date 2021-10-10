<head>
<link href="bootstrap.min.css" rel="stylesheet">
</head>
<?php
session_start();
if(isset($_POST["sub"]))
{
$conn=mysqli_connect("localhost","root","","nsu");
$id=$_POST["t1"];
 $pass=$_POST["t2"];
$sql="select * from user where userid = '$id' and password = '$pass'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);
if($row>0)
{
	$_SESSION["username"]=$row[1];
	header("location:Home.php");
}
else
{
	echo "Wrong UserName Or Password";
}
}
?>

<html>
<form action="login.php" method="post">
UserID<input type="text" name="t1">
Password<input type="password" name="t2">
<input type="submit" name="sub" value="Enter">
</form> 

</html>