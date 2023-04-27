<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Request Training</title>
  <link rel="stylesheet" href="css/stylecapstone.css" type="text/css">
  <script src="js/javascriptcapstone.js"></script>



<?php include 'overlay-style.php';?>

<style> 
input[type=submit] {
  background-color: #ededed;
  border: solid;
  border-color: #000000;
  color: #000000;
  padding: 16px 32px;
  width: 100%;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 10px;
  transition-duration: 0.4s;
}

input[type=submit]:hover {
  background-color: #a9a9a9;
}

</style>




</head>
<body>


<?php include 'header.php';?>

<?php include 'navigation.php';?>


<div class="wrapper">
<div class="text-block category"><h1>REQUEST TRAINING</h1></div>


</div>


<div class="wrapper">


<form action="confirm.php" method="post" id="form" class="help-form">


<input type="input" id="name" class="help-input" name="name" placeholder="Name">
<input type="input" id="email" class="help-input" name="email" placeholder="Email">
<input type="input" id="room" class="help-input" name="room" placeholder="Room">
<input type="datetime-local" id="date" class="help-input" name="date">


<div class="tv-color-help help-shape">
    <input type="checkbox" id="display" name="help[]" value="Use the display">
    <label for="help-display"> I need assistance using the display</label>
</div>

<div class="camera-color-help help-shape">
    <input type="checkbox" id="camera" name="help[]" value="Use the camera">
    <label for="help-camera"> I need assistance connecting to and running the camera</label>
</div>  

<div class="microphone-color-help help-shape">
  <input type="checkbox" id="help-mic" name="help[]" value="Use the microphone">
  <label for="help-mic"> I need assistance connecting to and adjusting the levels of the microphone</label>
</div>

<div class="desktop-color-help help-shape">
  <input type="checkbox" id="help-desktop" name="help[]" value="Use the desktop computer">
  <label for="help-desktop"> I need assistance logging into and operating the desktop computer</label>
</div>

<div class="laptop-color-help help-shape">
  <input type="checkbox" id="help-laptop" name="help[]" value="Connect a laptop computer">
  <label for="help-laptop"> I need assistance connecting my laptop to the AV system</label>
</div>

<div class="doccam-color-help help-shape">
  <input type="checkbox" id="help-doccam" name="help[]" value="Use the document camera">
  <label for="help-doccam"> I need assistance turning on and operating the document camera</label>
</div>

<div class="wireless-color-help help-shape">
  <input type="checkbox" id="help-wireless" name="help[]" value="Connect a device to the wireless display">
  <label for="help-wireless"> I need assistance connecting my device to the wireless display</label>
</div>



  <br>
  <input type="submit" value="SUBMIT REQUEST">
</form>


</div>



</body>
</html>