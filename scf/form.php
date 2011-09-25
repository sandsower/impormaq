<?
session_start();
include "config.php";


if(isset($_POST['name'])){

if($captcha){
if(md5($_POST['captcha']) != $_SESSION['captcha'] ) //if captcha  not inserted correctly
	{$errors['captcha']='error';unset($_SESSION['captcha']);} //display captcha error and unset the session
}	
	
	
if($_POST['name']=='')		$errors['name']='error'; // If name not completed display error
if($_POST['email']=='')		$errors['email']='error';// If email not entered disply error
if($_POST['reason']=='')	$errors['reason']='error';// If reason not selected display error
if($_POST['message']=='')	$errors['message']='error';// If message empty display error/

if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $_POST['email'])){
	$errors['email']='error'; // if EMAIL ADDRES has the incorrect format display error!
}
	if(empty($errors)){ // If no errors occured continue with sending the email
		// subject
		$subject = 'New message from '.$_SERVER['SERVER_NAME']; // You can edit this line to your preferences (Subject of the email)
		// message
		$message = '
		<html>
		<body>
		<center>
		  <p>You have recieved a message from '.$_SERVER['SERVER_NAME'].'</p>
		  <table width="600" style="border:2px double #45829f; background:#fffce7;	font-family:Arial, Helvetica, sans-serif; font-size:12px;">

			<tr>
			  <td width="150" style="border-bottom:1px solid #c8c8c8;"><b>Name</b></td>
			  <td style="border-bottom:1px solid #c8c8c8;">'.$_POST['name'].'</td>
			</tr>	
			<tr>
			  <td width="150" style="border-bottom:1px solid #c8c8c8;"><b>E-mail</b></td>
			  <td style="border-bottom:1px solid #c8c8c8;">'.$_POST['email'].'</td>
			</tr>	
			<tr>
			  <td width="150" style="border-bottom:1px solid #c8c8c8;"><b>Reason</b></td>
			  <td style="border-bottom:1px solid #c8c8c8;">'.$_POST['reason'].'</td>
			</tr>	
			<tr>
			  <td width="150" style="border-bottom:1px solid #c8c8c8;" valign="top"><b>Message</b></td>
			  <td style="border-bottom:1px solid #c8c8c8;">'.$_POST['message'].'</td>
			</tr>	
			<tr>
			  <td width="150"><b>IP</b></td>
			  <td style="color:red;">'.$_SERVER['REMOTE_ADDR'].'</td>
			</tr>
		</table>
		</center>
		</body>
		</html>';// HTML MESSAGE THAT YOU'LL RECIEVE

		// To send HTML mail, the Content-type header must be set
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		// Additional headers
    $headers .= "From: ".$_POST['name']."<".$_POST['email'].">\r\n";
    $headers .= "Reply-To: ".$_POST['email']."\r\n";
    $headers .= "Return-Path: ".$_POST['email']."\r\n";
    $headers .= "X-Mailer: Drupal\n";
    $headers .= 'MIME-Version: 1.0' . "\n";

		// Mail it
		if(xmail($to, $subject, $message, $headers)){ // Try to send email
			echo '<div style="width:330px;	font-family:Arial, Helvetica, sans-serif; background:#e0ffbc; color:#2f5600; font-weight:bold; text-align:center;padding:10px; border:1px solid #adcc00;">Thank You!<br>Your message has been sent!</div>';
			unset($_POST);
			unset($_SESSION['captcha']);
			die();
		}else{//If an error occured , displays the error!
			echo '<font color="red">Ooops there seems to be an error! Contact the admin!</font>';
		}
	}
}	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head>
	<title>Contact Us</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script language="javascript" type="text/javascript" src="js/jquery.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery-ui.js"></script>
	<script language="javascript" type="text/javascript" src="js/niceforms.js"></script>
	<link href="js/niceforms-default.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="captcha/jquery.captcha.js"></script>
	<link href="captcha/captcha.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" charset="utf-8">
		$(function() {
			$(".ajax-fc-container").captcha({
				borderColor: "white",
				text: "Verify that you are a human,<br />drag <span>scissors</span> into the circle."
			});
		});
	</script>
</head>
<body <?if(isset($_GET['da'])){?>onload="window.location='form.php'"<?}?>>
	<div id="container">
		<form action="" method="post" id='myForm' class="niceform">
<table cellspacing='0' cellpadding='0' style='width:100%;'>	
			<tr>
				<td class='info <?=$errors['name']?>'>Your Name</td>
			</tr>				
			<tr>
				<td style='padding:2px;' colspan='2'><input type='text' name='name' class='textinput' value='<?=$_POST['name']?>'></td>
			</tr>	
			<tr>
				<td  class='info <?=$errors['email']?>'>Your Email</td>
			</tr>				
			<tr>
				<td style='padding:2px;'><input type='text' name='email' class='textinput' value='<?=$_POST['email']?>'></td>
			</tr>				
			<tr>
				<td class='info <?=$errors['reason']?>'>Reason</td>
			</tr>				
			<tr>
				<td style='padding:2px;'>
					<select name='reason' id="select" style='width:318px;height:30px; line:height:30px;'>
						<option value="" <?if($_POST['reason']=='')echo "selected='selected'"?>>please select</option>
						<?foreach($reason as $val){?>
						<option value='<?=$val?>' <?if($_POST['reason']==$val)echo "selected='selected'"?> ><?=$val?></option>
						<?}?>
					</select>
				</td>
			</tr>	
			<tr>
				<td class='info <?=$errors['message']?>'>Message</td>
			</tr>		
			<tr>
				<td style='padding:2px;'><textarea name='message' class='textarea'><?=$_POST['message']?></textarea></td>
			</tr>
<?if($captcha){?>			
			<tr>
				<td  class='<?=$errors['captcha']?>' align='center'>
					<img src='captcha.php' style='width:150px;'/>
				</td>
			</tr>	
			<tr>
			  <td class='info <?=$errors['captcha']?>'>Security Code</td>
			</tr>
			<tr>
				<td style='padding:2px;'><input type='text' name='captcha' class='textinput' value=''></td>
			</tr>
<?}?>			
			<tr>
				<td style='padding-top:10px;'>
					<big style="font-size: 180%;"><a href="javascript:void(0)" onclick="$('#myForm').submit();" class="btn blue" style='margin-left:6px;'><i></i><span style='width:292px;text-align:center;'><i></i><span></span>Submit</span></a></big>
			    </td>
			</tr>			
			</table>
</form>
</div>		
</body>
</html>