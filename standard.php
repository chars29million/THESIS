<?php
include("Dash-board.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="standard-style.css">
    <title></title>
  </head>
  <body>
      <div class="standard">
        <h1 class="HEADER">ARELLANO UNIVERSITY THE STANDARD</h1>
      </div>

      <img src="./images/./standard/standard-dp.jpg" class="standard-dp">

      <div class="join-btn">
        <button id="btn">Join the Club</button>
      </div>

      <div class="modal" id="Mymodal">

      <div class="modal-content">
        <span class="close">&times;</span>

        <form action="Submit">

          <h1 class="Form-header">Please fill out this Form</h1>

            <div class="Submit1">
              <p class="question">What position you are applying for?</p>
              <input type="text" placeholder="Position" name="position">
            </div>
        
            <div class="Submit1">
              <br>
              <p class="question">What is your strand and section?</p>
              <input type="text" placeholder="Strand and Section" name="strand-sec">
            </div>
            <br><br><br><br><br>
            
            <div class="upload">
              <input type="file" id="file">
              <label for="file" class="labels"><i class="fa-solid fa-upload"></i>Upload your ID</label>
            </div>
            
            <div class="sbmt">
              <button type="submit" class="sbmt-file">Submit</button>
            </div>

        </form>
      </div>
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

      <h2>About Us </h2>

      <p class="description">
      The Standard is the official student publication of Arellano University Jose Rizal Campus
At The Standard, we are dedicated to upholding the excellence of campus journalism at Arellano University.
With a strong commitment to honesty, fairness, and justice, we empower every student to boldly express their voice and ideas, 
ensuring that our journalism remains relevant, impactful, and a true reflection of our community.
After all, Truth Conquers All.
<br>
#TSJRC
#TheStandard
#WeAreTheStandard
      </p>

      <h2 class="posts">Posts</h2>

      <p class="caption">𝙋𝙀𝙀𝙋 𝙋𝙀𝙀𝙋! 𝙉𝘼𝙆𝘼𝘽𝘼𝙇𝙄𝙆 𝙉𝘼 𝙎𝘼 𝘼𝙐 𝙅𝙍𝘾, 𝙂𝘼𝙇𝙄𝙉𝙂 𝙎𝘼 𝙎𝙐𝙈𝙐𝙇𝙊𝙉𝙂 📣
𝙋𝙖𝙜𝙗𝙖𝙩𝙞! The Standard - Jose Rizal Campus sa pagdalo at pakikilahok sa nagdaang 𝙅𝙤𝙪𝙧𝙣𝙖𝙡𝙞𝙨𝙢 𝘾𝙤𝙣𝙛𝙚𝙧𝙚𝙣𝙘𝙚 2025 sa Juan Sumulong Campus. Nagtipon-tipon ang mga student journalists sa iba't ibang kampus ng Arellano University upang ipamalas ang kani-kanilang galing sa pagsulat at pagkartoon. 
Magpapahuli ba ang TS JRC sa pasiklaban ng galing sa pagsulat, pagkartoon, at collaborative desktop? Syempre, Hindi! Nag uwi ang TS JRC ng 2 gold medal, 8 bronze medal!🥇🥉
Tiyak na napakahusay at talentado ng mga taga Jose Rizal! Kaya't dito na nagtapos ang byahe papuntang Sumulong! Hanggang sa muli, CJC! 🖊
#TheStandard
<br>
#AUJRC 
#ChiefsJournalismConference2025
      </p>
      <br>
      <a href=""><img src="./images/./standard/sample.jpg" class="sample"></a>
      <a href=""><img src="./images/./standard/sample2.jpg" class="sample2"></a>
      <a href=""><img src="./images/./standard/sample3.jpg" class="sample3"></a>
      <a href=""><img src="./images/./standard/sample4.jpg" class="sample4"></a>
      <a href=""><img src="./images/./standard/sample5.jpg" class="sample5"></a>
      <a href=""><img src="./images/./standard/sample6.jpg" class="sample6"></a>
      <a href=""><img src="./images/./standard/sample7.jpg" class="sample7"></a>
  </body>
</html>