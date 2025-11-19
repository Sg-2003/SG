<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login.css">
    <script>
        alert("Welcome");
    function btn(){
                    a=document.getElementById("n1").value
                    document.getElementById("n").innerHTML=a
                    b=document.getElementById("ch").value
                    document.getElementById("c").innerHTML=b
                    c=document.getElementById("s1").value
                    document.getElementById("s").innerHTML=c
                    adult=document.getElementById("adu").value
                    document.getElementById("ad").innerHTML=adult
                    child=document.getElementById("chi").value
                    document.getElementById("chi1").innerHTML=child
                   
                    switch(c)
                    {
                       case "General":total=(adult*200)+(child*100)
                                     document.getElementById("f1").innerHTML=total

                       if(total<1000)
                       {
                         document.getElementById("o1").innerHTML="nan"
                       }
                        else if(total>=1000 && total<1500)
                       {
                        document.getElementById("o1").innerHTML="popcorn and cold drink"
                       }
                        else if(total>=1500 && total<2000)
                       {
                        document.getElementById("o1").innerHTML=" 2 popcorn and 2 cold drink"
                       }
                       else
                       {
                        document.getElementById("o1").innerHTML=" 2 popcorn and 2 cold drink and lucky co"
                       }
                       break;

                       case "1st Class": total=(adult*400)+(child*200)
                                    document.getElementById("f1").innerHTML=total

                                    if(total<1000)
                                    {
                                    document.getElementById("o1").innerHTML="nan"
                                    }
                                    else if(total>=1000 && total<1500)
                                    {
                                    document.getElementById("o1").innerHTML="popcorn and cold drink"
                                    }
                                    else if(total>=1500 && total<2000)
                                    {
                                    document.getElementById("o1").innerHTML=" 2 popcorn and 2 cold drink"
                                    }
                                    else{
                                    document.getElementById("o1").innerHTML=" 2 popcorn and 2 cold drink and lucky co"
                                    }
                                    break;

                        case "AC":total=(adult*600)+(child*300)
                                    document.getElementById("f1").innerHTML=total
                                    if(total<1000)
                                    {
                                        document.getElementById("o1").innerHTML="nan"
                                    }
                                     else if(total>=1000 && total<1500)
                                    {
                                     document.getElementById("o1").innerHTML="popcorn and cold drink"
                                    }
                                    else if(total>=1500 && total<2000)
                                    {
                                    document.getElementById("o1").innerHTML=" 2 popcorn and 2 cold drink"
                                    }
                                    else
                                    {
                                    document.getElementById("o1").innerHTML=" 2 popcorn and 2 cold drink and lucky co"
                                    }
                }

                document.getElementById("f2").style.display="block";
        }

        function pnt()
  {
   var divToPrint=document.getElementById("f2");
   newWin= window.open("pntl");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
  }
    </script>
    <style>
        .d1{
            width: 800px;
            height: 700px;
            position: absolute;
            left: 500px;

        
        }

        .f1{
            background-image:url(ticket.png) ;
            height: 500px;
            width: 100%;
            display: none;

        }

        .table2{
            position: relative;
            left: 200px;
            top: 50px;
        }
    </style>
</head>
<body>   
    <div class="d1">
        <center><table>
        <tr>
            <h3>Air-Ticket</h3>
            <td>Customer Name:</td>
   <td><input type="text" id="n1" placeholder="Required..."></td>
        </tr>
   <tr>
<td><label>Ticket to:</label></td>
<td><select name="Ticket" id="ch">
    <option value="choice your Ticket">choice your Ticket</option>
    <option value="jharkhand">Jharkhand</option>
    <option value="jsr">Jhamshedpur</option>
    <option value="ranchi">Ranchi</option>
    <option value="dhalbhumgarh">Dhalbhumgarh</option>
  </select>
</td>
</tr>
<tr>
<td>choice Ticket-Type:</td>
<td><select name="Ticket" id="s1">
    <option value="choice your Ticket-Type">choice</option>
    <option value="general" id="au">General</option>
    <option value="1st class">1st Class</option>
    <option value="ac">AC</option>
  </select>
</td>
<tr>
    <td><lable>No of adult:</lable></td>
    <td>  <input required type="text" id="adu" placeholder="Enter in Number..."></td>
    
    </tr>
    <tr>
        <td><lable>No of child:</lable></td>
        <td>  <input type="text" id="chi" placeholder="Enter in Number..."></td>
        
        </tr>
    
        <tr>
            
            
            </tr>
    </tr>
    <tr>
       <td><center><button onclick="btn()">Submit</button></center></td>
    </tr>
    </table></center> 

    <form class="f1" id="f2">
        <table class="table2">
            <th colspan="2"><h1>Air-Ticket</h1></th>
            <tr>
        
          <td>Name:</td><td><p id="n"> </p></td>
          </tr>
          <tr>
        
            <td>Ticket from:</td><td><p>Jadugoda</p></td>
            </tr>
          <tr><td>Ticket to:</td><td><p id="c"></p></td></tr>
           
           <tr><td>Ticket-type:</td><td><p id="s"></p></td>
            <tr><td>No of adult:</td><td><p id="ad"></p></td>
            <tr><td>No of child:</td><td><p id="chi1"></p></td>
                </tr>
                <tr>
        
                    <td>Fee:</td><td><p id="f1"> </p></td>
                    </tr>
                    <tr>
        
                        <td>Offer</td><td><p id="o1"> </p></td>
                        </tr>
                    <td>
                    <input type="button" value="Print" onclick="pnt()">
                    </td>
            </table>
        </form>
    </div>
    <div id="pntl"></div>
        </body>
        </html>    