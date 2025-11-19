<?php
if(isset($_POST["del"]))
{
    $conn=mysqli_connect("localhost","root","","gpk");
    $roll=$_POST["t1"];
    $sql="delete from stud where roll=$roll";
    if(mysqli_query($conn,$sql))
    {
        echo "data deleted";
    }
    else{
        echo "data not deleted";
        echo mysqli_error($conn);
    }
}
?>
<html>
    <form action="delete.php" method="POST">
      Roll <input type="number" name="t1">
      <input type="submit" name="del" value="Delete">
    </form>
</html>