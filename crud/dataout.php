<?php
$conn=mysqli_connect("localhost","root","","nsu");
if(isset($_POST["Create"])){
$sql_create="create table stud1(Roll int primary key,Name varchar(200),Adddress varchar(100),Phone_Num int,Branch varchar(50))";
if(mysqli_query($conn,$sql_create))
{
 echo "table Created";
}
else
{
	echo "Something went Wrong";
	echo mysqli_error($conn);
}
}

if(isset($_POST["Drop"])){
$sql_create="DROP table stud1";
}


if(isset($_POST["sub"]))
{
$roll=$_POST["t1"];
$name=$_POST["t2"];
$address=$_POST["t3"];
$phno=$_POST["t4"];
$branch=$_POST["t5"];
$sql_insert="insert into stud1(roll,name,branch,phno,subject) values($roll,'$name','$address',$phno,'$branch')";

if(mysqli_query($conn,$sql_insert))
{
	echo "Data Stored in The Database."."<br>"."<a href='http://localhost/phpmyadmin/sql.php?db=nsu&table=stud&pos=0'>Check</a>";
}
else
{
	echo "Something went Wrong"."<br>";
	echo mysqli_error($conn);
}
}
?>
<html>
<form action="dataout.php" method="post"><br>
Roll => <input type="text" name="t1"><br><br>
Name => <input type="text" name="t2"><br>
Address => <input type="text" name="t3"><br>
Phone Number => <input type="text" name="t4"><br>
Branch => <input type="text" name="t5"><br>
<input type="submit" name="sub" value="Enter"><br>
<input type="submit" name="Create" value="Create"><br>
<input type="submit" name="Drop" value="Drop">
</form>
</html>