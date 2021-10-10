<head>
<link href="bootstrap.min.css" rel="stylesheet">
</head>
<?php
if(isset($_POST["sub"]))
{
$conn=mysqli_connect("localhost","root","","nsu"); //("database address","Username","Password","database name")
$regno=$_POST["t1"];
$sql="select * from student where regno = '$regno'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);
}

if(isset($_POST["update"]))
{
$conn=mysqli_connect("localhost","root","","nsu"); //("database address","Username","Password","database name")
$regno=$_POST["regno"];
 $name=$_POST["name"];
$phno=$_POST["phno"];
$sql="update student set name='$name',phno=$phno where regno=$regno";
if(mysqli_query($conn,$sql))
{
	echo "OK";
}
else
{
	echo "Not Ok";
	echo mysqli_error($conn);
}

}
?>

<html>
<form action="update.php" method="post">
RegistrationNumber<input type="text" name="t1">
<input type="submit" name="sub" value="Show">
</form> 
<form action="update.php" method="post">
RegistrationNumber<input type="text" name="regno" value="<?php echo @$row[0]?>">
Name<input type="text" name="name" value="<?php echo @$row[1]?>">
Phone number<input type="text" name="phno" value="<?php echo @$row[9]?>">
<input type="submit" name="update" value="Update">
</form> 

</html>