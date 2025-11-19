<?php
if(isset($_POST["sub"]))
{  
    $conn=mysqli_connect("localhost","root","","gpk");
    $roll=$_POST["t1"];
    $sql="select * from stud where roll='$roll'";
    // print_r($result);
    //  $sql="select * from stud";
    //  print_r($row);
    $result=mysqli_query($conn,$sql);
    // echo $row["name"];
    // $row=mysqli_fetch_array($result);
    echo "<table border='2'><tr><th>Roll</th><th>Name</th><th>Phone</th><th>Address</th><th>Courses</th></tr>";
    while($row=mysqli_fetch_array($result))
    {
        echo "<tr><td>".$row['roll']."</td><td>".$row["name"]."</td><td>".
        $row["phone"]."</td><td>".$row["address"]."</td><td>".$row["courses"]."</td></tr>";
    }
    echo"</table>";
    echo mysqli_error($conn);
}
?>
<html> 
<form action="table.php" method="post">
Roll<input type="text" name="t1" value="">
<input type="submit" name="sub" value="Enter">
</form>
</html>