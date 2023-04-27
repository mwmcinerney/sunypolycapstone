<!-- MICROPHONE BUTTON -->

    <div id="microphoneol" onclick="microphoneoff()">
    <div class="text">
      <img src="http://people.sunyit.edu/~mcinermw/capstone/images/mic.svg" style="width:auto; height:200px;" class="center"><br><br><br>
      <ul>
        <li>The Microphone is connected via USB to the computer</li>
        <li>Use for lecture capture in Panopto</li>
        <li>Use for webconferencing in Webex, Zoom, and Teams</li>
        <li>Adjust audio level from control panel</li>
      </ul>
       <div class="text-center">CLICK TO CLOSE</div>
    </div>
      </div>
  <div class="category interact">    
  <div class="microphone microphone-color box1" onclick="microphoneon()"></div>
  </div>


<!-- MICROPHONE SCRIPT -->
<script>
function microphoneon() {
  document.getElementById("microphoneol").style.display = "block";
}

function microphoneoff() {
  document.getElementById("microphoneol").style.display = "none";
}
</script>