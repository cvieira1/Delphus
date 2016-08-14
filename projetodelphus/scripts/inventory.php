            <?php
                 session_start();
                 error_reporting(0);
                 $accounts=mysqli_connect("localhost","root","")or die(mysqli_error());
                 mysqli_select_db($accounts,"delphusdatabase")or die(mysqli_error());
                 $id=$_SESSION["id"];
                 if($_SESSION["model"]==1){
                  include("clothes1.php");
                  echo "<script> var x=1;</script>";
                 }
                 if($_SESSION["model"]==2){
                  include("clothes2.php");
                  echo "<script> var x=2;</script>";
                 }
                 if($_SESSION["model"]==3){
                  include("clothes3.php");
                  echo "<script> var x=3;</script>";
                 }
                 if($_SESSION["model"]==4){
                  include("clothes4.php");
                  echo "<script> var x=4;</script>";
                 }
                 if($_SESSION["model"]==5){
                  include("clothes5.php");
                  echo "<script> var x=5;</script>";
                 }
                 if($_SESSION["model"]==6){
                  include("clothes6.php");
                  echo "<script> var x=6;</script>";
                 }
                 $strSQL="SELECT * FROM inventory WHERE id='$id'";
                 $rs=mysqli_query($accounts,$strSQL);
                 $row=mysqli_fetch_array($rs);
                 $_SESSION["img1"]=$row["img1h"];
                 $_SESSION["img2"]=$row["img2h"];
                 $_SESSION["img3"]=$row["img3h"];
                 $_SESSION["img4"]=$row["img4h"];
                 $_SESSION["img5"]=$row["img5h"];
                 $_SESSION["img6"]=$row["img6h"];
                 $_SESSION["img7"]=$row["img7h"];
                 $_SESSION["img8"]=$row["img8h"];
                 $_SESSION["img9"]=$row["img9h"];
                 $_SESSION["img10"]=$row["img10h"];
                 $_SESSION["img11"]=$row["img11h"];
                 $_SESSION["img12"]=$row["img12h"];
                  if($_POST["armsh"]=="1"){
                   $_SESSION["img1"]=$row["img1a"];
                   $_SESSION["img2"]=$row["img2a"];
                   $_SESSION["img3"]=$row["img3a"];
                   $_SESSION["img4"]=$row["img4a"];
                   $_SESSION["img5"]=$row["img5a"];
                   $_SESSION["img6"]=$row["img6a"];
                   $_SESSION["img7"]=$row["img7a"];
                   $_SESSION["img8"]=$row["img8a"];
                   $_SESSION["img9"]=$row["img9a"];
                   $_SESSION["img10"]=$row["img10a"];
                   $_SESSION["img11"]=$row["img11a"];
                   $_SESSION["img12"]=$row["img12a"];
                  }
                  if($_POST["weaponh"]=="1"){
                   $_SESSION["img1"]=$row["img1w"];
                   $_SESSION["img2"]=$row["img2w"];
                   $_SESSION["img3"]=$row["img3w"];
                   $_SESSION["img4"]=$row["img4w"];
                   $_SESSION["img5"]=$row["img5w"];
                   $_SESSION["img6"]=$row["img6w"];
                   $_SESSION["img7"]=$row["img7w"];
                   $_SESSION["img8"]=$row["img8w"];
                   $_SESSION["img9"]=$row["img9w"];
                   $_SESSION["img10"]=$row["img10w"];
                   $_SESSION["img11"]=$row["img11w"];
                   $_SESSION["img12"]=$row["img12w"];
                  }
                  if($_POST["bodyh"]=="1"){
                   $_SESSION["img1"]=$row["img1b"];
                   $_SESSION["img2"]=$row["img2b"];
                   $_SESSION["img3"]=$row["img3b"];
                   $_SESSION["img4"]=$row["img4b"];
                   $_SESSION["img5"]=$row["img5b"];
                   $_SESSION["img6"]=$row["img6b"];
                   $_SESSION["img7"]=$row["img7b"];
                   $_SESSION["img8"]=$row["img8b"];
                   $_SESSION["img9"]=$row["img9b"];
                   $_SESSION["img10"]=$row["img10b"];
                   $_SESSION["img11"]=$row["img11b"];
                   $_SESSION["img12"]=$row["img12b"];
                  }
                  if($_POST["legsh"]==1){
                   $_SESSION["img1"]=$row["img1l"];
                   $_SESSION["img2"]=$row["img2l"];
                   $_SESSION["img3"]=$row["img3l"];
                   $_SESSION["img4"]=$row["img4l"];
                   $_SESSION["img5"]=$row["img5l"];
                   $_SESSION["img6"]=$row["img6l"];
                   $_SESSION["img7"]=$row["img7l"];
                   $_SESSION["img8"]=$row["img8l"];
                   $_SESSION["img9"]=$row["img9l"];
                   $_SESSION["img10"]=$row["img10l"];
                   $_SESSION["img11"]=$row["img11l"];
                   $_SESSION["img12"]=$row["img12l"];
                  }
                 ?>
