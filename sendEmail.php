<?php 
 include('whoarewe.php');
 ?>
 <div>
<?php>
 use PHPMailer\PHPMailer\PHPMailer; 
 use PHPMailer\PHPMailer\Exception; 
  
 require 'PHPMailer/Exception.php'; 
 require 'PHPMailer/PHPMailer.php'; 
 require 'PHPMailer/SMTP.php'; 
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
 $mail = new PHPMailer; 
  
 $mail->isSMTP();                      // Set mailer to use SMTP 
 $mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers 
 $mail->SMTPAuth = true;               // Enable SMTP authentication 
 $mail->Username = 'tamerrifai712@gmail.com';   // SMTP username 
 $mail->Password = 'HDplay_12';   // SMTP password 
 $mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
 $mail->Port = 587;                    // TCP port to connect to 
  
 // Sender info 
 $mail->setFrom($email); 
 $mail->addReplyTo('tamerrifai712@gmail.com'); 
  
 // Add a recipient 
 $mail->addAddress('tamerrifai712@gmail.com'); 
  
 //$mail->addCC('cc@example.com'); 
 //$mail->addBCC('bcc@example.com'); 
  
 // Set email format to HTML 
 $mail->isHTML(true); 
  
 // Mail subject 
 $mail->Subject = 'Email from Localhost by CodexWorld'; 
  
 // Mail body content 
 $bodyContent = "from:".$email; 
 $bodyContent .= "message:".$message; 
 $mail->Body    = $bodyContent; 
  
 // Send email 
 if(!$mail->send()) { 
     echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
 } else { 
     echo 'Message has been sent.'; 
 } 
  
 ?>