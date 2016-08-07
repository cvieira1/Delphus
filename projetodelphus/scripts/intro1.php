<html>
      <head>
            <title>LET'S FIND THE TREASURE</title>
            <link rel="stylesheet" type="text/css" href="delphus_css1.css"/>
            <?php
                 include("functions.php");
            ?>
            <?php
                 session_start();
                 echo $_SESSION["id"];
                 $accounts=mysqli_connect("localhost","root","")or die(mysqli_error());
                 mysqli_select_db($accounts,"delphusdatabase")or die(mysqli_error());
                 $strSQL="UPDATE login SET Model = '".$_POST["model"]."' WHERE nickname = '".$_SESSION["nickname"]."' AND password = '".$_SESSION["password"]."'";
                 $strSQL2="UPDATE inventory SET img1h = '../all/nothing.png', img2h = '../all/nothing.png', img3h = '../all/nothing.png', img4h = '../all/nothing.png', img5h = '../all/nothing.png', img6h = '../all/nothing.png', img7h = '../all/nothing.png', img8h = '../all/nothing.png', img9h = '../all/nothing.png', img10h = '../all/nothing.png', img11h = '../all/nothing.png', img12h = '../all/nothing.png', img1a = '../all/nothing.png', img2a = '../all/nothing.png', img3a = '../all/nothing.png', img4a = '../all/nothing.png', img5a = '../all/nothing.png', img6a = '../all/nothing.png', img7a = '../all/nothing.png', img8a = '../all/nothing.png', img9a = '../all/nothing.png', img10a = '../all/nothing.png', img11a = '../all/nothing.png', img12a = '../all/nothing.png', img1w = '../all/nothing.png', img2w = '../all/nothing.png', img3w = '../all/nothing.png', img4w = '../all/nothing.png', img5w = '../all/nothing.png', img6w = '../all/nothing.png', img7w = '../all/nothing.png', img8w = '../all/nothing.png', img9w = '../all/nothing.png', img10w = '../all/nothing.png', img11w = '../all/nothing.png', img12w = '../all/nothing.png', img1b = '../all/nothing.png', img2b = '../all/nothing.png', img3b = '../all/nothing.png', img4b = '../all/nothing.png', img5b = '../all/nothing.png', img6b = '../all/nothing.png', img7b = '../all/nothing.png', img8b = '../all/nothing.png', img9b = '../all/nothing.png', img10b = '../all/nothing.png', img11b = '../all/nothing.png', img12b = '../all/nothing.png', img1l = '../all/nothing.png', img2l = '../all/nothing.png', img3l = '../all/nothing.png', img4l = '../all/nothing.png', img5l = '../all/nothing.png', img6l = '../all/nothing.png', img7l = '../all/nothing.png', img8l = '../all/nothing.png', img9l = '../all/nothing.png', img10l = '../all/nothing.png', img11l = '../all/nothing.png', img12l = '../all/nothing.png' WHERE id = '".$_SESSION["id"]."'"; 
                 $rs=mysqli_query($accounts,$strSQL);
                 $rs2=mysqli_query($accounts,$strSQL2);
                 mysqli_close($accounts);
             ?>
            <script>
                    function changebk(){
                     document.body.background="../bkground/Rosehouse2h.jpg";
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
            <div id="sent_5" style="position:absolute; top:60; left:550; visibility:hidden">
            <img src="../sentences/sentence_5.png" height="450" >
            <div style="position:absolute; top:475; left:50">
            <input type="button" class="button2" onclick="next()">
            </div>
            </div>
            <div id="sent_6" style="position:absolute; top:60; left:550; visibility:hidden">
            <img src="../sentences/sentence_6.png" height="450">
            <div style="position:absolute; top:475; left:50">
            <input type="button" class="button3" onclick="go()">
            </div>
            </div>
      </body>
</html>