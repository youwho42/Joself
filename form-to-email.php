<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];




       
//Validate first
if(empty($name)||empty($visitor_email)) 
{
    echo "Nom, e-mail et adresse sont obligatoire";
    exit;
}

if(IsInjected($visitor_email))
{
    echo "e-mail pas valable!";
    exit;
}

$email_from = 'youwho42@gmail.com';//<== update the email address
$email_subject = $subject;
$email_body = '<html><body>';
$email_body .= "<p><b>$name</b> aimerait devenir <b><i>$membre</i></b> du CAN.\r\n\n</p>".
    "<p>$name\n<br>$addresse\n<br>$city $zip\n<br>$country\n\n</p>
    <p>$message</p>";
$email_body .= '</body></html>';
$to = "membres@can.ch";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: thankyou.php');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 