  <!-- DOC CAM BUTTON -->

  <div id="doccamol" onclick="doccamoff()">
    <div class="text">
      <img src="http://people.sunyit.edu/~mcinermw/capstone/images/doccam.svg" style="width:auto; height:200px;" class="center"><br><br><br>
      <ul>
        <li>Turn on using the power button on top of the Document Camera</li>
        <li>Select Document Camera from the list of sources on the control panel</li>
        <li>Control zoom, rotation, and white balance with the controls on top of the Document Camera</li>
        <li>Adjust neck of the camera to capture content to display</li>
      </ul>
       <div class="text-center">CLICK TO CLOSE</div>
    </div>
      </div>
  <div class="category source">
  <div class="document-camera document-camera-color box1" onclick="doccamon()"></div>
  </div>


<!-- DOC CAM SCRIPT -->
<script>
function doccamon() {
  document.getElementById("doccamol").style.display = "block";
}

function doccamoff() {
  document.getElementById("doccamol").style.display = "none";
}
</script>
