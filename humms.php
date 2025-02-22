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
    <link rel="stylesheet" href="humms-style.css">
    <title></title>
  </head>
  <body>
      <div class="humms">
        <h1 class="HEADER">HUMANITIES AND SOCIAL SCIENCES SOCIETY </h1>
      </div>
      <img src="./images/./humms/humms-dp.jpg" class="humms-dp">

      <div class="join-btn">
      <button name="join" id="btn">Join the Club</button></a>
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
      <p class="description">
      𝑨𝒍𝒂𝒃 𝒏𝒈 𝑯𝒊𝒎𝒂𝒈𝒔𝒊𝒌𝒂𝒏, 𝑳𝒊𝒘𝒂𝒏𝒂𝒈 𝒏𝒈 𝑲𝒂𝒍𝒂𝒚𝒂𝒂𝒏: 𝑲𝒂𝒃𝒂𝒕𝒂𝒂𝒏, 𝑷𝒂𝒈-𝒂𝒔𝒂 𝒏𝒈 𝑩𝒂𝒚𝒂𝒏 💛✨️

Ngayong 𝐇𝐔𝐌𝐒𝐒 𝐖𝐞𝐞𝐤 𝟐𝟎𝟐𝟓, muli nating balikan ang mga kwento ng himagsikan—ang tapang, sakripisyo, at pagkakaisa ng ating mga bayani na nagbigay-liwanag sa landas tungo sa kalayaan. 🔮🪶

𝘏𝘢𝘭𝘪𝘯𝘢'𝘵 𝘴𝘢𝘮𝘢𝘩𝘢𝘯 𝘯𝘪𝘺𝘰 𝘬𝘢𝘮𝘪, 𝘏𝘶𝘮𝘢𝘯𝘪𝘴𝘵𝘢, 𝘴𝘢 𝘱𝘢𝘨𝘪𝘨𝘪𝘯𝘨 𝘭𝘪𝘸𝘢𝘯𝘢𝘨 𝘴𝘢 𝘥𝘪𝘭𝘪𝘮 𝘱𝘢𝘳𝘢 𝘴𝘢 𝘱𝘢𝘨-𝘢𝘴𝘢 𝘯𝘨 𝘢𝘵𝘪𝘯𝘨 𝘮𝘢𝘩𝘢𝘭 𝘯𝘢 𝘣𝘢𝘺𝘢𝘯! 🇵🇭🥀
<br>
#AlabNgHimagsikan
#HUMSSWeekCelebration2025
#HUMMSDay2025
#HUMSSSociety
      </p>
      
      <h2 class="posts">Posts</h2>
      <p class="caption">𝑲𝒊𝒍𝒂𝒍𝒂𝒏𝒊𝒏 𝒂𝒏𝒈 𝒎𝒈𝒂 𝑯𝒖𝒓𝒂𝒅𝒐 𝒏𝒂 𝒎𝒂𝒈𝒑𝒂𝒑𝒂𝒔𝒊𝒌𝒍𝒂𝒃 𝒏𝒈 𝒕𝒂𝒍𝒆𝒏𝒕𝒐 𝒏𝒈 𝒎𝒈𝒂 𝑯𝒖𝒎𝒂𝒏𝒊𝒔𝒕𝒂! <br>
