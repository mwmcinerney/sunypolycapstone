 <!-- TV BUTTON -->

  <div id="tvol" onclick="tvoff()">
    <div class="text">
      <img src="http://people.sunyit.edu/~mcinermw/capstone/images/tv.svg" style="width:auto; height:200px;" class="center"><br><br><br>
      <ul>
        <li>On the control panel, press Display On to turn on the TV</li>
        <li>Select the desired video source from the control panel</li>
        <li>Please turn off TV when finished</li>
      </ul>
       <div class="text-center">CLICK TO CLOSE</div>
    </div>
      </div>
  <div class="category display">
  <div class="tv tv-color box1" onclick="tvon()"></div>
  </div>

<!-- TV SCRIPT -->

  <script>
function tvon() {
  document.getElementById("tvol").style.display = "block";
}

function tvoff() {
  document.getElementById("tvol").style.display = "none";
}
</script>