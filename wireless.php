<!-- WIRELESS DISPLAY BUTTON -->

    <div id="wirelessol" onclick="wirelessoff()">
    <div class="text">
      <img src="http://people.sunyit.edu/~mcinermw/capstone/images/wirelessdisplay.svg" style="width:auto; height:200px;" class="center"><br><br><br>
      <ul>
        <li>The unit is always turned on and ready for connection</li>
        <li>Select Wireless Display from the list of sources on the control panel</li>
        <li>Visit the web address shown on the screen and enter the security code</li>
        <li>Display will mirror your device, and broadcast video and audio</li>
      </ul>
       <div class="text-center">CLICK TO CLOSE</div>
    </div>
      </div>
  <div class="category source">
  <div class="wireless-display wireless-display-color box1" onclick="wirelesson()"></div>
  </div>


<!-- WIRELESS DISPLAY SCRIPT -->
<script>
function wirelesson() {
  document.getElementById("wirelessol").style.display = "block";
}

function wirelessoff() {
  document.getElementById("wirelessol").style.display = "none";
}
</script>
