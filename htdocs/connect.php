<?php
if(isset($_POST["sub"])){  
    $conn=mysqli_connect("localhost","root","","gpk");
    $roll=$_POST["t1"];
    $name=$_POST["t2"];
    $phone=$_POST["t3"];
    $address=$_POST["t4"];
    $cources=$_POST["t5"];
    $subar=implode(",",$cources);
   $sql="insert into stud values($roll,'$name',$phone,'$address','$subar')";
   if(mysqli_query($conn,$sql))
   {
    echo "data stored in database";
   }
   else{
    echo "not stored";
    echo mysqli_error($conn);
   }
}
 ?>
 <form action="connect.php" method="POST">
  Roll<input type="text" name="t1">
  Name<input type="text" name="t2">
  Phone<input type="text" name="t3">
  Address<input type="text" name="t4">
  Cources<input type="checkbox" name="t5[]" value="bca">BCA
  <input type="checkbox" name="t5[]" value="diploma">Diploma
  <input type="checkbox" name="t5[]" value="bba">BBA
  <input type="checkbox" name="t5[]" value="bcom">B.Com
  <input type="submit" name="sub" value="Submit">
 </form>