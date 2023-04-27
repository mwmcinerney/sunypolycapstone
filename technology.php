<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Classroom Technology</title>
  <link rel="stylesheet" href="css/stylecapstone.css" type="text/css">
  <script src="js/javascriptcapstone.js"></script>



<?php include 'overlay-style.php';?>


</head>
<body>


<?php include 'header.php';?>

<?php include 'navigation.php';?>

<?php include 'view-details.php';?>

<div class="wrapper">

<div class="wrapper2">
<div class="text-block category display"><h1>DISPLAYS</h1></div>

<?php include 'tv.php';?>
<?php include 'projector.php';?>

</div>


<div class="spacer"></div>

<div class="wrapper2">
<div class="text-block category interact"><h1>INTERACTIVE</h1></div>

<?php include 'camera.php';?>

<?php include 'microphone.php';?>  

</div>

</div>

<div class="spacer"></div>


<div class="wrapper">
<div class="text-block category source"><h1>SOURCES</h1></div>
</div>



<div class="wrapper">

<?php include 'desktop.php';?>

<?php include 'laptop.php';?>

<?php include 'doccam.php';?>

<?php include 'wireless.php';?>  

</div>




</body>
</html>