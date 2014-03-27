 <?php
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $number = $_REQUEST['number']
    $message = $_REQUEST['message'];
    $from = 'From: TuAltarRadial'; 
    $to = 'jjdl_cn@hotmail.com'; 
    $subject = 'Hello';

    $body = "From: $name\n E-Mail: $email\n  Number: $number\n Message:\n $message";

	if ($_REQUEST['submit']) {
	    if (mail ($to, $subject, $body, $from)) { 
	        echo '<p>Your message has been sent!</p>';
	    } else { 
	        echo '<p>Something went wrong, go back and try again!</p>'; 
	    }
	}
?>




