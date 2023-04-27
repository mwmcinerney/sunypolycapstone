<!-- DESKTOP BUTTON -->

    <div id="desktopol" onclick="desktopoff()">
    <div class="text">
      <img src="http://people.sunyit.edu/~mcinermw/capstone/images/desktop.svg" style="width:auto; height:200px;" class="center"><br><br><br>
      <ul>
        <li>Turn on using the power button on the front of the PC</li>
        <li>Select PC from the list of sources on the control panel</li>
        <li>This PC runs Windows 11</li>
        <li>Keyboard, mouse, and wireless presentation clicker are located on pull out tray</li>
      </ul>
       <div class="text-center">CLICK TO CLOSE</div>
    </div>
      </div>
  <div class="category source">    
  <div class="desktop-computer desktop-computer-color box1" onclick="desktopon()"></div>
  </div>


<!-- DESKTOP COMPUTER SCRIPT-->
<script>
function desktopon() {
  document.getElementById("desktopol").style.display = "block";
}

function desktopoff() {
  document.getElementById("desktopol").style.display = "none";
}
</script>

