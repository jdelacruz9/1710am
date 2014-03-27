// <?php
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $number = $_POST['number']
//     $message = $_POST['message'];
//     $from = 'From: TuAltarRadial'; 
//     $to = 'jjdl_cn@hotmail.com'; 
//     $subject = 'Hello';

//     $body = "From: $name\n E-Mail: $email\n  Number: $number\n Message:\n $message";

// 	if ($_POST['submit']) {
// 	    if (mail ($to, $subject, $body, $from)) { 
// 	        echo '<p>Your message has been sent!</p>';
// 	    } else { 
// 	        echo '<p>Something went wrong, go back and try again!</p>'; 
// 	    }
// 	}
// ?>


<?php
$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_message = $_POST['message'];


$mail_to = 'jjdl_cn@hotmail.com';
$subject = '#HOLA# '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

// $headers = 'From: '.E-Mail."\r\n";
// $headers .= 'Reply-To: '.$E-Mail."\r\n";

$mail_status = mail($mail_to, $subject, $body_message);

if ($mail_status) { ?>
 <script language="javascript" type="text/javascript">
  alert('Thank you for the message. We will contact you shortly.');
  window.location = 'index.html';
 </script>
<?php
}
else { ?>
 <script language="javascript" type="text/javascript">
  alert('Message sending failed. Please, send an email to jjdl_cn@hotmail.com');
  window.location = 'index.html';
 </script>
<?php
}
?>

