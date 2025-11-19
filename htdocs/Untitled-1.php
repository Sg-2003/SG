<?php
$ar=["class1"=>["roll1"=>["name1"=>"Ravi","sub1"=>"English"]],
               ["roll2"=>["name2"=>"Nidhi","sub1"=>"Math"]],
               ["roll3"=>["name3"=>"Dhannu","sub1"=>"Hindi"]],
    "class2"=>["roll1"=>["name1"=>"Parimal","sub1"=>"English"]],
              ["roll2"=>["name2"=>"Ankit","sub1"=>"Math"]],
              ["roll3"=>["name3"=>"Sukumar","sub1"=>"Hindi"]],
    "class2"=>["roll1"=>["name1"=>"Samresh","sub1"=>"English"]],
              ["roll2"=>["name2"=>"Sachin","sub1"=>"Math"]],
              ["roll3"=>["name3"=>"Abhisheck","sub1"=>"Hindi"]]];       

echo $ar["class2"]["roll1"]["name2"];
?>