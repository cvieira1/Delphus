<html>
      <head>
            <title>LET'S FIND THE TREASURE</title>
            <link rel="stylesheet" type="text/css" href="delphus_css1.css" />
            <?php
                 session_start();
                 $date = date("d/m/y H:i");
                 $accounts=mysqli_connect("localhost","root","")or die(mysqli_error());
                 mysqli_select_db($accounts,"delphusdatabase")or die(mysqli_error());
                 $strSQL="INSERT INTO login(name,nickname,email,country,sex,password,GoldCoins,SilverCoins,CopperCoins) VALUES ('".$_POST["name"]."','".$_POST["nickname"]."','".$_POST["email"]."','".$_POST["country"]."','".$_POST["sex"]."','".$_POST["password"]."','0','0','0')";
                 $strSQL2="INSERT INTO inventory(head,arms,weapon,body,legs) VALUES ('0','0','0','0','0')";
                 $strSQL3="INSERT INTO status(life,defence,attack,dextery,carism) VALUES('100','100','100','100','100')";
                 $strSQL4="INSERT INTO logs(file1,date1) VALUES('".file_get_contents("userlog.txt")."','$date')";
                 $rs=mysqli_query($accounts,$strSQL);
                 $rs2=mysqli_query($accounts,$strSQL2);
                 $rs3=mysqli_query($accounts,$strSQL3);
                 $rs4=mysqli_query($accounts,$strSQL4);
                 $nickname = $_POST["nickname"];
                 $password = $_POST["password"];
                 $_SESSION["nickname"] = $nickname;
                 $_SESSION["password"] = $password;
                 $_SESSION["level"] = 1;
                 $_SESSION["life"] = 100;
                 $_SESSION["defence"] = 100;
                 $_SESSION["attack"] = 100;
                 $_SESSION["dextery"] = 100;
                 $_SESSION["carism"] = 100;
                 $_SESSION["id"] = mysqli_insert_id($accounts);     
                 mysqli_close($accounts);
             ?>
            <script>
                    var x=0;
                    var y;
                    a="document.all";
                    b=".style";
                    function show(a,b,identy){
                         eval(a+'["'+identy+'"]'+b+'.visibility = "visible"');  
                    }
                    function hide(a,b,identy){
                         eval(a+'["'+identy+'"]'+b+'.visibility = "hidden"');
                    }
                    function turnoff(){
                         y=0;
                         x=0;
                         document.all.status.model=1;
                         hide(a,b,'female1');
                         hide(a,b,'female2');
                         hide(a,b,'female3');
                         hide(a,b,'man2');
                         hide(a,b,'man3');
                         show(a,b,'man1');
                    }
                    function turnon(){
                         y=1;
                         x=0;
                         document.all.status.model=4;
                         hide(a,b,'man1');
                         hide(a,b,'man2');
                         hide(a,b,'man3');
                         hide(a,b,'female2');
                         hide(a,b,'female3');
                         show(a,b,'female1');
                    } 
                    function back(){
                         while(x>=0){
                         x--;
                         if(x==0 && y==0){
                           document.all.status.model[0].value="1";
                           hide(a,b,'man2');
                           show(a,b,'man1');
                           break;                           
                         }else{
                         if(x==1 && y==0){
                           document.all.status.model[0].value="2";
                           hide(a,b,'man3');
                           show(a,b,'man2');
                           break;
                         }
                         }
                         if(x==0 && y==1){
                           document.all.status.model[1].value="4";
                           hide(a,b,'female2');
                           show(a,b,'female1');
                           break;
                         }else{
                         if(x==1 && y==1){
                           document.all.status.model[1]="5";
                           hide(a,b,'female3');
                           show(a,b,'female2');
                           break;
                         }
                         }
                         }
                    } 
                    function next(){
                         while(x<=2){
                         x++;
                         if(x==1 && y==0){
                           document.all.status.model[0].value="2";
                           hide(a,b,'man1');
                           show(a,b,'man2');
                           break;
                         }else{
                         if(x==2 && y==0){
                           document.all.status.model[0].value="3";
                           hide(a,b,'man2');
                           show(a,b,'man3');
                           break;
                         }
                         }
                         if(x==1 && y==1){
                           document.all.status.model[1].value="5";
                           hide(a,b,'female1');
                           show(a,b,'female2');
                           break;
                         }else{
                         if(x==2 && y==1){
                           document.all.status.model[1].value="6";
                           hide(a,b,'female2');
                           show(a,b,'female3');
                           break;
                         }
                         }
                         }
                    }
                    function clicked(){
                         document.all.status.model[0].click();
                    }
            </script>
            <style>
                   .button{
                           background:url('../buttons/button_9.png');
                           width:63px;
                           height:44px;
                           cursor:pointer;
                           }
                   .button2{
                           background:url('../buttons/button_11.png');
                           width:63px;
                           height:44px;
                           cursor:pointer;
                           }
            </style>       
      </head>
      <body ONLOAD="clicked()">
            <form action="intro1.php" method="post" name="status">
            <h1>Choose the model of your character:</h1>
            <div style="position:absolute; top:500; left:100">
            <h2>
            <input type="radio" name="model" value="1" onclick="turnoff()">Male
            <br>
            <input type="radio" name="model" value="4" onclick="turnon()">Female
            </h2>
            </div>
            <br> 
            <center>
            <div id="man1">
            <img src="../chars/Man1.jpg">
            </div>
            <div id="man2" style="position:absolute; top:125; left:500; visibility:hidden">
            <img src="../chars/Man2.jpg">
            </div>
            <div id="man3" style="position:absolute; top:300; left:500; visibility:hidden">
            <img src="../chars/Man3.jpg">
            </div>
            <div id="female1" style="position:absolute; top:125; left:500; visibility:hidden">
            <img src="../chars/Female1.jpg">
            </div>
            <div id="female2" style="position:absolute; top:125; left:500; visibility:hidden">
            <img src="../chars/Female2.jpg">
            </div>
            <div id="female3" style="position:absolute; top:125; left:500; visibility:hidden">
            <img src="../chars/Female3.jpg">
            </div>
            <br>
            <input type="button" class="button" onclick="back()">
            <input type="image" src="../buttons/button_10.png">
            <input type="button" class="button2" onclick="next()">
            </center>
            </form>
      </body>
</html>
    