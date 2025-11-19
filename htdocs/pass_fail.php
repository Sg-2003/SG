 <?php
 print_r($_POST);
 if(isset($_POST["sub"])){ 
 $a=$_POST["t1"];
 $b=$_POST["t2"];
 $c=$_POST["t3"];
 $d=$_POST["t4"];
 $e=$_POST["t5"];
 if($a<33 || $b<33 || $c<33 || $d<33 || $e<33)
{
    echo "Fail";
}
else{
    echo "Pass";
}
}
 ?>
 <form action="pass_fail.php" method="POST"> 
    <input type="text" name="t1">
    <input type="text" name="t2">
    <input type="text" name="t3">
    <input type="text" name="t4">
    <input type="text" name="t5">
    <input type="submit" name="sub" value="Submit">
</form>