<html>
      <head>
            <title>LET'S FIND THE TREASURE</title>
            <link rel="stylesheet" type="text/css" href="delphus_css1.css"/>
            <?php
                 session_start();
                 $accounts=mysqli_connect("localhost","root","")or die(mysqli_error());
                 mysqli_select_db($accounts,"delphusdatabase")or die(mysqli_error());
                 $strSQL="SELECT*FROM login WHERE (nickname = '".$_POST["nickname"]."') AND (password = '".$_POST["password"]."')";
                 $rs=mysqli_query($accounts,$strSQL);
                 if(mysqli_num_rows($rs)<=0){
                   mysqli_close($accounts);
                   echo "<script>alert('Não existe')</script>";
                   echo "<script>window.location.href='delphus_login.php'</script>";
                 }else{
                   $strSQL2="SELECT*FROM status";
                   $rs2=mysqli_query($accounts,$strSQL2);                   
                   $row=mysqli_fetch_array($rs);
                   $row2=mysqli_fetch_array($rs2);
                   if($row['id']==$row2['id']){
                   $_SESSION["nickname"] = $row['nickname'];
                   $_SESSION["password"] = $row['password'];
                   $_SESSION["goldcoins"] = $row['GoldCoins'];
                   $_SESSION["silvercoins"] = $row['SilverCoins'];
                   $_SESSION["coppercoins"] = $row['CopperCoins'];
                   $_SESSION["level"] = $row2['level'];
                   $_SESSION["life"] = $row2['life'];
                   $_SESSION["defence"] = $row2['defence'];
                   $_SESSION["attack"] = $row2['attack'];
                   $_SESSION["dextery"] = $row2['dextery'];
                   $_SESSION["carism"] = $row2['carism'];
                   echo "<script>window.location.href='principal.php'</script>";
                   mysqli_close($accounts);
                   }else{
                   mysqli_close($accounts);
                   }
                 }
             ?>
      </head>
      <body>
      </body>
</html>