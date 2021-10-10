<?php
if(isset($_POST["sub"]))
{
$conn=mysqli_connect("localhost","root","","nsu"); //("database address","Username","Password","database name")
$roll=$_POST["t1"];
$name=$_POST["t2"];
$branch=$_POST["r1"];
$phno=$_POST["t3"];
$subar=$_POST["sub1"];
$sub1=implode(",",$subar); //("sepration key(anything)",array variable name)
$sql="insert into stud(roll,name,branch,phno,subject) values($roll,'$name','$branch',$phno,'$sub1')";

if(mysqli_query($conn,$sql))
{
	echo "Data Stored in The Database";
}
else
{
	echo "Something went Wrong"."<br>";
	echo mysqli_error($conn);
}
}
?>

<html>
<form action="start.php" method="post">
Roll<input type="text" name="t1">
Name<input type="text" name="t2">
Bistupur<input type="radio" name="r1" value="Bistupur">
Kadma<input type="radio" name="r1" value="kadma">
Phone number<input type="text" name="t3">
php<input type="checkbox" name="sub1[]" value="php">
JAVA<input type="checkbox" name="sub1[]" value="java">
python<input type="checkbox" name="sub1[]" value="python">
c++<input type="checkbox" name="sub1[]" value="c++">
<input type="submit" name="sub" value="Enter">
</form>
</html>