<html>
      <head>
            <title>LET'S FIND THE TREASURE</title>
            <link rel="stylesheet" type="text/css" href="delphus_css1.css"/>
            <?php
                 include("functions.php");
            ?>
            <?php
                 session_start();
                 $accounts=mysqli_connect("localhost","root","")or die(mysqli_error());
                 mysqli_select_db($accounts,"delphusdatabase")or die(mysqli_error());
                 $strSQL="UPDATE login SET Model = '".$_POST["model"]."' WHERE nickname = '".$_SESSION["nickname"]."' AND password = '".$_SESSION["password"]."'";
                 $rs=mysqli_query($accounts,$strSQL);
                 mysqli_close($accounts);
             ?>
            <script>
                    function changebk(){
                     document.body.background="../bkground/Rosehouse.jpg";
                     hide(a,b,'follow');
                     hide(a,b,'sent_4');
                     show(a,b,'sent_5');
                    }
                    function next(){
                     hide(a,b,'sent_5');
                     show(a,b,'sent_6');
                    }
                    function go(){
                     window.location.href="principal.php"
                    }
            </script>
            <style>
                   .button{
                          background:url('../buttons/button_12.png');
                          width:124px;
                          height:44px;
                          cursor:pointer;
                          }
                   .button2{
                          background:url('../buttons/button_13.png');
                          width:90px;
                          height:44px;
                          cursor:pointer;
                          }
                   .button3{
                          background:url('../buttons/button_14.png');
                          width:86px;
                          height:44px;
                          cursor:pointer;
                          }
            </style>
      </head>
      <body>
            <center>
            <img src="../chars/Rose_trans.png">
            <img id="sent_4" src="../sentences/sentence_4.jpg" align="top" height="450">
            <br>
            <input id="follow" type="button" class="button" onclick="changebk()">
            </center>
            <div id="sent_5" style="position:absolute; top:80; left:550; visibility:hidden">
            <img src="../sentences/sentence_5.png" height="450" >
            <div style="position:absolute; top:500; left:50">
            <input type="button" class="button2" onclick="next()">
            </div>
            </div>
            <div id="sent_6" style="position:absolute; top:80; left:550; visibility:hidden">
            <img src="../sentences/sentence_6.png" height="450">
            <div style="position:absolute; top:500; left:50">
            <input type="button" class="button3" onclick="go()">
            </div>
            </div>
      </body>
</html>