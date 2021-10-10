<?php
header('Access-control-Allow-Origin:*');
$conn=mysqli_connect("localhost","root","","nsu");
$empid=$_POST["phpt1"];
$empname=$_POST["phpt2"];
$sql="insert into stud values('$empid','$empname')";
if(mysqli_query($conn,$sql))
{
    echo "PHP ok";
}
else
{
    echo"NOT Ok";
    $err=mysqli_error($conn);
    file_put_contents("errorlog.txt",$err,FILE_APPEND);
}
?>