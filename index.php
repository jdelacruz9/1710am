 <?php
// header( 'Location: http://www.facebook.com/' ) ;
require("sendgrid-php/sendgrid-php.php");


$sendgrid = new SendGrid('jdelacruz', 'Bjoel1995');
$mail = new SendGrid\Email();

$name = $_POST['name'];
$from = $_POST['email']; 
$message = $_POST['message'];

$mail->addTo('jjdl_cn@hotmail.com');
$mail->setFrom($from);
$mail->setSubject('Hola');
$mail->setText($message);
$mail->setHtml('<strong>'.$message.'</strong>');

$sendgrid->send($mail);

// if (isset($_POST["from"]))
// {
//     $from = $_POST["from"]; // sender
//     $number = $_POST["number"];
//     $name = $_POST['name']
//     $message = $_POST["message"];
//     $subject = 'Hello';
//     // message lines should not exceed 70 characters (PHP rule), so wrap it
//     $message = wordwrap($message, 70);
//     // send mail
//     echo "tu mai";
//     mail("jjdl_cn@hotmail.com",$subject,$message,"From: $from\n");
//     echo "Thank you for sending us feedback";
// }

    // $name = $_REQUEST['name'];
    // $email = $_REQUEST['email'];
    // $number = $_REQUEST['number']
    // $message = $_REQUEST['message'];
    // $from = 'From: TuAltarRadial'; 
    // $to = 'jjdl_cn@hotmail.com'; 
    // $subject = 'Hello';

 //    $body = "From: $name\n E-Mail: $email\n  Number: $number\n Message:\n $message";

	// if ($_REQUEST['submit']) {
	//     if (mail ($to, $subject, $body, $from)) { 
	//         echo '<p>Your message has been sent!</p>';
	//     } else { 
	//         echo '<p>Something went wrong, go back and try again!</p>'; 
	//     }
	// }
?>




