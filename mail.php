<?php
 	$name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

$site = $_SERVER['HTTP_HOST'];
$To_email .= "harmohan.softprodigy@gmail.com";
$Subject2 = 'Inquiry For store';
$To_email2 = $To_email;

$headers2  = 'MIME-Version: 1.0' . "\r\n";

$headers2 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

//$from = "$from"; //put here user email id

//$headers2 .= "From: $site";
$headers2 .= "From: $email";

$msg_body = '<html><body>';

$msg_body .= "
<table cellpadding='3' cellspacing='4' style='border:3px solid #278BCB; background-color:#DDDDDD; ' width='70%' align='center'>
 <tr>
 </tr>
 <tr>
  <td><b>Name :  </b></td><td>$name<td>
 <tr>
 <tr>
  <td><b>Email :  </b></td><td>$email</td>
 </tr>
 <tr> 
  <td><b>Message  :  </b></td><td>$message</td>
 </tr>
 
 </table>";

$msg_body .= '</html></body>';
//echo $msg_body;
$mail_sent = mail("$To_email2","$Subject2","$msg_body","$headers2");
//header("Location: http://softprodigy.in/design/corporate-theme/contact-us.html");

//$mail_sent = mail($mail_to, $subject, $body_message, $headers);
 
    if ($mail_sent == true){ ?>
        <script language="javascript" type="text/javascript">
        alert('Thank you for the message. We will contact you shortly.');
        window.location = 'contact-us.html';
        </script>
    <?php } else { ?>
    <script language="javascript" type="text/javascript">
        alert('Message not sent. Please, notify the site administrator admin@admin.com');
        window.location = 'contact-form.html';
    </script>
    <?php
    }
	
	
?>
