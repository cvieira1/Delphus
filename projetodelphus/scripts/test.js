<script>
        function verify(password,copypassword,name,nickname,email,country,sex){
                           var x=0;
                           if(document.all.name.value != "" && document.all.nickname.value != "" && document.all.email.value != "" && document.all.country.value != "" && document.all.sex.value != "" && document.all.password.value != "" && document.all.copypassword.value != ""){
                           x = x + 1;
                           }else{
                           alert('Complete all the informations.'); 
                            }
                           if(x == 1 && copypassword.value == password.value){
                           alert('Everything is fine,you can start.')
                           document.all.button.style.visibility = "visible";
                           }else{
                           alert('Confirm your password again.');
                           }
                           }
</script>