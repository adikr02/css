<head>
<link href="bootstrap.min.css" rel="stylesheet">
</head>
<?php
if(isset($_POST["sub"]))
{
$conn=mysqli_connect("localhost","root","","nsu"); 
$regno=$_POST["regno"];
$sql="select * from stud where regno = '$rengo'";
$result=mysqli_query($conn,$sql);
echo "<table class='table table-dark'><tr><th>Regno</th><th>Name</th><th>DOB</th><th>Sex</th><th>Email</th><th>Address</th><th>School</th><th>Dept</th><th>Course</th><th>Phone</th></tr>";
while($row=mysqli_fetch_assoc($result))
{
echo "<tr><td>".$row['regno']."</td><td>".$row["name"]."</td><td>".$row["dob"]."</td><td>".$row["sex"]."</td><td>".$row["email"]."</td><td>".$row["address"]."</td><td>".$row["school"]."</td><td>".$row["dept"]."</td><td>".$row["course"]."</td><td>".$row["phno"]."</td></tr>";
}
echo "</table>";
}
?>

<html>
<form action="show.php" method="post">
RegistrationNumber :<input type="text" name="regno">
<input type="submit" name="sub" value="Enter">
</form> 
</html>