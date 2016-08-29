<?php
     include("functions.php");
    ?>
<script>
        function answer1(){
          hide(a,b,'sentence1');
          show(a,b,'sentence2');
          hide(a,b,'sentence3');
          hide(a,b,'sentence4');
          hide(a,b,'seta1');
         }
        function answer2(){
          hide(a,b,'sentence1');
          hide(a,b,'sentence2');
          show(a,b,'sentence3');
          hide(a,b,'sentence4');
          hide(a,b,'seta1');         
         }
        function answer3(){
          hide(a,b,'sentence1');
          hide(a,b,'sentence2');
          hide(a,b,'sentence3');
          show(a,b,'sentence4');
          show(a,b,'seta1');
         }
        function normal(){
          hide(a,b,'sentence1');
          hide(a,b,'sentence2');
          hide(a,b,'sentence3');
          hide(a,b,'sentence4');
          hide(a,b,'seta1');
          hide(a,b,'villager1');
          hide(a,b,'buttons1');
          show(a,b,'slum');
         }
        function train(){
          show(a,b,'question_train');
          show(a,b,'buttons_train');
         }
        function deny_train(){
          hide(a,b,'question_train');
          hide(a,b,'buttons_train');
         }
</script>