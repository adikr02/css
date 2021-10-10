<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["img"]) && $_FILES["img"]["error"] == 0) {
        $valid = ["jpg" => "image/jpg", "png" => "image/png", "jpeg" => "image/jpeg"];
        $fname = $_FILES["img"]["name"];
        $type = $_FILES["img"]["type"];
        $size = $_FILES["img"]["size"];
        $ext = pathinfo($fname, PATHINFO_EXTENSION);
        if (!array_key_exists($ext, $valid)) {
            die("Not a valid extension");
        }
        $or_size = 2 * 1024 * 1024;
        if ($size > $or_size) {
            die("Please Select Valid size");
        }
        if (in_array($type, $valid)) {
            if (file_exists("data/" . $fname)) {
                echo "File already exists";
            } else {
                move_uploaded_file($_FILES["img"]["tmp_name"], "data/" . $fname);
                $conn = mysqli_connect("localhost", "root", "", "nsu");
                $id = $_POST["t1"];
                $sql = "insert into img(id,path) values($id,'data/$fname')";
                if (mysqli_query($conn, $sql)) {
                    echo "File Saved";
                } else {
                    echo mysqli_error($conn);
                }
                echo "File Upload";
            }
        } else {
            echo "Not Image";
        }
    } else {
        echo "Error:" . $_FILES["img"]["error"];
    }
}
?>
<html>

<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="t1">
        <input type="file" name="img">
        <input type="submit" name="sub" value="Upload">
    </form>
</body>

</html>