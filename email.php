<?php include('Register.php') ?>
<?php
// Retrieve form data
if(isset($_POST['register']))
{
 $name="";
  if (isset($_POST["name"])) {
     $name = $_POST["name"];
   } 
   $email="";
   if (isset($_POST["email"])) {
     $email = $_POST["email"];
   } 
   $message="";
   if (isset($_POST["message"])) {
     $message = $_POST["message"];
   } 


// Email details
$to = $email;
$subject = 'Thank you for your form submission';
$message = "Dear $name,\n\nThank you for submitting the form. We appreciate your feedback.\n\nBest regards,\nThe Form Team";
$headers = "From: shaikkhadar1226@example.com"; // Set your own email address here

// Send the email
$mailSent = mail($to, $subject, $message, $headers);

// Check if the email was sent successfully
if ($mailSent) {
    echo "Email sent successfully";
} else {
    echo "Failed to send email";
}
}
?>

