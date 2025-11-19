<?php
    if(isset($_POST["sub"])){  
    $conn=mysqli_connect("localhost","root","","alex");
    $roll=$_POST["roll"];
    $name=$_POST["name"];
    $fname=$_POST["fname"];
    $m1=$_POST["m1"];
    $m2=$_POST["m2"];
    $m3=$_POST["m3"];
    $m4=$_POST["m4"];
    $m5=$_POST["m5"];
    $pass=$_POST["pass"];
    $path=$_POST["pass"];
    $sql="insert into marks values($roll,'$name','$fname',$m1,$m2,$m3,$m4,$m5,$pass)";
    if(mysqli_query($conn,$sql))
    {
     echo "data stored in database";
    }
    else{
     echo "not stored";
     echo mysqli_error($conn);
    }
    // $address=$_POST["t4"];
    // $cources=$_POST["t5"];
}
?>
<html> 
<form action="task-form.php" method="POST">
<center><div style="background-color:pink;border-radius:20px;width:40%;height:500px;margin-top:4%;">
    <h1 style="color:RED;text-align:center;">
        Form-Fillup
    </h1> 
    <table style="text-align:left;font-size:25px;color:white">
        <tr>
            <td><b>Name</b></td>  
            <td><input type="text" placeholder="Enter Name" name="name"></td>  
        </tr>
        <tr>
        <td><b>Father-Name</b></td>
        <td><input type="text" placeholder="Enter F-Name" name="fname"></td>
        </tr>
        <!-- <tr>
        <td><b>Mother-Name</b></td>
        <td><input type="text" placeholder="Enter M-Name"></td>
        </tr> -->
        <tr>
        <td><b>Roll No</b></td>
        <td><input type="number" placeholder="Enter Roll-NO" name="roll"></td>
        </tr>

        <tr>
        <td><b>Physics</b></td>
        <td><input type="number" placeholder="Enter Marks" name="m1"></td>
        </tr>

        <tr>
        <td><b>Maths</b></td>
        <td><input type="number" placeholder="Enter Marks" name="m2"></td>
        </tr>

        <tr>
        <td><b>Chemistry</b></td>
        <td><input type="number" placeholder="Enter Marks" name="m3"></td>
        </tr>

        <tr>
        <td><b>Biology</b></td>
        <td><input type="number" placeholder="Enter Marks" name="m4"></td>
        </tr>

        <tr>
        <td><b>English</b></td>
        <td><input type="number" placeholder="Enter Marks" name="m5"></td>
        </tr>

        <tr>
        <td><b>Password</b></td>
        <td><input type="password" placeholder="Enter Password" name="pass"></td>
        </tr> 
            <tr>
                <td colspan="2">
               <center><input type="submit" name="sub"value="Register" style="width:30%;background-color:grey;color:white;"></center></td></tr>
               <tr><td colspan="2">
               <center><input type="submit" name="sub"value="Log-in" style="width:30%;background-color:lightgreen;color:black;"></center></td></tr>
    </table></center> 
</div>
<body style="background-color:grey;">
</body>
</form>
</html>