<html>
      <head>
            <?php
                 include("functions.php");
                 session_start();
            ?>
      </head>
      <body bgcolor=black>
            <?php
                 $goldcoins=$_SESSION["goldcoins"];
                 $silvercoins=$_SESSION["silvercoins"];
                 $coppercoins=$_SESSION["coppercoins"];
                 $level=$_SESSION["level"];
                 $life=$_SESSION["life"];
                 $defence=$_SESSION["defence"];
                 $attack=$_SESSION["attack"];
                 $dextery=$_SESSION["dextery"];
                 $carism=$_SESSION["carism"];
                 echo "<center><h1><font color=white>LEVEL:".$level."(exp:0 de 500)</h1></center>";
                 echo "<h1 align=right><font color=yellow>GoldCoins:".$goldcoins."</h1>";
                 echo "<h1 align=right><font color=grey>SilverCoins:".$silvercoins."</h1>";
                 echo "<h1 align=right><font color=brown>CopperCoins:".$coppercoins."</h1>";
                 echo "<h1 align=left><font color=white>Life:".$life."
                 <input type=\"button\" value=\"+\" enabled=false><input type=\"button\" value=\"-\"></h1>";
                 echo "<h1 align=left><font color=white>Defence:".$defence."
                 <input type=\"button\" value=\"+\" enabled=false><input type=\"button\" value=\"-\"></h1>";
                 echo "<h1 align=left><font color=white>Attack:".$attack."
                 <input type=\"button\" value=\"+\" enabled=false><input type=\"button\" value=\"-\"></h1>";
                 echo "<h1 align=left><font color=white>Dextery:".$dextery."
                 <input type=\"button\" value=\"+\" enabled=false><input type=\"button\" value=\"-\"></h1>";
                 echo "<h1 align=left><font color=white>Carism:".$carism."
                 <input type=\"button\" value=\"+\" enabled=false><input type=\"button\" value=\"-\"></h1>";
            ?>
            <div id="man1" style="position:absolute; top:125; left:550; visibility:hidden">
            <img src="../chars/Man1.jpg">
            </div>
            <div id="man2" style="position:absolute; top:125; left:550; visibility:hidden">
            <img src="../chars/Man2.jpg">
            </div>
            <div id="man3" style="position:absolute; top:125; left:550; visibility:hidden">
            <img src="../chars/Man3.jpg">
            </div>
            <div id="female1" style="position:absolute; top:125; left:550; visibility:hidden">
            <img src="../chars/Female1.jpg">
            </div>
            <div id="female2" style="position:absolute; top:125; left:550; visibility:hidden">
            <img src="../chars/Female2.jpg">
            </div>
            <div id="female3" style="position:absolute; top:125; left:550; visibility:hidden">
            <img src="../chars/Female3.jpg">
            </div>
            <?php
                 $accounts=mysqli_connect("localhost","root","")or die(mysqli_error());
                 mysqli_select_db($accounts,"delphusdatabase")or die(mysqli_error());
                 $nickname=$_SESSION["nickname"];
                 $password=$_SESSION["password"];
                 $strSQL="SELECT * FROM login WHERE nickname='$nickname' AND password='$password'";
                 $rs=mysqli_query($accounts,$strSQL);
                 $row=mysqli_fetch_array($rs); 
                 if($row['Model']==1){
                 echo "<script>show(a,b,'man1');</script>";
                 }elseif($row['Model']==2){
                 echo "<script>show(a,b,'man2');</script>";
                 }elseif($row['Model']==3){
                 echo "<script>show(a,b,'man3');</script>";
                 }elseif($row['Model']==4){
                 echo "<script>show(a,b,'female1');</script>";
                 }elseif($row['Model']==5){
                 echo "<script>show(a,b,'female2');</script>";
                 }elseif($row['Model']==6){
                 echo "<script>show(a,b,'female3');</script>";
                 }else{
                 echo "<script>alert('Sem Modelo');</script>";
                 }
             ?>
      <body>
      </body>
</html>