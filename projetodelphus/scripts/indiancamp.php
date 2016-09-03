<html>
      <head>
            <?php
                 include("functions.php");
                 include("indiancampfunctions.php");
                 ?>
            <style>
                   img.bg{
                   position:absolute;
                   z-index:-100;
                   bottom:0;top:0;left:0;right:0;
                    }
            </style>
      </head>
      <body>
            <img src="../bkground/indiancamp2N2.jpg" class="bg">
            <div id="indian_kid" style="position:absolute;top:150;left:180;visibility:visible">
                  <img src="../chars/indian_kid.png" width=270 height=430 onclick="kidtalk1()">
            </div>
            <div id="indiankid_question" style="position:absolute;left:300;visibility:hidden">
                  <img src="../sentences/indiankid_sentence.png" width=350 height=200>
            </div>
            <div id="indiankid_answ" style="position:absolute;top:300;left:450;visibility:hidden">
                 <input type="button" value="Answer" onclick="kidaansw()">
                 <input type="text" size=20>
                 <br>
                 <input type="button" value="..." onclick="kidback1()">
            </div>
      </body>
</html>