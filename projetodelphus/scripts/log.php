<?php
     session_start();
     error_reporting(0);
     $accounts=mysqli_connect("localhost","root","")or die(mysqli_error());
     mysqli_select_db($accounts,"delphusdatabase")or die(mysqli_error());
     $id=$_SESSION["id"];
     if($_POST["condition"]){        
        if($_POST["saveK"]){
         if($_SESSION["loadK"]==1){
           $strSQL2= "UPDATE logs SET file1='".$_POST["text"]."' WHERE id='".$_SESSION["id"]."' ";
           $strSQL3= "UPDATE logs SET date1='".$_POST["texttime"]."' WHERE id='".$_SESSION["id"]."' ";
           $rs2=mysqli_query($accounts,$strSQL2);
           $rs3=mysqli_query($accounts,$strSQL3);
           $condition=1;
         }
         if($_SESSION["loadK"]==2){
           $strSQL2= "UPDATE logs SET file2='".$_POST["text"]."' WHERE id='".$_SESSION["id"]."' ";
           $strSQL3= "UPDATE logs SET date2='".$_POST["texttime"]."' WHERE id='".$_SESSION["id"]."' ";
           $rs2=mysqli_query($accounts,$strSQL2);
           $rs3=mysqli_query($accounts,$strSQL3);
           $condition=2;
         }
         if($_SESSION["loadK"]==3){
           $strSQL2= "UPDATE logs SET file3='".$_POST["text"]."' WHERE id='".$_SESSION["id"]."' ";
           $strSQL3= "UPDATE logs SET date3='".$_POST["texttime"]."' WHERE id='".$_SESSION["id"]."' ";
           $rs2=mysqli_query($accounts,$strSQL2);
           $rs3=mysqli_query($accounts,$strSQL3);
           $condition=3;
         }
         if($_SESSION["loadK"]==4){
           $strSQL2= "UPDATE logs SET file4='".$_POST["text"]."' WHERE id='".$_SESSION["id"]."' ";
           $strSQL3= "UPDATE logs SET date4='".$_POST["texttime"]."' WHERE id='".$_SESSION["id"]."' ";
           $rs2=mysqli_query($accounts,$strSQL2);
           $rs3=mysqli_query($accounts,$strSQL3);
           $condition=4;
         }
         if($_SESSION["loadK"]==5){
           $strSQL2= "UPDATE logs SET file5='".$_POST["text"]."' WHERE id='".$_SESSION["id"]."' ";
           $strSQL3= "UPDATE logs SET date5='".$_POST["texttime"]."' WHERE id='".$_SESSION["id"]."' ";
           $rs2=mysqli_query($accounts,$strSQL2);
           $rs3=mysqli_query($accounts,$strSQL3);
           $condition=5;
         }
        }
        if($_POST["removeK"]){ 
         if($_SESSION["loadK"]==1){
           $strSQL2= "UPDATE logs SET file1='".file_get_contents("nothing.txt")."' WHERE id='".$_SESSION["id"]."' ";
           $strSQL3= "UPDATE logs SET date1='".file_get_contents("nothing.txt")."' WHERE id='".$_SESSION["id"]."' ";
           $rs2=mysqli_query($accounts,$strSQL2);
           $rs3=mysqli_query($accounts,$strSQL3);
           $condition=1;
         }
         if($_SESSION["loadK"]==2){
           $strSQL2= "UPDATE logs SET file2='".file_get_contents("nothing.txt")."' WHERE id='".$_SESSION["id"]."' ";
           $strSQL3= "UPDATE logs SET date2='".file_get_contents("nothing.txt")."' WHERE id='".$_SESSION["id"]."' ";
           $rs2=mysqli_query($accounts,$strSQL2);
           $rs3=mysqli_query($accounts,$strSQL3);
           $condition=2;
         }
         if($_SESSION["loadK"]==3){
           $strSQL2= "UPDATE logs SET file3='".file_get_contents("nothing.txt")."' WHERE id='".$_SESSION["id"]."' ";
           $strSQL3= "UPDATE logs SET date3='".file_get_contents("nothing.txt")."' WHERE id='".$_SESSION["id"]."' ";
           $rs2=mysqli_query($accounts,$strSQL2);
           $rs3=mysqli_query($accounts,$strSQL3);
           $condition=3;
         }
         if($_SESSION["loadK"]==4){
           $strSQL2= "UPDATE logs SET file4='".file_get_contents("nothing.txt")."' WHERE id='".$_SESSION["id"]."' ";
           $strSQL3= "UPDATE logs SET date4='".file_get_contents("nothing.txt")."' WHERE id='".$_SESSION["id"]."' ";
           $rs2=mysqli_query($accounts,$strSQL2);
           $rs3=mysqli_query($accounts,$strSQL3);
           $condition=4;
         }
         if($_SESSION["loadK"]==5){
           $strSQL2= "UPDATE logs SET file5='".file_get_contents("nothing.txt")."' WHERE id='".$_SESSION["id"]."' ";
           $strSQL3= "UPDATE logs SET date5='".file_get_contents("nothing.txt")."' WHERE id='".$_SESSION["id"]."' ";
           $rs2=mysqli_query($accounts,$strSQL2);
           $rs3=mysqli_query($accounts,$strSQL3);
           $condition=5;
         }    
        }
       }
       $strSQL="SELECT * FROM logs WHERE id='$id'";
       $rs=mysqli_query($accounts,$strSQL);
       $row=mysqli_fetch_array($rs);
       $_SESSION["file1"] = $row['file1'];
       $_SESSION["file2"] = $row['file2'];
       $_SESSION["file3"] = $row['file3'];
       $_SESSION["file4"] = $row['file4'];
       $_SESSION["file5"] = $row['file5'];
       $_SESSION["date1"] = $row['date1'];
       $_SESSION["date2"] = $row['date2'];
       $_SESSION["date3"] = $row['date3'];
       $_SESSION["date4"] = $row['date4'];
       $_SESSION["date5"] = $row['date5'];
       $file = $_SESSION["file1"];
       $date = $_SESSION["date1"];
       if($condition==1){
         $file = $_SESSION["file1"];
         if($_SESSION["date1"]==""){
            $date = date("d/m/y H:i");
         }else{
            $date = $_SESSION["date1"];
         }
       } 
       if($condition==2){
         $file = $_SESSION["file2"];
         if($_SESSION["date2"]==""){
            $date = date("d/m/y H:i");
         }else{
            $date = $_SESSION["date2"];
         }
       } 
       if($condition==3){
         $file = $_SESSION["file3"];
         if($_SESSION["date3"]==""){
           $date = date("d/m/y H:i");
         }else{
           $date = $_SESSION["date3"];
         }
       } 
       if($condition==4){
         $file = $_SESSION["file4"];
         if($_SESSION["date4"]==""){
           $date = date("d/m/y H:i");
         }else{
           $date = $_SESSION["date4"];
         }
       } 
       if($condition==5){
         $file = $_SESSION["file5"];
         if($_SESSION["date5"]==""){
           $date = date("d/m/y H:i");
         }else{
           $date = $_SESSION["date5"];
         }
       } 
     ?>            
