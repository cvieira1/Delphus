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
                   $row=mysqli_fetch_array($rs);
                   $_SESSION["id"] = $row['id'];
                   $_SESSION["nickname"] = $row['nickname'];
                   $_SESSION["model"]= $row['Model'];
                   $_SESSION["loadK"] = 1;
                   echo "<script>window.location.href='principal.php'</script>";
                   mysqli_close($accounts);
                 }
             ?>
      </head>
      <body>
      </body>
</html>