<html>
      <head>
            <title>LET'S FIND THE TREASURE</title>
            <link rel="stylesheet" type="text/css" href="delphus_css1.css"/>
            <meta name="keywords" content="delphus online,pirate game,delphus">
            <meta name="description" content="Be a Pirate!Access now and make your dreams come real!">
            <script>
      
               function login(){
               window.location.href="delphus_login.php"
              }
               function putsentence2(){
               document.all.sentence1.style.visibility = "hidden";
               document.all.sentence2.style.visibility = "visible";
               document.all.sentence3.style.visibility = "hidden";
              }
               function putsentence3(){
               document.all.sentence1.style.visibility = "hidden";
               document.all.sentence2.style.visibility = "hidden";
               document.all.sentence3.style.visibility = "visible";
              }
               function returnsentence1(){
               document.all.sentence1.style.visibility = "visible";
               document.all.sentence2.style.visibility = "hidden";
               document.all.sentence3.style.visibility = "hidden";
              }
             </script>
      </head>
      <body>
            <form>
            <center>
            <h1><image src="../skull1.jpg" align="left">Welcome to Delphus,Pirate!!!<image src="../skull1.jpg" align="right"></h1>
            <h1>Where your dreams come true...</h1>
            <h1>hahahahahahaha</h1>
            <a href="delphus_sign.php" onmouseover="putsentence2()" onmouseout="returnsentence1()"><img src="../buttons/button_4.png"></a>
            <a href="delphus_login.php" onmouseover="putsentence3()" onmouseout="returnsentence1()"><img src="../buttons/button_5.png"></a>
            </center>
            <div style="position:absolute; top:375; left:400">
            <image src="../chars/captain1.jpg">
            </div>
            <div id="sentence1" style="position:absolute; top:375; left:600">
            <image src="../sentences/sentence_1.jpg">
            </div>
            <div id="sentence2" style="position:absolute; top:250; left:600; visibility:hidden">
            <image src="../sentences/sentence_2.jpg">
            </div>
            <div id="sentence3" style="position:absolute; top:250; left:600; visibility:hidden">
            <image src="../sentences/sentence_3.jpg">
            </div>
            </form>
      </body>
</html>