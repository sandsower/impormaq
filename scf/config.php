<?
	$usesmtp	=	0; 							//ENABLE SMTP? 0 or 1
	$captcha	=	1; 							//ENABLE CAPTCHA? 0 or 1
	$to			=	'test@test.com'; 			//Email where you recieve all the enquiries.
	if(isset($_SESSION['reciever'])) $to=$_SESSION['reciever'];

	$reason	=array();
//Edit the reasons here, according to your needs!
	$reason[]	='Report a Bug';
	$reason[]	='Support';
	$reason[]	='Public Relations';
	$reason[]	='Services';

	
//Configuration for GMAIL; ONLY IF SMTP ENABLED
	
	$smtphost	=	'smtp.gmail.com';
	$smtpuser	=	'user@gmail.com';
	$smtppass	=	'password';
	$smtpport	=	'465';
	$smtpsecure	=	'ssl';
	
//basic configuration
	#$smtphost	=	'smtp.mailer.com';
	#$smtpuser	=	'account';
	#$smtppass	=	'password';
	#$smtpport	=	'26';
	#$smtpsecure=	'';
	
	
	function xmail($to,$subject,$message,$headers){
		global $usesmtp,$smtphost,$smtpport,$smtpuser,$smtppass,$smtpsecure,$_POST;
		if($usesmtp!=1){
			if(@mail($to,$subject,$message,$headers)){
				return 1;
			}
		}else{
			require_once('mail/class.phpmailer.php');
			$mail             = new PHPMailer();
			$body			  =$message;
			$mail->IsSMTP();
			$mail->SMTPDebug  = 0; 
			$mail->SMTPAuth   = true;   
			$mail->SMTPSecure = $smtpsecure;       
			$mail->Host       = $smtphost;     
			$mail->Port       = $smtpport;                
			$mail->Username   = $smtpuser;  
			$mail->Password   = $smtppass;          
			$mail->SetFrom($_POST['email'], $_POST['name']);
			$mail->Subject    = $subject;
			$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; 
			$mail->MsgHTML($body);
			$address 		= $to;
			$mail->AddAddress($address, "Administrator");
			if($mail->Send()) {
			  return 1;
			}
		}
	}
	
if(isset($_GET['dir'])){
		$arr['text']=$contactTxt;
		$arr['posy']=$posy;
		echo json_encode($arr);
}		
	
	
?>