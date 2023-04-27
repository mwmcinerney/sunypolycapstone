<!-- CAMERA BUTTON -->

    <div id="cameraol" onclick="cameraoff()">
    <div class="text">
      <img src="http://people.sunyit.edu/~mcinermw/capstone/images/camera.svg" style="width:auto; height:200px;" class="center"><br><br><br>
      <ul>
        <li>The Camera is connected via USB to the computer</li>
        <li>Use for lecture capture in Panopto</li>
        <li>Use for webconferencing in Webex, Zoom, and Teams</li>
        <li>Adjust pan, tilt, and zoom from control panel</li>
      </ul>
       <div class="text-center">CLICK TO CLOSE</div>
    </div>
      </div>
  <div class="category interact">
  <div class="camera camera-color box1" onclick="cameraon()"></div>
  </div>



<!-- CAMERA SCRIPT -->
<script>
function cameraon() {
  document.getElementById("cameraol").style.display = "block";
}

function cameraoff() {
  document.getElementById("cameraol").style.display = "none";
}
</script>