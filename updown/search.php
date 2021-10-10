<?php
$conn = mysqli_connect("localhost","root","", "nsu");
if (isset($_POST["sub"])) {
    $id = $_POST["t1"];
    $sql = "select * from img where id=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    echo $row[1];
    echo '<p><a class="tb1" href="download.php?file=' . urlencode($row[1]) . '">Download</a></p>';
}
?>
<html>

<body>
    <form action="#" method="POST">
        <h2>ID <input type="text" name="t1"></h2>
        <input type="submit" value="Search" name="sub">
    </form>
</body>

</html>
<img style="width: 200px; height:200px;" src="<?php echo $row[1]; ?>" alt="....">