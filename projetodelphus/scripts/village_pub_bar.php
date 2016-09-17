<html>
      <head>
            <style>
                   img.bg{
                      position:absolute;
                      z-index:-100;
                      top:0;left:0;bottom:0;right:0;
                     }
                   notice{
                      display:none;
                      position:fixed;
                      z-index:1;
                      padding-top: 100px;
                      left:0;
                      top:0;
                      width: 100%;
                      height: 100%;
                      overflow: auto;
                      background-color: rgb(0,0,0);
                      background-color : rgba(0,0,0,0.4);
                     }
                   .notice-content{
                      position: relative;
                      background-color:#fefefe;
                      margin: auto;
                      padding:0;
                      border: 1px solid #888;
                      width:80%;
                      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
                      -webkit-animation-name: animatetop;
                      -webkit-animation-duration:0.4s;
                      animation-name: animatetop;
                      animation-duration:0.4s
                     }
                    @-webkit-keyframes animatetop{
                      from{top: -300px;opacity:0}
                        to{top:0;opacity:1}
                     }
                    @keyframes animatetop{
                      from{top:-300px;opacity:0}
                        to{top:0;opacity:1}
                     }
                   .close{
                       color:white;
                       float:right;
                       font-size:28px;
                       font-weight:bold;
                     }
                    .close:hover,
                    .close:focus{
                       color:#000;
                       text-decoration: none;
                       cursor:pointer;
                     }
                     .notice-header{
                       padding: 2px 16px;
                       background-color:#5cb85c;
                       color:white;
                     }
                     .notice-body{
                       padding: 2px 16px;
                     }
                     .notice-footer{
                       padding: 2px 16px;
                       background-color:#5cb85c;
                       color:white;
                     } 
            </style>
      </head>
      <body>
            <img src="../bkground/pub1_bar.png" class="bg" width=1250 height=582>
            <div id="bart" style="position:absolute;top:280">
                 <img src="../chars/bart.png" width=400 height=300>
            </div>
            <input type="button" id="mybtn"value="teste">
            <div id="myNotice" class="notice">
                 <div class="notice-content">
                    <div class="notice-header">
                      <span class="close">x</span>
                      <h2>NEWS!!!</h2>
                    </div>
                    <div class="notice-body">
                      <p>This is the new resource of news of Delphus</p>
                    </div>
                    <div class="notice-footer">
                      <h3>By:Caveira</h3>
                    </div>
                 </div>
            </div>
            <script>
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("mybtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close");

// When the user clicks the button, open the modal 
btn.onclick = function() {
    notice.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    notice.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == notice) {
        notice.style.display = "none";
    }
}
            </script>

      </body>
</html>