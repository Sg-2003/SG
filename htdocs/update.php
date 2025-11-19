<?php
 if(isset($_POST["sub"]))
 {
    $conn=mysqli_connect("localhost","root","","gpk");
    $roll=$_POST["roll"];
    $sql="select * from stud where roll=$roll";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
 }
 if(isset($_POST["sub1"]))
 {
    $conn=mysqli_connect("localhost","root","","gpk");
    $roll=$_POST["roll"]; 
    $name=$_POST["name"]; 
    $phone=$_POST["phone"]; 
    $address=$_POST["address"]; 
    $courses=$_POST["courses"]; 
    $sql="update stud set name='$name',phone='$phone',address='$address',courses='$courses' where roll='$roll'";
    if(mysqli_query($conn,$sql))
    {
        echo "data updated";
    }
    else{
        echo "data not stored";
    }
 }
?>
<html> 
<form action="update.php" method="POST">
    Roll<input type="number" name="roll">
    <input type="submit" name="sub" value="Get">
</form>
<form action="update.php" method="POST">
   Roll<input type="number" name="roll" value="<?php echo @$row[0]?>">
   Name<input type="text" name="name" value="<?php echo @$row[1]?>">
   Phone<input type="number" name="phone" value="<?php echo @$row[2]?>">
   Address<input type="text" name="address" value="<?php echo @$row[3]?>">
   Courses<input type="text" name="courses" value="<?php echo @$row[4]?>">
   <input type="submit" name="sub1" value="Enter">
</form>
</html>