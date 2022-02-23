<html>
    <head></head>
    <body>
        <?php
     $host = "localhost";
     $Name = $_POST["Name"];
     $Email = $_POST["Email"];
     $choose = $_POST["choose"];
     $Subject = $_POST["Subject"];
     $Message = $_POST["Message"];
     
     $con=mysqli_connect($host, "root", "", "register");
     $sql="INSERT INTO details(Name,Email,choose,Subject,Message) VALUES('$Name','$Email','$choose','$Subject','$Message')";
     if($con){
         mysqli_query($con,$sql);
        
     }else {
         echo "Connection to DB Failed";
     }

     include 'details.html';
     $sql2="SELECT * FROM details";
     $res=mysqli_query($con,$sql2);
     ?>
     
     <table>
     <?php

     while($row=mysqli_fetch_assoc($res)){
         echo "<tr><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["choose"]."</td><td>".$row["Subject"]."</td><td>".$row["Message"]."</td></tr>";
     }


     ?>
     </table>
    </body>
</html>