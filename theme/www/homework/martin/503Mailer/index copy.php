<?php


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';



//Load Composer's autoloader
//require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions


function createMailClient(){
	$mail = new PHPMailer(true);


	//Server settings
	$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
	$mail->isSMTP();                                            //Send using SMTP
	$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
	$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
	$mail->Username   = 'munkefrugt@gmail.com';                     //SMTP username
	$mail->Password   = 'secret';                               //SMTP password
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
	$mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
	
	return $mail;
}


function sendMail($_options = false){

	global $mail

	// default
	// subjet  = default
	// body 	= default
	// recipient = munkefrugt@gmail.com


	// default values
	$relation = false;
	$nested_path = "";		
	if($_options !== false) {
		foreach($_options as $_option => $_value) {
			switch($_option) {					
				case "relation"          : $relation           = $_value; break;
				case "nested_path"       : $nested_path        = $_value; break;
				case "subject"           : $subject        = $_value; break;
			}
		}
	}



	try {

		//Recipients
		//$mail->setFrom('from@example.com', 'Mailer');
		$mail->addAddress('munkefrugt@gmail.com', 'Joe User');     //Add a recipient
		//$mail->addAddress('ellen@example.com');               //Name is optional
		//$mail->addReplyTo('info@example.com', 'Information');
		//$mail->addCC('cc@example.com');
		//$mail->addBCC('bcc@example.com');

		//Attachments
		//$mail->addAttachment('test.txt');         //Add attachments
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

		//Content
		$mail->isHTML(true);                                  //Set email format to HTML
		$mail->Subject = 'Here is the subject';
		$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		$mail->send();
		echo 'Message has been sent';
	} catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
}
//options = [subject => "hejsa", , ,]

$mail = createMailClient();

// send kun de værdier der skal ændres, lav en anden række følge for sjov
sendMail(options);

// send forskellige mails 
// en med body
// en med subject

/*



function navigationNodes($_options = false) {
	// default values
	$relation = false;
	$nested_path = "";		
	if($_options !== false) {
		foreach($_options as $_option => $_value) {
			switch($_option) {					
				case "relation"          : $relation           = $_value; break;
				case "nested_path"       : $nested_path        = $_value; break;
			}
		}
	}

}
navigationNodes(["relation" => "hej"]);
*/