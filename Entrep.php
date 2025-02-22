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
    <link rel="stylesheet" href="Entrepstyle.css">
    <title></title>
  </head>
  <body>
      <div class="humms">
        <h1 class="HEADER">SOCIETY OF YOUNG ENTREPRENEURSHIP</h1>
      </div>
      <img src="./images/./Entrep/Entrep-dp.jpg" class="humms-dp">

      <div class="join-btn">
      <button name="join" id="btn">Join the Club</button></a>
      </div>

      <div class="modal" id="Mymodal">

      <div class="modal-content">
        <span class="close">&times;</span>

        <form action="Entrep-con.php" method="post">

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
              <input type="submit" class="sbmt-file">
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

      
      <h2 class="posts">Posts</h2>
      <p class="caption">
      🎬 🎊𝐂𝐨𝐧𝐠𝐫𝐚𝐭𝐮𝐥𝐚𝐭𝐢𝐨𝐧𝐬 𝐭𝐨 𝐭𝐡𝐞 𝐖𝐢𝐧𝐧𝐞𝐫𝐬 𝐨𝐟 𝐂𝐨𝐦𝐦𝐞𝐫𝐜𝐢𝐚𝐥𝐬: 𝐑𝐞𝐜𝐫𝐞𝐚𝐭𝐞𝐝! 🎊 🎥
<br>The 𝐂𝐨𝐦𝐦𝐞𝐫𝐜𝐢𝐚𝐥: 𝐑𝐞𝐜𝐫𝐞𝐚𝐭𝐞𝐝! 𝐂𝐨𝐦𝐩𝐞𝐭𝐢𝐭𝐢𝐨𝐧 had each cluster bring one or two groups to present their creative visions to life with iconic TV commercials between 40 seconds and one minute in length. Teams competed to recreate iconic ads, bringing nostalgia, humor, and creativity to the stage. 𝙏𝙝𝙚 𝙖𝙪𝙙𝙞𝙚𝙣𝙘𝙚 𝙝𝙖𝙙 𝙖 𝙗𝙡𝙖𝙨𝙩 𝙛𝙧𝙤𝙢 𝙩𝙝𝙚 𝙥𝙖𝙨𝙩 𝙛𝙧𝙤𝙢 𝙩𝙝𝙚 𝙥𝙖𝙧𝙩𝙞𝙘𝙞𝙥𝙖𝙣𝙩𝙨’ 𝙣𝙤𝙨𝙩𝙖𝙡𝙜𝙞𝙘 𝙨𝙝𝙤𝙬𝙙𝙤𝙬𝙣 𝙤𝙛 𝙘𝙧𝙚𝙖𝙩𝙞𝙫𝙞𝙩𝙮 𝙖𝙣𝙙 𝙩𝙚𝙖𝙢𝙬𝙤𝙧𝙠! 🎬💥
<br>𝗔 𝗵𝗲𝗮𝗿𝘁𝗳𝗲𝗹𝘁 𝗰𝗼𝗻𝗴𝗿𝗮𝘁𝘂𝗹𝗮𝘁𝗶𝗼𝗻𝘀 𝘁𝗼 𝗲𝘃𝗲𝗿𝘆𝗼𝗻𝗲 𝗮𝗻𝗱 𝘁𝗵𝗮𝗻𝗸 𝘆𝗼𝘂 𝘁𝗼 𝗮𝗹𝗹 𝘁𝗵𝗲 𝗽𝗮𝗿𝘁𝗶𝗰𝗶𝗽𝗮𝗻𝘁𝘀 𝗳𝗼𝗿 𝘁𝗵𝗲𝗶𝗿 𝗶𝗻𝗰𝗿𝗲𝗱𝗶𝗯𝗹𝗲 𝘁𝗮𝗹𝗲𝗻𝘁, 𝗮𝗿𝘁𝗶𝘀𝘁𝗿𝘆, 𝗮𝗻𝗱 𝗵𝗮𝗿𝗱 𝘄𝗼𝗿𝗸! 👏🎉 Your dedication and talent were truly appreciated. You really show off the skills of an ABMazing Chief!
𝘾𝙤𝙣𝙜𝙧𝙖𝙩𝙪𝙡𝙖𝙩𝙞𝙤𝙣𝙨, 𝘼𝘽𝙈𝙖𝙯𝙞𝙣𝙜 𝙥𝙖𝙧𝙩𝙞𝙘𝙞𝙥𝙖𝙣𝙩𝙨! 🎥🏅
<br>| 𝐖𝐈𝐍𝐍𝐄𝐑𝐒 |
<br>🎬 𝗖𝗵𝗮𝗺𝗽𝗶𝗼𝗻 - 11 Cluster 4
<br>🎬 𝟭𝘀𝘁 𝗥𝘂𝗻𝗻𝗲𝗿 𝗨𝗽 - 12 Cluster 7
𝙏𝙝𝙚 𝙎𝙤𝙘𝙞𝙚𝙩𝙮 𝙤𝙛 𝙔𝙤𝙪𝙣𝙜 𝙀𝙣𝙩𝙧𝙚𝙥𝙧𝙚𝙣𝙚𝙪𝙧𝙨 𝙖𝙣𝙙 𝘽𝙪𝙨𝙞𝙣𝙚𝙨𝙨𝙢𝙚𝙣 𝙚𝙭𝙩𝙚𝙣𝙙𝙨 𝙩𝙝𝙚𝙞𝙧 𝙜𝙧𝙖𝙩𝙞𝙩𝙪𝙙𝙚 𝙩𝙤 𝙩𝙝𝙚 𝙩𝙖𝙡𝙚𝙣𝙩𝙚𝙙 𝙥𝙖𝙧𝙩𝙞𝙘𝙞𝙥𝙖𝙣𝙩𝙨 𝙛𝙤𝙧 𝙩𝙝𝙚𝙞𝙧 𝙜𝙧𝙚𝙖𝙩 𝙚𝙛𝙛𝙤𝙧𝙩 𝙖𝙣𝙙 𝙥𝙖𝙧𝙩𝙞𝙘𝙞𝙥𝙖𝙩𝙞𝙤𝙣.  💙🤎
<br>#ABMDay2025
#RampaABMbitiousWearandStyletheCareerofyourFuture
#ABaMFutureReady
#SocietyofYoungEntrepreneursandBusinessmen
#SYEBM24_25
#TatakRizal
</p>
    <br>
      <a href=""><img src="./images/./Entrep/sample.jpg" class="sample"></a>
      <a href=""><img src="./images/./Entrep/sample2.jpg" class="sample2"></a>
      <a href=""><img src="./images/./Entrep/sample3.jpg" class="sample3"></a>

  </body>
</html>