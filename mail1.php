<html>
<head></head >
<body>
<?php



session_start();






					require('class.phpmailer.php');
									require('class.smtp.php');
									$otp=$_SESSION['pass'];
									$email=$_SESSION['eemail'];
									$mail = new PHPMailer();
									$mail->IsSMTP();
									  $mail->SMTPDebug  = 1;                    
										$mail->SMTPAuth   = true;                  
										$mail->SMTPSecure = "ssl";                
										$mail->Host       = "smtp.gmail.com";      
										$mail->Port        = '465';            
										$mail->AddAddress($email);
										$mail->Username   ="smeet7107@gmail.com";  //Email Id
										$mail->Password   ="meet12345";            //Password
										$mail->SetFrom('smeet7107@gmail.com','BrandTreasurer');//Email id

									$mail->Subject    = "password ";
										$mail->Body    = "password:" . $otp;
									$result1=$mail->Send();
									if(!$result1)
									{
									echo "Mailer Error:" . $mail -> ErrorInfo;
									echo "<script> alert('password is not Send to your email');
																				</script>";
									}
									else
									{
									echo "<script> alert('password is Send to your email');
											window.location='login.php';										</script>";	
									return $result1;
									}
									
									
									
									?>
									 </body>
 </html>