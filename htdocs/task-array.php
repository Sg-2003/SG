<?php
$ar=["class1"=>["roll1"=>["name"=>"Ravi","sub"=>"English"]],
               ["roll2"=>["name"=>"Nidhi","sub"=>"Math"]],
               ["roll3"=>["name"=>"Dhannu","sub"=>"Hindi"]],
    "class2"=>["roll1"=>["name"=>"Parimal","sub"=>"English"]],
              ["roll2"=>["name"=>"Ankit","sub"=>"Math"]],
              ["roll3"=>["name"=>"Sukumar","sub"=>"Hindi"]],
    "class3"=>["roll1"=>["name"=>"Samresh","sub"=>"English"]],
              ["roll2"=>["name"=>"Sachin","sub"=>"Math"]],
              ["roll3"=>["name"=>"Abhisheck","sub"=>"Hindi"]]];        

       for($i=1;$i<=3;$i++)
       {
        for($j=1;$j<=3;$j++)
        {
            for($k=1;$k<=1;$k++)
           {
            echo " My class is ".$i.
             " and Roll is ".$j.
             " and Name is ".$ar["class".$i]["roll".$j]["name"].
             " and my Subject is ".$ar["class".$i]["roll".$j]["sub"]." .";
           }
           echo "<br>";
           echo "<br>";
        }
       echo "<br>";
       }
      
?>