<?php
session_start();
if($_SESSION["username"])
{
    echo "Welcome to my Home-Page : Facebook" .$_SESSION["username"].".";
}
else {
   echo "<script>alert('Wrong ID-Password')</script>";
   header('location:login.php');
} 
?>
<a href="logout.php">Log-Out</a>
