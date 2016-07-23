<?php
     session_start();
     error_reporting(0);
     include("functions.php");
     if($_POST["condition"]){
        $save=$_SESSION["save"];
        $load=$_SESSION["load"];
        $remove=$_SESSION["remove"];
        echo $save;
        echo $load;
        echo $remove;   
        if($save==2){
         $accounts=mysqli_connect("localhost","root","")or die(mysqli_error());
         mysqli_select_db($accounts,"delphusdatabase")or die(mysqli_error());
         $strSQL2= "UPDATE logs SET file1='".$_POST["text"]."' WHERE id='".$_SESSION["id"]."' ";
         $strSQL3= "UPDATE logs SET date1='".$_POST["texttime"]."' WHERE id='".$_SESSION["id"]."' ";
         $rs2=mysqli_query($accounts,$strSQL2);
         $rs3=mysqli_query($accounts,$strSQL3);
         mysqli_close($accounts);
        }
        if($remove==2){ 
         $accounts=mysqli_connect("localhost","root","")or die(mysqli_error());
         mysqli_select_db($accounts,"delphusdatabase")or die(mysqli_error());
         $strSQL2= "UPDATE logs SET file1='".file_get_contents("nothing.txt")."' WHERE id='".$_SESSION["id"]."' ";
         $strSQL3= "UPDATE logs SET date1='".file_get_contents("userlog.txt")."' WHERE id='".$_SESSION["id"]."' ";
         $rs2=mysqli_query($accounts,$strSQL2);
         $rs3=mysqli_query($accounts,$strSQL3);
         mysqli_close($accounts);    
        }
     }
     error_reporting(E_ALL);
     ?>            
<html>
      <head>
            <script>
                     var save;
                     var load;
                     var remove;
                     save=0;
                     load=0;
                     remove=0;
                     function teste(save,load,remove){
                      alert(save);alert(load);alert(remove);
                      if(save==1){
                        document.write("<?php $_SESSION["save"]=2; ?>");
                      }
                      if(load==1){
                        document.write("<?php $_SESSION["load"]=2; ?>");
                      }
                      if(remove==1){
                        document.write("<?php $_SESSION["remove"]=2; ?>");
                      }
                     }
                     function upload(save){
                       alert(save);
                       save=1;
                       document.all.form1.confirm.disabled = false;
                       document.all.form1.reset.disabled = false;
                       document.all.form1.guard.disabled = true;
                       document.all.form1.load.disabled = true;
                       document.all.form1.cancel.disabled = true;
                       return save;
                     }
                    function charge(load){
                       alert(load);
                       load=1;
                       document.all.form1.confirm.disabled = false;
                       document.all.form1.reset.disabled = false;
                       document.all.form1.guard.disabled = true;
                       document.all.form1.load.disabled = true;
                       document.all.form1.cancel.disabled = true;
                       document.all.logs.style.visibility="visible";
                       return load;
                     }
                    function notsubmit(save,load,remove){
                       save,load,remove=0;
                       document.all.form1.confirm.disabled = true;
                       document.all.form1.reset.disabled = true;
                       document.all.form1.guard.disabled = false;
                       document.all.form1.load.disabled = false;
                       document.all.form1.cancel.disabled = false;
                       hide(a,b,'logs');
                       return save,load,remove;
                     }
                    function exclude(remove){
                       alert(remove);
                       remove=1;
                       document.all.form1.confirm.disabled = false;
                       document.all.form1.reset.disabled = false;
                       document.all.form1.guard.disabled = true;
                       document.all.form1.load.disabled = true;
                       document.all.form1.cancel.disabled = true;
                       return remove;
                     }
            </script>
            <style>
                   .mylogtext{
                          font:22pt "Arial";
                          width:800px;
                          height:450px;
                         }
                   .mylogtime{
                          font:22pt "Arial";
                          width:800px;
                          height:50px;
                         }
                   .mylogtime2{
                          font:22pt "Arial";
                          width:150px;
                          height:50px;
                         }
            </style>
      </head>
      <body bgcolor=black>
            <?php
                 $accounts=mysqli_connect("localhost","root","")or die(mysqli_error());
                 mysqli_select_db($accounts,"delphusdatabase")or die(mysqli_error());
                 $id=$_SESSION["id"];
                 $strSQL="SELECT * FROM logs WHERE id='$id'";
                 $rs=mysqli_query($accounts,$strSQL);
                 $row=mysqli_fetch_array($rs);
                 $_SESSION["file1"] = $row['file1'];
                 $_SESSION["file2"] = $row['file2'];
                 $_SESSION["file3"] = $row['file3'];
                 $_SESSION["file4"] = $row['file4'];
                 $_SESSION["file5"] = $row['file5'];
                 $_SESSION["date1"] = $row['date1'];
                 $date = $_SESSION["date1"];
                 $_SESSION["date2"] = $row['date2'];
                 $_SESSION["date3"] = $row['date3'];
                 $_SESSION["date4"] = $row['date4'];
                 $_SESSION["date5"] = $row['date5'];              
                 mysqli_close($accounts);
             ?>
            <Center>
            <form name="form1" method="post" action="<?php $PHP_SELF ?>">
              <textarea name="texttime" cols="60" rows="2" id="texttime" class="mylogtime">
              <?php
                echo $date;
              ?>
              </textarea>
              <textarea name="text" cols="60" rows="10" id="texto" class="mylogtext">
              <?php
                echo $_SESSION["file1"];
              ?>
              </textarea>
              <br>
              <input type="button" name="guard" value="Save" onclick="upload(save)">
              <input type="button" name="load" value="Load" onclick="charge(load)">
              <input type="button" name="cancel" value="Remove" onclick="exclude(remove)">
              <input type="submit" name="confirm" value="Confirm" disabled=true onclick="teste(save,load,remove)">
              <input type="button" name="reset" value="Not Confirm" disabled=false onclick="notsubmit(save,load,remove)">
              <input type="hidden" name="condition" value="condition">
              <div id="logs" style="position:absolute; top:80; left:1050; visibility:hidden">
                   <br>
                   <br>
                   <input type="text" value="<?php echo $_SESSION["date1"] ?>" size=20 class="mylogtime2">
                   <br>
                   <br>
                   <input type="text" value="<?php echo $_SESSION["date2"] ?>" size=20 class="mylogtime2">
                   <br>
                   <br>
                   <input type="text" value="<?php echo $_SESSION["date3"] ?>" size=20 class="mylogtime2">
                   <br>
                   <br>
                   <input type="text" value="<?php echo $_SESSION["date4"] ?>" size=20 class="mylogtime2">
                   <br>
                   <br>
                   <input type="text" value="<?php echo $_SESSION["date5"] ?>" size=20 class="mylogtime2">
              </div>
            </form>
            </center>
      </body>
</html>