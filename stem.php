<?php
include("Dash-board.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="stemstyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>
    </title>
  </head>
  <body>

      <div class="stem">
        <h1 class="HEADER">PRIDE OF STΣM</h1>
      </div>
      <img src="./images/./stem/stem-dp.jpg" class="stem-dp">

      <div class="join-btn">
      <button id="btn">Join the Club</button>
      </div>

      <div class="modal" id="Mymodal">
        <form action="stem-con.php" method="post">
          <div class="modal-content">
            <span class="close">&times;</span>

              <h1 class="Form-header">Please fill out this Form</h1>

                <div class="Submit1">
                  <p class="question">What position you are applying for?</p>
                  <input type="text" placeholder="Position" name="position">
                </div>
            
                <div class="Submit1">
                  <br>
                  <p class="question">What is your strand and section?</p>
                  <input type="text" placeholder="Strand and Section" name="strand_sec">
                </div>
                <br><br><br><br><br>
                
                <div class="upload">
                  <label for="file" class="labels">Upload your ID</label> 
                  <input type="file" id="file" name="Id">
                </div>
                
                <div class="sbmt">
                  <input type="submit" class="sbmt-file" name="submit">
                </div>

            
          </div>
        </form>
    </div>

    <script>
      var modal = document.getElementById("Mymodal");

      var button = document.getElementById("btn");

      var span = document.getElementsByClassName("close")[0];

      btn.onclick = function(){
        modal.style.display = "block";
      }

      span.onclick = function(){
        modal.style.display = "none";
      }

      window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    </script>

      <p class="caption">𝑾𝒆𝒍𝒄𝒐𝒎𝒆, 𝑭𝒆𝒃𝒓𝒖𝒂𝒓𝒚!🌹❤️
“𝐀 𝐦𝐨𝐧𝐭𝐡 𝐨𝐟 𝐥𝐨𝐯𝐞, 𝐡𝐨𝐩𝐞, 𝐚𝐧𝐝 𝐚𝐛𝐮𝐧𝐝𝐚𝐧𝐜𝐞.”💨💌
As we welcome the second month of the year, may we receive all the things that we’ve been praying for. May this month gives us peace, blessings, and happiness that we truly deserve. Let us remind ourselves on how to embrace every moment and to always smile after a long tiring day. 🌙
This month might be the shortest, but would definitely one of the most memorable ones. We hope that unwavering support, opportunities, and achievements comes your way. Most importantly, let this month be a reminder that it’s okay to take pauses and rest whenever you are tired. Always remember that you are loved and appreciated! 🍁
𝐇𝐞𝐫𝐞’𝐬 𝐭𝐨 𝐜𝐞𝐥𝐞𝐛𝐫𝐚𝐭𝐢𝐧𝐠 𝐞𝐯𝐞𝐫𝐲 𝐦𝐨𝐦𝐞𝐧𝐭 𝐰𝐢𝐭𝐡 𝐥𝐨𝐯𝐞!✨💘
#POS2025
<br>
#WelcomeFebruary
#TatakRizal</p>
      <br>
      <a href="./images/./stem/valentines.jpg"><img src="./images/./stem/valentines.jpg" class="sample"></a>
  </body>
</html>