<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Confirmation</title>
  <link rel="stylesheet" href="css/stylecapstone.css" type="text/css">
  <script src="js/javascriptcapstone.js"></script>





</head>
<body>


<?php include 'header.php';?>

<?php include 'navigation.php';?>


<div class="wrapper">
<div class="text-block category"><h1>REQUEST CONFIRMATION</h1></div>


</div>


<div class="spacer"></div>


<div class="wrapper">


<?php



if (isset($_POST['name'])) {
  $name = $_POST['name'];
  echo "Hello, " . $name;
  echo ",";
  echo "<br>";
  echo "<br>";
 } 


if (isset($_POST['room'])) {
  $room = $_POST['room'];
  echo "You have requested training in " . $room;
} 


if (isset($_POST['date'])) {
  $date = $_POST['date'];
  $dateTimeObj = DateTime::createFromFormat('Y-m-d\TH:i', $date);
  $formatteddate = $dateTimeObj->format('F j, Y g:i A');
  echo " at the following time:<br>" . $formatteddate;
} 

  echo "<br>";
  echo "<br>";

if (isset($_POST['help'])) {
  $help = $_POST['help'];
  echo "You requested training on how to: ";
  echo "<br>";
  foreach ($help as $help) {
    echo $help . " <br>";
  }
} else {
  echo "No training categories were selected.";
}

  echo "<br>";

if (isset($_POST['email'])) {
  $email = $_POST['email'];
  echo "We will contact you at " . $email; 
  echo " to confirm your appointment time.";
  
  echo "<br>";
  echo "<br>";
  
  echo "-IT Services";

} 



$to = $email;
$subject = 'IT Service Request Confirmation';
$message = 

'Dear ' . $name . ', 
Thank you for your submission. Your request for assistance in ' . $room . ' on ' . $formatteddate . ' for training has been received. A technician will confirm the appointment with you shortly.
-IT Service Desk';
   
   
$headers = 'From: servicedesk@benjamin.edu' . "\r\n" .
    'Reply-To: servicedesk@benjamin.edu' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

?>



</div>


</body>
</html>