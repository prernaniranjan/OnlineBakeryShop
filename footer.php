<div class="footer">
    <div class="footer1">
        <h2 style="margin-left: 10%;">QUCIK LINKS</h2>
        <?php include 'menus/footermenu.php'; ?>
        
    </div>
    <div class="footer2"><h2 style="text-align: center;"><b>LOCATIONS</b></h2>
        <select id="selectitem" onchange="myfunction()">
            <option value="<br>A3/2 30 Opp. St Francis School,<br> JanakpuriNew Delhi<br><br><b><a>01145066551,8447799290</a></b>">Delhi</option>
            <option value="<br>B-50 New Krishna park opp.Raymond Showroom <br>vikarpuri New Delhi<br><br><b><a>01140394749</a></b>">Janakpuri</option>
        </select>
        <div id="demo" style="width:100%; color:white;"><br><br>A3/2 30 Opp. St Francis School,<br> JanakpuriNew Delhi<br><br><a>01145066551,8447799290</a></div>
    </div>
    <div class="footer3"><h2 style="text-align: center;"><b>WE ARE SOCIAL</b></h2><br>
        <div class="facebooklink"><i class="fab fa-facebook-f" style="font-size:4vw; margin-top:5px;  "></i></div><br>
        <br>
        
        
         <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">LEAVE US YOUR FEEDBACK</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2 style="color:maroon;">Write To Us</h2>
      </header>
      <div class="w3-container">
          <form action="reviewsubmit.php" method="post" enctype="multipart/form-data">
          <input type="text" name="name" placeholder="Name"><br><br>
          <input type="text" placeholder="Mobile Number" name="mobilenumber" autocomplete="off"required /><br><br>
          <input type="email" placeholder="User Email" name="email" required /><br><br>
          <input type="message" placeholder="Message" name="message" required/><br><br>
           <input type="submit" value="Submit" name="submit"/>
           </form>
      </div>
      <footer class="w3-container w3-teal">
        <p>Modal Footer</p>
      </footer>
    </div>
  </div>
        
    </div>
</div>
<script>
    function myfunction(){
       var x=document.getElementById("selectitem").value;
       document.getElementById("demo").innerHTML=x;
    }
    </script>