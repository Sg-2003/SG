 <?php
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    if(isset($_FILES["img"]) && $_FILES["img"]["error"]==0)
    {
        $valid=["jpg"=>"image/jpg","png"=>"image/png","jpeg"=>"image/jpeg"];
        $fname=$_FILES["img"]["name"];
        $type=$_FILES["img"]["type"];
        $size=$_FILES["img"]["size"];
        $ext=pathinfo($fname,PATHINFO_EXTENSION);
        if(!array_key_exists($ext,$valid))
        {
            die("Not a valid extension");
        }
        $or_size=2*1024*1024;
        if($size>$or_size)
        {
            die("Please select a valid size");
        }
        if(in_array($type,$valid))
        {
            if(file_exists("image/".$fname))
            {
                echo "file already exists";
            }
            else{
                move_uploaded_file($_FILES["img"]["tmp_name"],"image/$fname");
                $conn=mysqli_connect("localhost","root","","pic");
                $sql="insert into image(roll,pic) values(1,'image/$fname')";
                if(mysqli_query($conn,$sql)){
                    echo "file save";
                }
                else{
                    echo mysqli_error($conn);
                }
                echo "file uploded";
            }

        }
        else{
            echo "not image";
        }
    }
    else{
        echo "Error:".$_FILES["img"]["error"];
    }
  }
 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file-upload</title>
 </head>
 <body>
    <form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="img" id="">
    <input type="submit" value="sub" name="sub">
    </form>
 </body>
 </html>