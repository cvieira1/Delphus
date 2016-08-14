<?php
     session_start();
     $accounts=mysqli_connect("localhost","root","")or die(mysqli_error());
     mysqli_select_db($accounts,"delphusdatabase")or die(mysqli_error());
     if($_POST["upgrade"]==1){
       $lifeup=$_SESSION["life"]+50;
       $pointdown=$_SESSION["points"]-1;
       $strSQL="UPDATE status SET life='$lifeup',points='$pointdown' WHERE id='$_SESSION[id]'";
       $rs=mysqli_query($accounts,$strSQL);
     }
     if($_POST["upgrade"]==2){
       $defenceup=$_SESSION["defence"]+50;
       $pointdown=$_SESSION["points"]-1;
       $strSQL="UPDATE status SET life='$defenceup',points='$pointdown' WHERE id='$_SESSION[id]'";
       $rs=mysqli_query($accounts,$strSQL);
     }
     if($_POST["upgrade"]==3){
       $attackup=$_SESSION["attack"]+50;
       $pointdown=$_SESSION["points"]-1;
       $strSQL="UPDATE status SET life='$attackup',points='$pointdown' WHERE id='$_SESSION[id]'";
       $rs=mysqli_query($accounts,$strSQL);
     }
     if($_POST["upgrade"]==4){
       $dexteryup=$_SESSION["dextery"]+50;
       $pointdown=$_SESSION["points"]-1;
       $strSQL="UPDATE status SET life='$dexteryup',points='$pointdown' WHERE id='$_SESSION[id]'";
       $rs=mysqli_query($accounts,$strSQL);
     }
     if($_POST["upgrade"]==5){
       $carismup=$_SESSION["carism"]+50;
       $pointdown=$_SESSION["points"]-1;
       $strSQL="UPDATE status SET life='$carismup',points='$pointdown' WHERE id='$_SESSION[id]'";
       $rs=mysqli_query($accounts,$strSQL);
     }
     if($_POST["downgrade"]==1){
       $lifedown=$_SESSION["life"]-50;
       $pointup=$_SESSION["points"]+1;
       $strSQL="UPDATE status SET life='$lifedown',points='$pointup' WHERE id='$_SESSION[id]'";
       $rs=mysqli_query($accounts,$strSQL);
     }
     if($_POST["downgrade"]==2){
       $defencedown=$_SESSION["defence"]-50;
       $pointup=$_SESSION["points"]+1;
       $strSQL="UPDATE status SET life='$defencedown',points='$pointup' WHERE id='$_SESSION[id]'";
       $rs=mysqli_query($accounts,$strSQL);
     }
     if($_POST["downgrade"]==3){
       $attackdown=$_SESSION["attack"]-50;
       $pointup=$_SESSION["points"]+1;
       $strSQL="UPDATE status SET life='$attackdown',points='$pointup' WHERE id='$_SESSION[id]'";
       $rs=mysqli_query($accounts,$strSQL);
     }
     if($_POST["downgrade"]==4){
       $dexterydown=$_SESSION["dextery"]-50;
       $pointup=$_SESSION["points"]+1;
       $strSQL="UPDATE status SET life='$dexterydown',points='$pointup' WHERE id='$_SESSION[id]'";
       $rs=mysqli_query($accounts,$strSQL);
     }
     if($_POST["downgrade"]==5){
       $carismdown=$_SESSION["carism"]-50;
       $pointup=$_SESSION["points"]+1;
       $strSQL="UPDATE status SET life='$carismdown',points='$pointup' WHERE id='$_SESSION[id]'";
       $rs=mysqli_query($accounts,$strSQL);
     }
   ?>