<!-- LAPTOP BUTTON -->

    <div id="laptopol" onclick="laptopoff()">
    <div class="text">
      <img src="http://people.sunyit.edu/~mcinermw/capstone/images/laptop.svg" style="width:auto; height:200px;" class="center"><br><br><br>
      <ul>
        <li>You must supply your own laptop</li>
        <li>Select Laptop from the list of sources on the control panel</li>
        <li>Connect using the provided HDMI cable</li>
        <li>Charge laptop using the outlet on top of the instructor station</li>
      </ul>
       <div class="text-center">CLICK TO CLOSE</div>
    </div>
      </div>
  <div class="category source">    
  <div class="laptop-computer laptop-computer-color box1" onclick="laptopon()"></div>
  </div>



<!-- LAPTOP SCRIPT-->
<script>
function laptopon() {
  document.getElementById("laptopol").style.display = "block";
}

function laptopoff() {
  document.getElementById("laptopol").style.display = "none";
}
</script>
