<?php
if(isset($_POST["sub"]))
{
    if($_POST["t1"]>29)
    {
        echo "Pass";
    }
    else
    {
        echo"fail";
    }
}
?>
<html>
    <form action ="input.php" method="POST">
    <input type = "text" name="t1">
    <input type = "text" name="t2">
    <input type = "text" name="t3">
    <input type = "submit" name="sub" value="enter">
    

    </form>
</html>