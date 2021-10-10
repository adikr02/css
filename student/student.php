<?php
if(isset($_POST["sub"]))
{
    $conn=mysqli_connect("localhost","root","","nsu");
    $regno=$_POST["regno"]; 
    $name=$_POST["name"];
    // $name=$_POST["name"];
    // $dob=$_POST["date"];
    $sex=$_POST["gender"];
    $email=$_POST["Email"];
    $address=$_POST["name2"];
    $branch=$_POST["slct1"];
    $dept=$_POST["slct2"];
    $course=$_POST["slct3"];
    $phno=$_POST["phno"];
    $sql="insert into student(regno,name,sex,email,address,branch,dept,course,phno) values($regno,'$name','$sex','$email', '$address', '$branch', '$dept', '$course',$phno)";
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
<html><html>
<head>
<meta charset="utf-8">
  <h1 align="center" font_size=30px>PANDA UNIVERSITY</h1>
<title>Student Registration Form</title>
<style>
body {
	background-color:pink;
	color:white;
  font-family:verdana;
}
.navbar
{
width: 100%;
text-align: center;
padding-bottom: 10px;
background-color: rosybrown;
border: 4px solid rgb(48, 209, 238);
border-radius: 50px;
  position: fixed;
  bottom: 2px;
  margin-right: 30px;
height: 50px;
color: burlywood;
}
.navbar ul li
{
  display: inline-block;
  font-size: 20px;
  margin-left: 50px;

}
.body1
{
  width: 100%;
  height: 400px;
  border: 2px solid aqua;
  margin-bottom: 200px;
}

</style>


</head>

<body>
<div class="navbar"><ul>
  <li><a href="update.php">UPDATE</a></li>
  <li><a href="show.php">FETECH</a></li>
  <li><a href="delete.php">DELETE</a></li>

</ul>

</div>
<form action="student.php" method="post">

    
   <strong> <h2 align="center">Student Registration Form</h2></strong><br><br>
    
    <div width="700"  border="0" align="center" cellpadding="0" cellspacing="5" >
    <strong>Registration Number :</strong>
    <input name="regno" type="text" size="35" required="required"><br><br>
      
    <strong>Name :</strong>
    <input name="name" type="text" size="35" required="required"><br><br>
    
  
    <strong>DOB :</strong>
    <input type="date" type="number" name="dob" size="35" required="required"><br><br>
    <strong>Sex :</strong>
    <input type="radio" name="gender" value="male" required="required">Male
    	<input type="radio" name="gender" value="female">Female <br><br>

  
  <strong>Email :</strong>
    <input name="Email" type="email" size="35" required="required"><br><br>
  
    <strong>Address :</strong>
    <input name="name2" type="text" size="35" required="required"><br><br>
  
  
    <strong>School :</strong>
    <select   id="slct1" name="slct1" onchange= " populate(this.id,'slct2')" >
	<option>Select..</option>
    <option value="Medicine and Health Sciences">Medicine and Health Sciences</option>
    <option value="Law">Law</option>
    <option value="Music and Performing Arts">Music and Performing Arts</option>
      <option value="Business and Economics">Business and Economics</option>
      <option value="Science,Engineering and Technology">Science,Engineering and Technology</option>
      <option value="Education">Education</option>
      <option value="Pharmacy">Pharmacy</option>
      
</select><br><br>

    <strong>Department:</strong>
    <select id="slct2" name="slct2" onchange="populated(this.id,'slct3')"></select><br><br>
    <strong>Course :</strong>
   <select id="slct3" name="slct3" ></select><br><br>
 
    <strong>Mobile Number:&nbsp;</strong>
    <input name="phno" type="text" size="35"/><br><br>
    <input type="submit" value="Submit" name="sub"/><br><br>
 

</form>
</div>
  <script src="student.js"></script>
</body>

</html>

</form>
</html>