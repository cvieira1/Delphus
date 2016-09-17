<html>
      <head>
            <style>
                   img.bg{                    
                   position:absolute;
                   z-index:-100;
                    top:0;left:0;bottom:0;right:0;
                    }
            </style>
            <script>
                    function destacar(){
                       document.getElementById("bar_mark").style.visibility = "visible";
                     }
                    function redestacar(){
                       document.getElementById("bar_mark").style.visibility = "hidden";
                     }
            </script>
      </head>
      <body>
            <map name="map">
                        <area shape="rect" id="bar" coords="50,50,450,375" href="village_pub_bar.php" onmouseover="destacar()" onmouseout="redestacar()">
            </map>
            <img src="../bkground/pub1.png" class="bg" usemap="#map">
            <div id="drunk1_pub" style="position:absolute;top:120;left:380;visibility:visible">
                 <img src="../chars/drunk1_pub.png">
            </div>
            <div id="drunk2_pub" style="position:absolute;top:170;left:580;visibility:visible">
                 <img src="../chars/drunk2_pub.png">
            </div>
            <div id="bar_mark" style="position:absolute;top:50;left:50;visibility:hidden">
                 <img src="../extra_images/Rmark1.png" width=375 height=325 usemap="#map">
            </div>
      </body>
</html>