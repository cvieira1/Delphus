<html>
      <head>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <?php
                 include("functions.php");
                 session_start();
                 $id=$_SESSION["id"];
                 $accounts=mysqli_connect("localhost","root","")or die(mysqli_error());
                 mysqli_select_db($accounts,"delphusdatabase")or die(mysqli_error());
                 $strSQL="SELECT * FROM status WHERE id='$id'";
                 $rs=mysqli_query($accounts,$strSQL);
                 $row=mysqli_fetch_array($rs);
                 $_SESSION["level"]=$row['level'];
                 $_SESSION["exp"]=$row['exp'];
                 $_SESSION["life"]=$row['life'];
                 $_SESSION["defence"]=$row['defence'];
                 $_SESSION["attack"]=$row['attack'];
                 $_SESSION["dextery"]=$row['dextery'];
                 $_SESSION["carism"]=$row['carism'];
                 $_SESSION["goldcoins"]=$row['GoldCoins'];
                 $_SESSION["silvercoins"]=$row['SilverCoins'];
                 $_SESSION["coppercoins"]=$row['CopperCoins'];
                 $_SESSION["points"]=$row['points'];
            ?>
      </head>
            <script>
                    function levelup(){
                     document.all.lifeup.disabled=false;
                     document.all.attackup.disabled=false;
                     document.all.defenceup.disabled=false;
                     document.all.dexteryup.disabled=false;
                     document.all.carismup.disabled=false;
                     }
                     $(document).ready(function(){
                       $('#lifeupid').click(function(){
                        $.ajax({ url:'statusajax.php',
                                 data:{upgrade:'1'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                          window.location.reload();                      
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $('#defenceupid').click(function(){
                        $.ajax({ url:'statusajax.php',
                                 data:{upgrade:'2'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                          window.location.reload();                      
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $('#attackupid').click(function(){
                        $.ajax({ url:'statusajax.php',
                                 data:{upgrade:'3'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                          window.location.reload();                      
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $('#dexteryupid').click(function(){
                        $.ajax({ url:'statusajax.php',
                                 data:{upgrade:'4'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                          window.location.reload();                      
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $('#carismupid').click(function(){
                        $.ajax({ url:'statusajax.php',
                                 data:{upgrade:'5'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                          window.location.reload();                      
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $('#lifedownid').click(function(){
                        $.ajax({ url:'statusajax.php',
                                 data:{downgrade:'1'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                          window.location.reload();                      
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $('#defencedownid').click(function(){
                        $.ajax({ url:'statusajax.php',
                                 data:{downgrade:'2'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                          window.location.reload();                      
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $('#attackdownid').click(function(){
                        $.ajax({ url:'statusajax.php',
                                 data:{downgrade:'3'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                          window.location.reload();                      
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $('#dexterydownid').click(function(){
                        $.ajax({ url:'statusajax.php',
                                 data:{downgrade:'4'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                          window.location.reload();                      
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $('#carismdownid').click(function(){
                        $.ajax({ url:'statusajax.php',
                                 data:{downgrade:'5'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                          window.location.reload();                      
                                          }
                        });
                       });
                      });
            </script>
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
                 $exp=$_SESSION["exp"];
                 if($_SESSION["points"]<1){
                   $points=0;
                 }else{
                   $points=$_SESSION["points"];
                 }
                 $expmax=200*pow(140/100,$level-1);
                 $_SESSION["upgrade"]=1;                 
                 echo "<center><h1><font color=white>LEVEL:".$level."(exp:".$exp." de ".$expmax.")</h1></center>";
                 echo "<h1 align=right><font color=yellow><img src='../extra_images/gold_coinN3.jpg'>:".$goldcoins."</h1>";
                 echo "<h1 align=right><font color=grey><img src='../extra_images/silver_coin.png'>:".$silvercoins."</h1>";
                 echo "<h1 align=right><font color=brown><img src='../extra_images/copper_coin.png'>:".$coppercoins."</h1>";
                 echo "<div style='position:absolute; top:150'>";
                 echo "<h1 align=left><font color=white>Life:".$life."
                 <input type=\"button\" id='lifeupid' name='lifeup' value=\"+\" disabled=true><input type=\"button\" id='lifedownid' name='lifedown' value=\"-\" disabled=true></h1>";
                 echo "<h1 align=left><font color=white>Defence:".$defence."
                 <input type=\"button\" id='defenceupid' name='defenceup' value=\"+\" disabled=true><input type=\"button\" id='defencedownid' name='defencedown'value=\"-\" disabled=true></h1>";
                 echo "<h1 align=left><font color=white>Attack:".$attack."
                 <input type=\"button\" id='attackupid' name='attackup' value=\"+\" disabled=true><input type=\"button\" id='attackdownid' name='attackdown' value=\"-\" disabled=true></h1>";
                 echo "<h1 align=left><font color=white>Dextery:".$dextery."
                 <input type=\"button\" id='dexteryupid' name='dexteryup' value=\"+\" disabled=true><input type=\"button\" id='dexterydownid' name='dexterydown' value=\"-\" disabled=true></h1>";
                 echo "<h1 align=left><font color=white>Carism:".$carism."
                 <input type=\"button\" id='carismupid' name='carismup' value=\"+\" disabled=true><input type=\"button\" id='carismdownid' name='carismdown' value=\"-\" disabled=true></h1>";
                 echo "<h1 align=left><font color=green>POINTS:+".$points."</h1>";
                 echo "</div>";
                 if($exp==$expmax){
                   $levelup = $level+1;
                   $_SESSION["points"]++;
                   $pointup = $_SESSION["points"]; 
                   $strSQL2="UPDATE status SET level='$levelup',points='$pointup' WHERE id='$id'";
                   $rs2=mysqli_query($accounts,$strSQL2);
                 }
                 if($_SESSION["points"]>0){
                    echo "<script>levelup()</script>";                   
                 }
            ?>
            <div id="man1" style="position:absolute; top:125; left:550; visibility:hidden">
            <img src="../chars/Man1.jpg">
            </div>
            <div id="man2" style="position:absolute; top:80; left:550; visibility:hidden">
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
                 $strSQL3="SELECT * FROM login WHERE id='$id'";
                 $rs3=mysqli_query($accounts,$strSQL3);
                 $row3=mysqli_fetch_array($rs3); 
                 if($row3['Model']==1){
                   echo "<script>show(a,b,'man1');</script>";
                 }elseif($row3['Model']==2){
                   echo "<script>show(a,b,'man2');</script>";
                 }elseif($row3['Model']==3){
                   echo "<script>show(a,b,'man3');</script>";
                 }elseif($row3['Model']==4){
                   echo "<script>show(a,b,'female1');</script>";
                 }elseif($row3['Model']==5){
                   echo "<script>show(a,b,'female2');</script>";
                 }elseif($row3['Model']==6){
                   echo "<script>show(a,b,'female3');</script>";
                 }else{
                   echo "<script>alert('Sem Modelo');</script>";
                 }
             ?>
      </body>
</html>