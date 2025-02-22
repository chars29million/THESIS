<?php
include 'Dash-board.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="SSC-style.css">
    <title>
    </title>
  </head>
  <body>
    
  <div class="usets">
      <h1 class="HEADER">AU-JRC Senior Student Council</h1>
    </div>
    <img src="./images/./SSC/SSC-dp.jpg" class="SSC-dp">
    
    <div class="join-btn">
      <button id="btn">Join Club</button>
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

    <h2 class="about">About us</h2>
    <p class="description">𝐖𝐞𝐥𝐜𝐨𝐦𝐞, 𝐒𝐜𝐡𝐨𝐨𝐥 𝐘𝐞𝐚𝐫 𝟐𝟎𝟐𝟒-𝟐𝟎𝟐𝟓! 🏫❤️💙

As we embrace a fresh start with the new school year, let us all vow to become a stronger and better version of ourselves.

Make this chapter of your academic lives as colorful as you wish, Chiefs! 🌈
<br>
#TatakRizal
#AUSSC2025
    </p>

    <h2 class="posts">Posts</h2>
    <p class="caption">𝑾𝒆𝒂𝒓 𝒚𝒐𝒖𝒓 𝒉𝒆𝒂𝒓𝒕 𝒐𝒏 𝒚𝒐𝒖𝒓 𝒔𝒍𝒆𝒆𝒗𝒆𝒔, 𝑪𝒉𝒊𝒆𝒇𝒔! 💘
In celebration of Valentine’s Day this February 14, 2025, let your outfit do the talking! Show off your love life status by wearing the color that matches your situation. Whether you're in love, in a situationship, or may happy crush, wear your colors and show-off your status!
<br>❤️ 𝗥𝗲𝗱: 𝗜𝗻 𝗟𝗼𝘃𝗲
<br>💙 𝗕𝗹𝘂𝗲: 𝗦𝗶𝘁𝘂𝗮𝘁𝗶𝗼𝗻𝘀𝗵𝗶𝗽 𝗘𝗻𝗷𝗼𝘆𝗲𝗿
<br>🩶 𝗚𝗿𝗮𝘆: 𝗜𝘁'𝘀 𝗖𝗼𝗺𝗽𝗹𝗶𝗰𝗮𝘁𝗲𝗱 
<br>🧡 𝗢𝗿𝗮𝗻𝗴𝗲: 𝗛𝗮𝗻𝗴𝗴𝗮𝗻𝗴 𝗞𝗮-𝘀𝘁𝗿𝗲𝗮𝗸 𝗟𝗮𝗻𝗴
<br>🤍 𝗪𝗵𝗶𝘁𝗲: 𝗡𝗮-𝗚𝗵𝗼𝘀𝘁
<br>💛 𝗬𝗲𝗹𝗹𝗼𝘄: 𝗛𝗮𝗽𝗽𝘆 𝗖𝗿𝘂𝘀𝗵 
<br>🩷 𝗣𝗶𝗻𝗸: 𝗕𝗙𝗙 𝗣𝗿𝗲𝗺𝗶𝘂𝗺 
<br>🖤 𝗕𝗹𝗮𝗰𝗸: 𝗨𝗺𝗮𝗮𝘀𝗮
<br>🤎 𝗨𝗻𝗶𝗳𝗼𝗿𝗺: 𝗦𝘁𝘂𝗱𝘆 𝗙𝗶𝗿𝘀𝘁
<br>As we enjoy the day and express ourselves, please 𝗲𝗻𝘀𝘂𝗿𝗲 𝘁𝗵𝗮𝘁 𝘆𝗼𝘂𝗿 𝗼𝘂𝘁𝗳𝗶𝘁 𝘀𝘁𝗶𝗹𝗹 𝗳𝗼𝗹𝗹𝗼𝘄𝘀 𝘁𝗵𝗲 𝘀𝗰𝗵𝗼𝗼𝗹 𝗱𝗿𝗲𝘀𝘀 𝗰𝗼𝗱𝗲.
𝗗𝗶𝘀𝗰𝗹𝗮𝗶𝗺𝗲𝗿: 𝗧𝗵𝗶𝘀 𝗽𝗼𝗿𝘁𝗶𝗼𝗻 𝗼𝗳 𝘁𝗵𝗲 𝗲𝘃𝗲𝗻𝘁 𝗶𝘀 𝗶𝗻𝘁𝗲𝗻𝗱𝗲𝗱 𝗲𝘅𝗰𝗹𝘂𝘀𝗶𝘃𝗲𝗹𝘆 𝗳𝗼𝗿 𝗲𝗻𝘁𝗲𝗿𝘁𝗮𝗶𝗻𝗺𝗲𝗻𝘁 𝗽𝘂𝗿𝗽𝗼𝘀𝗲𝘀. 𝗧𝗵𝗲 𝗔𝗨𝗦𝗦𝗖-𝗝𝗥𝗖 𝗵𝗮𝘃𝗲 𝗰𝗼𝗼𝗿𝗱𝗶𝗻𝗮𝘁𝗲𝗱 𝘄𝗶𝘁𝗵 𝘀𝗰𝗵𝗼𝗼𝗹 𝗼𝗳𝗳𝗶𝗰𝗶𝗮𝗹𝘀. 𝗣𝗮𝗿𝘁𝗶𝗰𝗶𝗽𝗮𝘁𝗶𝗼𝗻 𝗶𝘀 𝗰𝗼𝗺𝗽𝗹𝗲𝘁𝗲𝗹𝘆 𝗼𝗽𝘁𝗶𝗼𝗻𝗮𝗹 𝗮𝗻𝗱 𝗻𝗼𝘁 𝗿𝗲𝗾𝘂𝗶𝗿𝗲𝗱. 𝗘𝗻𝗷𝗼𝘆 𝗮𝗻𝗱 𝗲𝗻𝗴𝗮𝗴𝗲 𝗿𝗲𝘀𝗽𝗼𝗻𝘀𝗶𝗯𝗹𝘆!
#ValentinesDayCelebration2025
#AUSSC2025
#TatakRizal
    </p>
    <br>
    <a href="./images/./SSC/./Valentines.jpg"><img src="./images/./SSC/./Valentines.jpg" class="sample"></a>

  </body>
</html>