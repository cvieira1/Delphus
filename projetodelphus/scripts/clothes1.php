<?php
      session_start();
      error_reporting(0);
      if($_POST["armsh"]=="1"){
        $description="<h5>Braço</h5>";
      }
      if($_POST['action']=="1"){
        if($_SESSION["img1"]=="../all/nothing.png"){
          $_SESSION["description"]="Nada1";
        }
        if($_SESSION["img1"]=="../extra_images/botas.jpg"){
          $_SESSION["description"]="Botas simples";
        }
      }
      if($_POST['action']=="2"){
        if($_SESSION["img2"]=="../all/nothing.png"){
          $_SESSION["description"]="Nada2";
        }
        if($_SESSION["img2"]=="../extra_images/botas.jpg"){
          $_SESSION["description"]="Botas simples";
        }
      }
    ?>