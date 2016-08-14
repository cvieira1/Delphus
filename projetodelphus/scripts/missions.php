<html>
      <head>
            <?php
                 session_start();
                 $accounts=mysqli_connect("localhost","root","")or die(mysqli_error());
                 mysqli_select_db($accounts,"delphusdatabase")or die(mysqli_error());
                 $id=$_SESSION['id'];
                 $strSQL="SELECT*FROM status WHERE id='$id'";
                 $rs=mysqli_query($accounts,$strSQL);
                 $row=mysqli_fetch_array($rs);
                 $level=$row['level'];
                 echo "<center>";
                 echo "<h1>MISSIONS</h1><br>";
                 if($level==1){
                   echo "Mission 1:Go to the Indian Camp and get 2 honey beers for Rose";
                 }
               ?>
      </head>
      <body>
      </body>
</html>