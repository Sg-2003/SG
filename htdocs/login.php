<?php
session_start();
if(isset($_POST["submit"]))
{
    $conn=mysqli_connect("localhost","root","","login");
    $userid=$_POST["user-id"];
    $password=$_POST["password"];
    $sql="select * from sukumar where userid='$userid' and password='$password'";

    $result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_row($result);

    if($row>0)
    {
        $_SESSION["username"]=$row[1];
        header('location:home.php');
    }
    else{
        echo "Please enter correct ID-Password";
        echo mysqli_error($conn);
    }
}
?>
<form action="login.php" method="POST">
<input type="text" placeholder="User-ID" name="user-id">
<input type="password" placeholder="Password" name="password">
<input type="submit" value="Login" name="submit">
</form>