❤️‍🔥 Tunay na nag-aalab ang panahon ngayong 𝐇𝐔𝐌𝐒𝐒 𝐃𝐚𝐲 𝟐𝟎𝟐𝟓, kasama ang ating mga hinahangaang hurado—as we ignite the spirit of “𝑨𝒍𝒂𝒃 𝒏𝒈 𝑯𝒊𝒎𝒂𝒈𝒔𝒊𝒌𝒂𝒏,” we proudly introduce the remarkable people who will serve as the judges for the events we have in store for you!
<br>📜 In the mystical 𝐏𝐡𝐢𝐥𝐢𝐩𝐩𝐢𝐧𝐞 𝐅𝐨𝐥𝐤 𝐃𝐚𝐧𝐜𝐞 𝐂𝐨𝐦𝐩𝐞𝐭𝐢𝐭𝐢𝐨𝐧, our judges will bring their sharp minds and keen eyes for detail to ensure every participant’s brilliance is recognized! 🌟 Expect them to bring their appreciation for artistry and creativity as they witness performances filled with energy, emotion, and passion from the students.
 Proudly, we introduce our 𝐒𝐞𝐧𝐢𝐨𝐫 𝐇𝐢𝐠𝐡 𝐒𝐜𝐡𝐨𝐨𝐥 𝐎𝐒𝐀 𝐂𝐨𝐨𝐫𝐝𝐢𝐧𝐚𝐭𝐨𝐫, 𝐌𝐬. 𝐉𝐞𝐧𝐧𝐢𝐥𝐲𝐧 𝐔. 𝐃𝐞𝐬𝐚𝐛𝐢𝐥𝐥𝐞, our 𝐁𝐫𝐚𝐧𝐜𝐡 𝐎𝐒𝐀 𝐂𝐨𝐨𝐫𝐝𝐢𝐧𝐚𝐭𝐨𝐫,
 𝐌𝐬. 𝐊𝐚𝐫𝐥𝐚 𝐉𝐨𝐚𝐧 𝐌𝐚𝐠𝐝𝐚𝐞𝐭, and the 𝐑𝐏𝐀𝐆 𝐂𝐨-𝐀𝐝𝐯𝐢𝐬𝐞𝐫, 𝐌𝐫. 𝐋𝐨𝐫𝐞𝐧𝐳𝐨 𝐌𝐢𝐠𝐮𝐞𝐥 𝐈𝐠𝐧𝐚𝐜𝐢𝐨. 𝘈𝘯𝘨 𝘬𝘢𝘯𝘪𝘭𝘢𝘯𝘨 𝘱𝘳𝘦𝘴𝘦𝘯𝘴𝘺𝘢 𝘴𝘢 𝘢𝘵𝘪𝘯𝘨 𝘱𝘢𝘵𝘪𝘮𝘱𝘢𝘭𝘢𝘬 𝘢𝘺 𝘮𝘢𝘨𝘴𝘪𝘴𝘪𝘭𝘣𝘪 𝘣𝘪𝘭𝘢𝘯𝘨 𝘪𝘯𝘴𝘱𝘪𝘳𝘢𝘴𝘺𝘰𝘯 𝘱𝘢𝘳𝘢 𝘴𝘢 𝘢𝘵𝘪𝘯𝘨 𝘮𝘨𝘢 𝘮𝘢𝘩𝘶𝘩𝘶𝘴𝘢𝘺 𝘯𝘢 𝘬𝘢𝘭𝘢𝘩𝘰𝘬!
 <br>Let us give our judges the warmest welcome as they join us in making 𝐇𝐔𝐌𝐒𝐒 𝐃𝐚𝐲 𝟐𝟎𝟐𝟓 an unforgettable celebration! 👏🏻🪄
Join us this afternoon of February 3rd! 𝐖𝐞'𝐫𝐞 𝐞𝐱𝐜𝐢𝐭𝐞𝐝 𝐭𝐨 𝐡𝐚𝐯𝐞 𝐲𝐨𝐮 𝐜𝐞𝐥𝐞𝐛𝐫𝐚𝐭𝐞 𝐰𝐢𝐭𝐡 𝐮𝐬! ⚖️✨️
<br>
#AlabNgHimagsikan
#PhilippineFolkDanceCompetition
#HUMSSDay2025  
#HUMSSSociety</p>
    <br>
    
    <img src="./images/./humms/sample.jpg" class="sample" >
    <a href=""><img src="./images/./humms/sample2.jpg" class="sample2"></a>
    <a href=""><img src="./images/./humms/sample3.jpg" class="sample3"></a>

  </body>
</html>