<?php

$email='nikiprajapati1999@gmail.com'; 


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



require 'PHPMailer/PHPMailer-master/src/Exception.php';
require 'PHPMailer/PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer/PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = "medilocker@gmail.com";
    // 'medilocker@gmail.com';                     // SMTP username
    $mail->Password   = "Medi12345";
    // 'Medi12345';                               // SMTP password
    $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted

    /*another account srishtisharmadsms26@gmail.com
    password: srishti@12345 */
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('medilocker@gmail.com', 'Mailer');
    $mail->addAddress($email, 'USER');     // Add a recipient
            
    $mail->addReplyTo('medilocker@gmail.com', 'Information');
    $mail->addCC('medilocker@gmail.com');
    $mail->addBCC('medilocker@gmail.com');

    $md5passwd=bin2hex( random_bytes(8)) ;

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Password for email verification.';
    $mail->Body    = 'This is your new password . You can change your password in Reset Password. '.$md5passwd."  ";
    $mail->AltBody = 'This is your new password . You can change your password in Reset Password.';

    if($mail->send())
    {
    	 echo 'Message has been sent';
    	 
		        $sha1passwd=md5(hex2bin($md5passwd));
                  $passwd=sha1($sha1passwd);
                
             //     $_SESSION['passwd']=$md5passwd;

             //   $query = "UPDATE user SET passwd='$passwd' WHERE email='$email' ";
					        // $data = mysqli_query($conn, $query);
					        // 	if($data)
						       
							        {
							        	header('Location: ../index.html'); 
							        	
							        }
						       		 // else
						       		 { 
						        		echo "Unsuccessful Password Reset";

						        		}

	      
    }
    

}
catch (Exception $e)
 {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>