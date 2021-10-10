<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_FILES["img"]) && $_FILES["img"]["error"]==0)
    {
        $valid=["jpg"=>"image/jpg","png"=>"image/png","jpeg"=>"image/jpeg"];
        $fname=$_FILES["img"]["name"];
        $id=$_POST["t1"];
        $size=$_FILES["img"]["size"];
        $type=$_FILES["img"]["type"];
        $ext=pathinfo($fname,PATHINFO_EXTENSION);

        if(!array_key_exists($ext,$valid))
        {
            die("Not A Valid Ext");
        }
        $or_size=2*1024*1024;
        if($size>$or_size)
        {
            die("Please Select Valid Size");
        }
        if(in_array($type,$valid))
        {
            if(file_exists("data/".$fname))
            {
                echo "File Already Exists";
            }
            else
            {
                move_uploaded_file($_FILES["img"]["tmp_name"],"data/".$fname);
                $conn=mysqli_connect("localhost","root","","nsu");
                $sql="insert into img(id,fname)values($id,'data/$fname')";
                if(mysqli_query($conn,$sql))
                {
                    echo"File Save";
                }
                else{
                    echo mysqli_error($conn);
                }
                echo "File Uploaded";
            }
        }
        else{
            echo "Not Image";
        }
    }
    else{
        echo "ERROR:".$_FILES["img"]["error"];
    }
}
?>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="t1">
        <input type="file" name="img">
        <input type="submit" name="sub" value="Upload">
</form>