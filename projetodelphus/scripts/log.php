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
            <Center>
            <form name="form1" method="post" action="">
              <textarea name="texto" cols="60" rows="10" id="texto" class="mylog">
              <?php
              echo date("d/m/y");
              ?>
              </textarea>
            </form>
            </center>
      <body>
      </body>
</html>