<?php
if(isset($_POST["sub"]))
{
    $conn=mysqli_connect("localhost","root","","nsu");
    $roll=$_POST["t1"];
    $name=$_POST["t2"];
    $branch=$_POST["r1"];
    $phno=$_POST["t3"];
    $subar=$_POST["sub1"];
    $sub1=implode("," , $subar);
    $sql="insert into stud1(roll,name,branch,phno,subject) values($roll,'$name','$branch',$phno,'$sub1')";
    if(mysqli_query($conn,$sql))
    {
        echo "OK";
    }
    else
    {
        echo "NOT OK";
        echo mysqli_error($conn);
    }
}
?>
<html>
    <form action="entry.php" method="post">
    Roll<input type ="text" name= "t1">
    Name<input type ="text" name= "t2">
    Bistupur<input type ="radio" name= "r1" value ="Bistupur"> 
    Bagbera<input type="radio" name= "r1" value="Bagbera">
    phno<input type ="text" name= "t3">
    C++<input type ="checkbox" name= "sub1[]" value="C++">
    Java<input type ="checkbox" name= "sub1[]" value="Java">
    Python<input type ="checkbox" name= "sub1[]" value="Python">
    Php<input type ="checkbox" name= "sub1[]" value="Php">
    <input type ="submit" name= "sub" value="Enter">
</form>
</html>