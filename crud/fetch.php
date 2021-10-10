<head>
<link href="bootstrap.min.css" rel="stylesheet">
</head>
<?php
if(isset($_POST["sub"]))
{
$conn=mysqli_connect("localhost","root","","nsu"); //("database address","Username","Password","database name")

$sql="select * from stud";
$result=mysqli_query($conn,$sql);
echo "<table class='table table-dark'><tr><th>Roll</th><th>Name</th><th>Branch</th><th>Phone</th><th>Subject</th></tr>";
while($row=mysqli_fetch_assoc($result))
{
echo "<tr><td>".$row['roll']."</td><td>".$row["name"]."</td><td>".$row["branch"]."</td><td>".$row["phno"]."</td><td>".$row["subject"]."</td></tr>";
}
echo "</table>";
}
?>

<html>
<form action="show.php" method="post">
<!--Roll<input type="text" name="t1">
Name<input type="text" name="t2">
Bistupur<input type="radio" name="r1" value="Bistupur">
Kadma<input type="radio" name="r1" value="kadma">
Phone number<input type="text" name="t3">
php<input type="checkbox" name="sub1[]" value="php">
JAVA<input type="checkbox" name="sub1[]" value="java">
python<input type="checkbox" name="sub1[]" value="python">
c++<input type="checkbox" name="sub1[]" value="c++">-->
<input type="submit" name="sub" value="Enter">
</form> 
</html>