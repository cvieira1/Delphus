<html>
      <head>
            <?php
                 session_start();
                 include("functions.php");
                 include("missionfunctions.php");
                 $accounts=mysqli_connect("localhost","root","")or die(mysqli_error());
                 mysqli_select_db($accounts,"delphusdatabase")or die(mysqli_error());
                 $id=$_SESSION["id"];
                 $strSQL="SELECT*FROM status WHERE id='$id'";
                 $rs=mysqli_query($accounts,$strSQL);
                 $row=mysqli_fetch_array($rs);
               ?>
            <style>
                   img.bg{                    
                   position:absolute;
                   z-index:-100;
                    top:0;left:0;bottom:0;right:0;
                    }
            </style>
      </head>
      <body>
            <map name="map">
                      <area shape="rect" coords="1000,50,1150,350" href="village_pub.php">
            </map>
            <img src="../bkground/VillageN2.jpg" class="bg" usemap="#map">
            <div id="villager1" style="position:absolute;top:150;left:300;visibility:visible">
                 <img src="../chars/villager_trans.png">
            </div>
            <div id="sentence1" style="position:absolute;left:500;visibility:visible">
                 <img src="../sentences/villager_sentence1.png">
            </div>
            <div id="sentence2" style="position:absolute;left:500;visibility:hidden">
                 <img src="../sentences/villager_sentence2.png">
            </div>
            <div id="sentence3" style="position:absolute;left:500;visibility:hidden">
                 <img src="../sentences/villager_sentence3.png">
            </div>
            <div id="sentence4" style="position:absolute;left:500;visibility:hidden">
                 <img src="../sentences/villager_sentence4.png">
            </div>
            <div id="seta1" style="position:absolute;left:900;top:100;visibility:hidden">
                 <img src="../extra_images/seta.png">
            </div>
            <div id="slum" style="position:absolute;left:275;top:175;visibility:hidden">
                 <img src="../chars/villager1_trans.png" width=150 height=200 onclick="train()">
            </div>
            <div id="buttons1" style="position:absolute;top:350;left:650;visibility:visible">
                 <input type="button" value="Who are you?" onclick="answer1()">
                 <br>
                 <input type="button" value="Where can I find cool-honey?" onclick="answer2()">
                 <br>
                 <input type="button" value="Where is the pub?" onclick="answer3()">
                 <br>
                 <input type="button" value="Bye!!" onclick="normal()">
            </div>
            <div id="question_train" style="position:absolute;left:325;top:75;visibility:hidden">
                 <img src="../sentences/question_train.png">
            </div>
            <div id="buttons_train" style="position:absolute;left:425;top:225;visibility:hidden">
                 <input type="button" value="Yes!" onclick="accept_train()">
                 <br>
                 <input type="button" value="No.." onclick="deny_train()">
            </div>

            <?php
                 if($row["level"]==1 && $row["missions"]==0){
                  }
                ?>
      </body>
</html>