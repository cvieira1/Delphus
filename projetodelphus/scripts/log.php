<?php
     session_start();
     if($_POST["mysql"]){
       if($file = fopen("userlog.txt","w")){
         $accounts=mysqli_connect("localhost","root","")or die(mysqli_error());
         mysqli_select_db($accounts,"delphusdatabase")or die(mysqli_error());
         $strSQL2= "UPDATE logs SET file='".$_POST["texto"]."' WHERE id='".$_SESSION["id"]."' ";
         $rs2=mysqli_query($accounts,$strSQL2);
         mysqli_close($accounts);
       }else{
         echo "Não encontrou o arquivo";
       }
     }
     ?>            
<html>
      <head>
            <script>
                    function save (){
                       alert('lalal');
                     }
            </script>
            <style>
                   .mylog{
                          font:22pt "Arial";
                          width:1000px;
                          height:500px;
                         }
            </style>
      </head>
      <body bgcolor=black>
            <?php
                 if($file = fopen("1.txt","r")){
                   $accounts=mysqli_connect("localhost","root","")or die(mysqli_error());
                   mysqli_select_db($accounts,"delphusdatabase")or die(mysqli_error());
                   $id=$_SESSION["id"];
                   $strSQL="SELECT * FROM logs WHERE id='$id'";
                   $rs=mysqli_query($accounts,$strSQL);
                   $row=mysqli_fetch_array($rs);
                   $_SESSION["file"] = $row['file'];
                   mysqli_close($accounts);
                 }else{
                   echo "Não encontrou o arquivo";
                 }
             ?>
            <Center>
            <form name="form1" method="post" action="<?php $PHP_SELF ?>">
              <textarea name="texto" cols="60" rows="10" id="texto" class="mylog">
              <?php
                echo date("d/m/y H:i");
              ?>
              <?php
                echo "\n\n".$_SESSION["file"];
              ?>
              </textarea>
              <br>
              <input type="submit" name="save" value="Save">
              <input type="button" value="Load" disabled=true>
              <input type="button" value="Edit" disabled=true>
              <input type="button" value="Confirm" disabled=true>
              <input type="button" value="Remove" disabled=true>
              <input type="hidden" name="mysql" value="mysql">
            </form>
            </center>
      <body>
      </body>
</html>