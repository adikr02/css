<?php
if (isset($_POST["sub"])) {
	$conn = mysqli_connect("localhost", "root", "", "nsu"); //("database address","Username","Password","database name")
	$id = $_POST["t1"];
	$name = $_POST["t2"];
	$pass = $_POST["t3"];
	$sql = "insert into user(userid,username,password) values('$id','$name','$pass')";

	if (mysqli_query($conn, $sql)) {
		echo "Data Stored in The Database";
	} else {
		echo "Something went Wrong" . "<br>";
		echo mysqli_error($conn);
	}
}
?>

<html>
<link href="cafe.css" rel="stylesheet">
<div class="div1">
	<form action="signup.php" method="post"><br>
		<div class="container">
			<h1><input type="text" name="t1" placeholder="USERID"><br>
			</h1>
			<h1><input type="text" name="t2" placeholder="USERNAME"><br>
			</h1>
			<h1><input type="password" name="t3" placeholder="PASSWORD"><br>
			</h1>
			<div class="button">
				<h1>
					<input type="submit" name="sub" value="Enter">
				</h1>
			</div>
		</div>
	</form>
</div>

</html>