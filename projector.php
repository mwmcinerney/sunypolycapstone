<!-- PROJECTOR BUTTON -->

    <div id="projectorol" onclick="projectoroff()">
    <div class="text">
      <img src="http://people.sunyit.edu/~mcinermw/capstone/images/projector.svg" style="width:auto; height:200px;" class="center"><br><br><br>
      <ul>
        <li>On the control panel, press Display On to turn on the Projector</li>
        <li>Select the desired video source from the control panel</li>
        <li>Use the image Freeze or Blank buttons as needed</li>
        <li>Please turn off Projector when finished</li>
      </ul>
       <div class="text-center">CLICK TO CLOSE</div>
    </div>
      </div>
  <div class="category display">
  <div class="projector projector-color box1" onclick="projectoron()"></div>
  </div>




  <!-- PROJECTOR SCRIPT -->

<script>
function projectoron() {
  document.getElementById("projectorol").style.display = "block";
}

function projectoroff() {
  document.getElementById("projectorol").style.display = "none";
}
</script>  