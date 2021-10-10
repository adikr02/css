<head>
<link href="bootstrap.min.css" rel="stylesheet">
</head>
<?php
if(isset($_POST["sub"]))
{
$conn=mysqli_connect("localhost","root","","nsu"); //("database address","Username","Password","database name")
$roll=$_POST["t1"];
/* $name=$_POST["t2"];
$branch=$_POST["r1"];
$phno=$_POST["t3"];
$subar=$_POST["sub1"];
$sub1=implode(",",$subar); //("sepration key(anything)",array variable name) */
$sql="select * from stud where roll = '$roll'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);
}

if(isset($_POST["update"]))
{
$conn=mysqli_connect("localhost","root","","nsu"); //("database address","Username","Password","database name")
$roll=$_POST["t1"];
 $name=$_POST["t2"];
$phno=$_POST["t3"];
$sql="update stud set name='$name',phno=$phno where roll=$roll";
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
<form action="update.php" method="post">
Roll<input type="text" name="t1">
<input type="submit" name="sub" value="Show">
</form> 
<form action="update.php" method="post">
Roll<input type="text" name="t1" value="<?php echo @$row[0]?>">
Name<input type="text" name="t2" value="<?php echo @$row[1]?>">
Phone number<input type="text" name="t3" value="<?php echo @$row[3]?>">
<input type="submit" name="update" value="Update">
</form> 

</html>