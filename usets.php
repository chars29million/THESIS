<?php
include 'Dash-board.php';
include 'usets-con.php';
?>
<!DOCTYPE html>
<html>

  <head>
    <title>Usets</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="usetsstyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  </head>

  <body>
    <div class="usets">
      <h1 class="HEADER">UNIFIED SOCIETY OF TECHVOC STUDENTS</h1>
    </div>
    <img src="./images/./usets/usets-circle-removebg-preview.png" class="usets-circle">
    
    <div class="join-btn">
      <button id="btn">Join Club</button>
    </div>

  
    <div class="modal" id="Mymodal">
      <form action="usets-con.php" method="post">
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
              <br>
                <input type="file" id="file" name="Id">
              </div>


              <div class="sbmt">
                <input type="submit" class="sbmt-file" name="submit" />
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

    <h2 class="about">About us</h2>
    <p class="description">𝑮𝒓𝒆𝒆𝒕𝒊𝒏𝒈𝒔, 𝑪𝒉𝒊𝒆𝒇𝒔! We want to garner your attention and address the TVL students in particular!

        𝑻𝒉𝒆 𝑼𝒏𝒊𝒇𝒊𝒆𝒅 𝑺𝒐𝒄𝒊𝒆𝒕𝒚 𝒐𝒇 𝑻𝒆𝒄𝒉 - 𝑽𝒐𝒄 𝑺𝒕𝒖𝒅𝒆𝒏𝒕𝒔 are returning for another exciting and enjoyable year! 💙❤️

        We are pleased to introduce to you our updated logo, which represents the merging of four academic disciplines:
        𝐄𝐥𝐞𝐜𝐭𝐫𝐢𝐜𝐚𝐥 𝐈𝐧𝐬𝐭𝐚𝐥𝐥𝐚𝐭𝐢𝐨𝐧 𝐚𝐧𝐝 𝐌𝐚𝐢𝐧𝐭𝐞𝐧𝐚𝐧𝐜𝐞 (𝐄𝐈𝐌), 𝐇𝐨𝐦𝐞 𝐄𝐜𝐨𝐧𝐨𝐦𝐢𝐜𝐬 (𝐇𝐄), 𝐓𝐨𝐮𝐫 𝐆𝐮𝐢𝐝𝐢𝐧𝐠 (𝐓𝐆), and 𝐈𝐧𝐟𝐨𝐫𝐦𝐚𝐭𝐢𝐨𝐧 𝐚𝐧𝐝 𝐂𝐨𝐦𝐦𝐮𝐧𝐢𝐜𝐚𝐭𝐢𝐨𝐧
        𝐓𝐞𝐜𝐡𝐧𝐨𝐥𝐨𝐠𝐲 (𝐈𝐂𝐓). Their unique creative, and invaluable skills are represented by this logo.

        The Unified Society of Tech - Voc Students are willing to spend time with you and assist you in enhancing your abilities!
    </p>

    <h2 class="posts">Posts</h2>
    <p class="caption">-𝑾𝒊𝒓𝒊𝒏𝒈 𝑰𝒏𝒔𝒕𝒂𝒍𝒍𝒂𝒕𝒊𝒐𝒏 <br>
        -𝑳𝑬𝑫 𝑪𝒊𝒓𝒄𝒖𝒊𝒕 𝑴𝒂𝒌𝒊𝒏𝒈 <br>
        A Showcase of Excellence and Talent: 2 Events, 1 Unforgettable Experience✨
        You are invited to witness the creativity and Skills of our esteemed E.I.M. students as they host Two (2) exciting events on January 30, 2025:
        Join us for a morning of inspiration and delight
        We look forward to share this special occasion with you Chiefs! 🤍💙
        #Techvoc week
        #TechVoc
        #ArellanoUniversity
        #USETS
    </p>
      <br>
      <a href="./images/./usets/photo.jpg"><img src="./images/./usets/photo.jpg" alt="" class="sample"></a>
      <a href="./images/./usets/photo2.jpg"><img src="./images/./usets/photo2.jpg" alt="" class="sample1"></a>
      <a href="./images/./usets/photo3.jpg"><img src="./images/./usets/photo3.jpg" alt="" class="sample2"></a>
      <a href="./images/./usets/photo4.jpg"><img src="./images/./usets/photo4.jpg" alt="" class="sample3"></a>
      <a href="./images/./usets/photo5.jpg"><img src="./images/./usets/photo5.jpg" alt="" class="sample4"></a>
  </body>
</html>