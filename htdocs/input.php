<?php
if(isset($_POST["submit"])){
    $conn=mysqli_connect("localhost","root","","login");
    $userid=$_POST["user-id"];
    $username=$_POST["user-name"];
    $password=$_POST["password"];
    $sql="insert into sukumar values('$userid','$username','$password')";
    if(mysqli_query($conn,$sql))
    {
        echo "data stored in database";
    }
    else{
        echo "no data entered";
        echo mysqli_error($conn);
    }
}
?>
<form action="input.php" method="POST">
 <div>
    <input type="text" placeholder="user-id" name="user-id">
    <input type="text" placeholder="user-name" name="user-name">
    <input type="pass" placeholder="password" name="password">
    <input type="submit" value="Submit" name="submit">
 </div>
</form>