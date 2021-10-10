<head>
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<?php
if(isset($_POST["sub"]))
{
    $conn=mysqli_connect("localhost","root","","nsu");
    $sql="select * from stud1";
    $result=mysqli_query($conn,$sql);
    echo "<table class='table table-dark'><tr><th>Roll</th><th>Name</th><th>Branch</th><th>Phone</th><th>Subject</th></tr>";
while($row=mysqli_fetch_assoc($result))
{
    echo "<tr><td>".$row['Roll']."</td><td>".$row['name']."</td><td>".$row['branch']."</td><td>".$row['phno']."</td><td>".$row['subject']."</td></tr>";
}
echo "</table>";
}
?>
<html>
    <form action="select.php" method="post">
        <input type="submit" name="sub" value="Enter">
    </form>
</html>