<html>
      <head>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script>
                     function headf2(){
                       document.all.form1.armsh.value="0";
                       document.all.form1.weaponh.value="0";
                       document.all.form1.bodyh.value="0";
                       document.all.form1.legsh.value="0";
                       document.all.form1.submit();
                     }
                     function armsf2(){
                       document.all.form1.armsh.value="1";
                       document.all.form1.weaponh.value="0";
                       document.all.form1.bodyh.value="0";
                       document.all.form1.legsh.value="0";
                       document.all.form1.submit();
                     }
                     function weaponf2(){
                       document.all.form1.armsh.value="0";
                       document.all.form1.weaponh.value="1";
                       document.all.form1.bodyh.value="0";
                       document.all.form1.legsh.value="0";
                       document.all.form1.submit();
                     }
                     function bodyf2(){
                       document.all.form1.armsh.value="0";
                       document.all.form1.weaponh.value="0";
                       document.all.form1.bodyh.value="1";
                       document.all.form1.legsh.value="0";
                       document.all.form1.submit();
                     }
                     function legsf2(){
                       document.all.form1.armsh.value="0";
                       document.all.form1.weaponh.value="0";
                       document.all.form1.bodyh.value="0";
                       document.all.form1.legsh.value="1";
                       document.all.form1.submit();
                     }
                     if(x==1){
                     $(document).ready(function(){
                       $("div.img1").mouseover(function(){
                        $.ajax({ url:'clothes1.php',
                                 data:{action:'1'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $("div.img2").mouseover(function(){
                        $.ajax({ url:'clothes1.php',
                                 data:{action:'2'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $("div.img3").mouseover(function(){
                        $.ajax({ url:'clothes1.php',
                                 data:{action:'3'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $("div.img4").mouseover(function(){
                        $.ajax({ url:'clothes1.php',
                                 data:{action:'4'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $("div.img5").mouseover(function(){
                        $.ajax({ url:'clothes1.php',
                                 data:{action:'5'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $("div.img6").mouseover(function(){
                        $.ajax({ url:'clothes1.php',
                                 data:{action:'6'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     }
                     if(x==2){
                     $(document).ready(function(){
                       $("div.img1").mouseover(function(){
                        $.ajax({ url:'clothes2.php',
                                 data:{action:'1'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $("div.img2").mouseover(function(){
                        $.ajax({ url:'clothes2.php',
                                 data:{action:'2'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $("div.img3").mouseover(function(){
                        $.ajax({ url:'clothes2.php',
                                 data:{action:'3'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $("div.img4").mouseover(function(){
                        $.ajax({ url:'clothes2.php',
                                 data:{action:'4'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $("div.img5").mouseover(function(){
                        $.ajax({ url:'clothes2.php',
                                 data:{action:'5'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $("div.img6").mouseover(function(){
                        $.ajax({ url:'clothes2.php',
                                 data:{action:'6'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     }
                     if(x==3){
                     $(document).ready(function(){
                       $("div.img1").mouseover(function(){
                        $.ajax({ url:'clothes3.php',
                                 data:{action:'1'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $("div.img2").mouseover(function(){
                        $.ajax({ url:'clothes3.php',
                                 data:{action:'2'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $("div.img3").mouseover(function(){
                        $.ajax({ url:'clothes3.php',
                                 data:{action:'3'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $("div.img4").mouseover(function(){
                        $.ajax({ url:'clothes3.php',
                                 data:{action:'4'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $("div.img5").mouseover(function(){
                        $.ajax({ url:'clothes3.php',
                                 data:{action:'5'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $("div.img6").mouseover(function(){
                        $.ajax({ url:'clothes3.php',
                                 data:{action:'6'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     }
                     if(x==4){
                     $(document).ready(function(){
                       $("div.img1").mouseover(function(){
                        $.ajax({ url:'clothes4.php',
                                 data:{action:'1'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $("div.img2").mouseover(function(){
                        $.ajax({ url:'clothes4.php',
                                 data:{action:'2'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $("div.img3").mouseover(function(){
                        $.ajax({ url:'clothes4.php',
                                 data:{action:'3'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $("div.img4").mouseover(function(){
                        $.ajax({ url:'clothes4.php',
                                 data:{action:'4'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $("div.img5").mouseover(function(){
                        $.ajax({ url:'clothes4.php',
                                 data:{action:'5'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $("div.img6").mouseover(function(){
                        $.ajax({ url:'clothes4.php',
                                 data:{action:'6'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     }
                     if(x==5){
                     $(document).ready(function(){
                       $("div.img1").mouseover(function(){
                        $.ajax({ url:'clothes5.php',
                                 data:{action:'1'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $("div.img2").mouseover(function(){
                        $.ajax({ url:'clothes5.php',
                                 data:{action:'2'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $("div.img3").mouseover(function(){
                        $.ajax({ url:'clothes5.php',
                                 data:{action:'3'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $("div.img4").mouseover(function(){
                        $.ajax({ url:'clothes5.php',
                                 data:{action:'4'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $("div.img5").mouseover(function(){
                        $.ajax({ url:'clothes5.php',
                                 data:{action:'5'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $("div.img6").mouseover(function(){
                        $.ajax({ url:'clothes5.php',
                                 data:{action:'6'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     }
                     if(x==6){
                     $(document).ready(function(){
                       $("div.img1").mouseover(function(){
                        $.ajax({ url:'clothes6.php',
                                 data:{action:'1'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $("div.img2").mouseover(function(){
                        $.ajax({ url:'clothes6.php',
                                 data:{action:'2'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $("div.img3").mouseover(function(){
                        $.ajax({ url:'clothes6.php',
                                 data:{action:'3'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $("div.img4").mouseover(function(){
                        $.ajax({ url:'clothes6.php',
                                 data:{action:'4'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $("div.img5").mouseover(function(){
                        $.ajax({ url:'clothes6.php',
                                 data:{action:'5'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     $(document).ready(function(){
                       $("div.img6").mouseover(function(){
                        $.ajax({ url:'clothes6.php',
                                 data:{action:'6'},
                                 async:false,
                                 type:'post',
                                 success:function(description){
                                           window.location.reload();
                                          }
                        });
                       });
                      });
                     }
            </script>
            <style>
                   table,th,td{
                      border:1px solid black;
                      border-collapse: collapse;
                    }
                    th,td{
                      text-align:center;
                    }
                    a:link{
                      color:black;
                    }
                    a:visited{
                      color:black;
                    }
            </style>
      </head>
      <body>
            <center>
            <table style="width:100%; height:100%">
                   <tr>
                        <th colspan="6"></th>
                        <th>Description</th>
                   </tr>
                   <tr>
                       <td colspan="6"><form><input type=button value="Head" onclick="headf2()"></form></td>
                       <td rowspan="4"><?php echo $_SESSION["description"]; ?></td>
                   </tr>
                   <tr>
                       <td colspan="3"><form><input type=button value="Arms" onclick="armsf2()"></form></td>
                       <td colspan="3"><form><input type=button value="Weapon" onclick="weaponf2()"></form></td> 
                   </tr>
                   <tr>
                       <td colspan="6"><form><input type=button value="Body" onclick="bodyf2()"></form></td>
                   </tr>
                   <tr>
                       <td colspan="6"><form><input type=button value="Legs" onclick="legsf2()"></form></td>
                   </tr>
                   <tr>
                       <td><div class="img1"><img src="<?php echo $_SESSION['img1']; ?>" onmouseover="descriptionf()"/></div></td>
                       <td><div class="img2"><img src="<?php echo $_SESSION['img2']; ?>" onmouseover="description()"/></div></td>
                       <td><div class="img3"><img src="<?php echo $_SESSION['img3']; ?>" onmouseover="description()"/></div></td>
                       <td><div class="img4"><img src="<?php echo $_SESSION['img4']; ?>" onmouseover="description()"/></div></td>
                       <td><div class="img5"><img src="<?php echo $_SESSION['img5']; ?>" onmouseover="description()"/></div></td>
                       <td><div class="img6"><img src="<?php echo $_SESSION['img6']; ?>" onmouseover="description()"/></div></td>
                       <td rowspan="2"><b><a href="">NEXT</a></b></td>
                   </tr>
                   <tr>
                       <td><div class="img7"><img src="<?php echo $_SESSION['img7']; ?>"/></div></td>
                       <td><div class="img8"><img src="<?php echo $_SESSION['img8']; ?>"/></div></td>
                       <td><div class="img9"><img src="<?php echo $_SESSION['img9']; ?>"/></div></td>
                       <td><div class="img10"><img src="<?php echo $_SESSION['img10']; ?>"/></div></td>
                       <td><div class="img11"><img src="<?php echo $_SESSION['img11']; ?>"/></div></td>
                       <td><div class="img12"><img src="<?php echo $_SESSION['img12']; ?>"/></div></td>
                   </tr>
             </table> 
             <form name="form1" id="form1id" method="post" action="<?php $PHP_SELF ?>">
               <input type=hidden name='condition' value='condition'>               
               <input type=hidden name='headh' value="0">
               <input type=hidden name='armsh' >
               <input type=hidden name='weaponh' >
               <input type=hidden name='bodyh' >
               <input type=hidden name='legsh' >
             </form>
             <?php
                  error_reporting(E_ALL);
                  mysqli_close($accounts);
                  ?>
             </center>
      </body>
</html>