<html>
      <head>
            <script>
                   var save,past,del,load1,load2,load3,load4,load5;
                     save=0;
                     past=0;
                     del=0;
                     load1=0;
                     load2=0;
                     load3=0;
                     load4=0;
                     load5=0;                       
                      function query(){
                       if(save==1){
                         document.all.form1.saveK.disabled = false;
                       }
                       if(past==1){
                         document.all.form1.loadK.disabled = false;
                       }
                       if(del==1){
                         document.all.form1.removeK.disabled = false;
                       }
                      }
                     function upload(){
                       save++;
                       document.all.form1.confirm.disabled = false;
                       document.all.form1.reset.disabled = false;
                       document.all.form1.guard.disabled = true;
                       document.all.form1.load.disabled = true;
                       document.all.form1.cancel.disabled = true;
                     }
                     function charge(){
                       past++;
                       document.all.form1.confirm.disabled = false;
                       document.all.form1.reset.disabled = false;
                       document.all.form1.guard.disabled = true;
                       document.all.form1.load.disabled = true;
                       document.all.form1.cancel.disabled = true;
                       document.all.logs.style.visibility='visible';
                     }
                    function notsubmit(){
                       save=0;
                       past=0;
                       del=0;
                       document.all.form1.confirm.disabled = true;
                       document.all.form1.reset.disabled = true;
                       document.all.form1.guard.disabled = false;
                       document.all.form1.load.disabled = false;
                       document.all.form1.cancel.disabled = false;
                       document.all.logs.style.visibility='hidden';
                     }
                    function exclude(){
                       del++;
                       document.all.form1.confirm.disabled = false;
                       document.all.form1.reset.disabled = false;
                       document.all.form1.guard.disabled = true;
                       document.all.form1.load.disabled = true;
                       document.all.form1.cancel.disabled = true;
                     } 
                    function selection(){
                       document.all.form1.loadK.disabled = false;
                       if(load1==1){
                        document.getElementById("loadKid").value = "1";
                       }
                       if(load2==1){
                        document.getElementById("loadKid").value = "2"; 
                       }
                       if(load3==1){
                        document.getElementById("loadKid").value = "3";
                       }
                       if(load4==1){
                        document.getElementById("loadKid").value = "4";
                       }
                       if(load5==1){
                        document.getElementById("loadKid").value = "5";
                       }
                       document.all.form1.submit();                       
                     }
                    function border1(){
                       load1=1;
                       document.getElementById("file1").style.borderColor = "Red";
                       document.getElementById("file1").style.borderWidth = ".2em";
                     }
                    function border2(){
                       load2=1;
                       document.getElementById("file2").style.borderColor = "Red";
                       document.getElementById("file2").style.borderWidth = ".2em";
                     }
                    function border3(){
                       load3=1;
                       document.getElementById("file3").style.borderColor = "Red";
                       document.getElementById("file3").style.borderWidth = ".2em";
                     }
                    function border4(){
                       load4=1;
                       document.getElementById("file4").style.borderColor = "Red";
                       document.getElementById("file4").style.borderWidth = ".2em";
                     }
                    function border5(){
                       load5=1;
                       document.getElementById("file5").style.borderColor = "Red";
                       document.getElementById("file5").style.borderWidth = ".2em";
                     }
                    function normal(){
                       load1=0;
                       load2=0;
                       load3=0;
                       load4=0;
                       load5=0;                       
                       document.getElementById("file1").style.borderColor = "Black";
                       document.getElementById("file1").style.borderWidth = "0";
                       document.getElementById("file2").style.borderColor = "Black";
                       document.getElementById("file2").style.borderWidth = "0";
                       document.getElementById("file3").style.borderColor = "Black";
                       document.getElementById("file3").style.borderWidth = "0";
                       document.getElementById("file4").style.borderColor = "Black";
                       document.getElementById("file4").style.borderWidth = "0";
                       document.getElementById("file5").style.borderColor = "Black";
                       document.getElementById("file5").style.borderWidth = "0";
                     }
            </script>
            <style>
                   .mylogtext{
                          font:22pt "Arial";
                          width:800px;
                          height:425px;
                          resize:none;
                          overflow:hidden;
                          border-width:0;
                         }
                   .mylogtime{
                          font:22pt "Arial";
                          width:800px;
                          height:50px;
                          text-align:left;
                          resize:none;
                          overflow:hidden;
                          border-width:0;
                         }
                   .mylogtime2{
                          font:14pt "Arial";
                          width:150px;
                          height:50px;
                          text-align:center;
                         }
            </style>
      </head>
      <body background="../extra_images/table.jpg">
            <?php
                if($_POST["condition"]){
                   if($_POST["loadK"]==1){
                      $file = $_SESSION["file1"];
                      if($_SESSION["date1"]==""){
                        $date = date("d/m/y H:i");
                      }else{
                        $date = $_SESSION["date1"];
                      }
                      $_SESSION["loadK"]=1;
                   }
                   if($_POST["loadK"]==2){
                      $file = $_SESSION["file2"];
                      if($_SESSION["date2"]==""){
                        $date = date("d/m/y H:i");
                      }else{
                        $date = $_SESSION["date2"];
                      }
                      $_SESSION["loadK"]=2;
                   }
                   if($_POST["loadK"]==3){
                      $file = $_SESSION["file3"];
                      if($_SESSION["date3"]==""){
                        $date = date("d/m/y H:i");
                      }else{
                        $date = $_SESSION["date3"];
                      }
                      $_SESSION["loadK"]=3;
                   }
                   if($_POST["loadK"]==4){
                      $file = $_SESSION["file4"];
                      if($_SESSION["date4"]==""){
                        $date = date("d/m/y H:i");
                      }else{
                        $date = $_SESSION["date4"];
                      }
                      $_SESSION["loadK"]=4;
                   }
                   if($_POST["loadK"]==5){
                      $file = $_SESSION["file5"];
                      if($_SESSION["date5"]==""){
                        $date = date("d/m/y H:i");
                      }else{
                        $date = $_SESSION["date5"];
                      }
                      $_SESSION["loadK"]=5;
                   }
                }
                error_reporting(E_ALL);
               ?>            
            <form name="form1" method="post" action="<?php $PHP_SELF ?>">
              <center>
              <textarea wrap="off" style="background-image:url('../extra_images/theletterdate.jpg')" name="texttime" cols="60" rows="2" id="texttime" class="mylogtime" maxlength="14" scroll=no>
              <?php
                echo $date;
              ?>
              </textarea>
              <textarea wrap="off" style="background-image:url('../extra_images/theletter.jpg')" name="text" cols="60" rows="10" id="texto" class="mylogtext" maxlength="600" scroll=no>
              <?php
                echo $file;
              ?>
              </textarea>
              <br>
              <input type=button name='guard' value='Save' onclick=" upload() ">
              <input type=button name='load' value='Load' onclick="charge()">
              <input type=button name='cancel' value='Remove' onclick=" exclude() ">
              <input type=submit name='confirm' onclick="query()" value='Confirm'  disabled=true>
              <input type=button name='reset' value='Not Confirm' disabled=true onclick=" notsubmit()">
              <input type=hidden name='condition' value='condition'>
              <input type=hidden name='saveK' value='saveK' disabled=true>
              <input type=hidden name='loadK' id='loadKid' disabled=true>
              <input type=hidden name='removeK' value='removeK' disabled=true>
              </center>
              <div id="logs" name="logs" style="position:absolute; top:80; left:1050; visibility:hidden">
                   <br>
                   <br>
                   <input type="button" name='file1' id='file1' value="<?php echo $_SESSION["date1"] ?>" class="mylogtime2" onclick="selection()" onmouseover="border1()" onmouseout="normal()">
                   <br>
                   <br>
                   <input type="button" name='file2' id='file2' value="<?php echo $_SESSION["date2"] ?>" class="mylogtime2" onclick="selection()" onmouseover="border2()" onmouseout="normal()">
                   <br>
                   <br>
                   <input type="button" name='file3' id='file3' value="<?php echo $_SESSION["date3"] ?>" class="mylogtime2" onclick="selection()" onmouseover="border3()" onmouseout="normal()">
                   <br>
                   <br>
                   <input type="button" name='file4' id='file4' value="<?php echo $_SESSION["date4"] ?>" class="mylogtime2" onclick="selection()" onmouseover="border4()" onmouseout="normal()">
                   <br>
                   <br>
                   <input type="button" name='file5' id='file5' value="<?php echo $_SESSION["date5"] ?>" class="mylogtime2" onclick="selection()" onmouseover="border5()" onmouseout="normal()">
              </div>
              <div style="position:absolute; left:50; top:50">
                   <img src="../extra_images/pena05trns.png">
              </div>
            </form>
            <?php
                 mysqli_close($accounts);
                ?>
      </body>
</html>