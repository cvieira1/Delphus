<?php
     if($_GET["act"]=="logout"){
        session_start();
        session_destroy();
        header("location:delphus_principal.php");
        exit;
       }
   ?>