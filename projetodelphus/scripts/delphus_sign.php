<html>
      <head>
            <title>LET'S FIND THE TREASURE</title>
            <link rel="stylesheet" type="text/css" href="delphus_css1.css"/>
            <script>
                         function back(){
                            window.location.href="delphus_principal.php"
                         }
                         function verify(password,copypassword,name,nickname,email,country,sex){
                           x=0;
                           if(document.all.name.value != "" && document.all.nickname.value != "" && document.all.email.value != "" && document.all.country.value != "" && document.all.sex.value != "" && document.all.password.value != "" && document.all.copypassword.value != ""){
                             x = 1;
                           }else{
                             alert('Complete all the informations.'); 
                           }
                           if(x == 1 && (document.all.email.value.indexOf("@") == -1 || document.all.email.value.indexOf(".") == -1)) {
                             alert('E-mail incorreto');
                           }else if(x == 1 && (document.all.email.value.indexOf("@") != -1 || document.all.email.value.indexOf(".") != -1) ){
                             y = 1;
                           }
                           if(x == 1 && y == 1 && copypassword.value == password.value){
                              alert('Everything is fine,you can start.');
                              document.all.button.style.visibility = "visible";
                           }else if(x == 1 && y == 1 && copypassword.value != password.value){
                              alert('Confirm your password again.');
                           }
                          }   
            </script>
            <style>
                   .button{
                           background:url('../buttons/button_7.png');
                           width:124px;
                           height:44px;
                           cursor:pointer;
                           }
                   .button2{
                           background:url('../buttons/button_8.png');
                           width:105px;
                           height:44px;
                           cursor:pointer;
                           }
            </style>
      </head>
      <body>         
            <form action="sign.php" method="post" name="sign">
            <h2>Name:
            <input type="text" name="name" size=50>
            </h2>
            <h2>Pirate Name:
            <input type="text" name="nickname" size=40>
            </h2>
            <h2>E-mail:
            <input type="text" name="email" size=60>
            </h2>
            <h2>Country:
            <input type="text" name="country" size=30>
            </h2>
            <h2>
            <input type="radio" name="sex" value="Male">Male
            <input type="radio" name="sex" value="Female">Female
            </h2>
            <h2>Password:
            <input type="password" name="password" size=30>
            </h2>
            <h2>Confirm Password:
            <input type="password" name="copypassword" size=30>
            </h2>
            <div id="button" style="visibility:hidden"> 
            <input type="image" src="../buttons/button_6.png">
            </div>
            <center>
            <input type="button" class="button" onclick="back();">
            <input type="button" class="button2" onclick="verify(password,copypassword,name,nickname,email,country,sex);"> 
            </center>
            </form>
      </body>
</html>