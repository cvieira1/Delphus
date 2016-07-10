<html>
      <head>
            <style>
                   .mylog{
                          font:22pt "Arial";
                          width:1000px;
                          height:500px;
                         }
            </style>
      </head>
      <body bgcolor=black>
            <?php
                 session_start();
                 $accounts=mysqli_connect("localhost","root","")or die(mysqli_error());
                 mysqli_select_db($accounts,"delphusdatabase")or die(mysqli_error());
                 $id=$_SESSION["id"];
                 $strSQL="SELECT * FROM logs WHERE id='$id'";
                 $rs=mysqli_query($accounts,$strSQL);
                 $row=mysqli_fetch_array($rs);
                 $_SESSION["file"] = $row['file'];
             ?>
            <Center>
            <form name="form1" method="post" action="">
              <textarea name="texto" cols="60" rows="10" id="texto" class="mylog">
              <?php
                echo date("d/m/y H:i");
              ?>
              <?php
                echo "\n\n".$_SESSION["file"];
              ?>
              </textarea>
              <br>
              <input type="button" value="Save">
              <input type="button" value="Load">
              <input type="button" value="Edit">
              <input type="button" value="Confirm">
              <input type="button" value="Remove">
            </form>
            </center>
      <body>
      </body>
</html>