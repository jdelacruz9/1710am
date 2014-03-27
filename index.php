 <?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number']
    $message = $_POST['message'];
    $from = 'From: TuAltarRadial'; 
    $to = 'jjdl_cn@hotmail.com'; 
    $subject = 'Hello';

    $body = "From: $name\n E-Mail: $email\n  Number: $number\n Message:\n $message";

	if ($_POST['submit']) {
	    if (mail ($to, $subject, $body, $from)) { 
	        echo '<p>Your message has been sent!</p>';
	    } else { 
	        echo '<p>Something went wrong, go back and try again!</p>'; 
	    }
	}
?>




