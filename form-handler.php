<?php 
$errors = '';
$myemail = 'bgjerlowdesigns@gmail.com';
if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required. Please go back and submit when all fields have been filled out.";
}

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address. Please go back and enter  a valid email address.";
}

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Contact form submission: $name";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $name \n Email: $email_address \n Message \n $message"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	# PHP mail function with 4 parameters
	mail($to,$email_subject,$email_body,$headers);
	# Re-direct to the 'Thank You' page
	header('Location: thank-you.php');
	
} 
?>

<!-- Error Page -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bo Gjerlow | Error</title>
		<meta name="robots" content="noindex,nofollow"/>
		<?php include 'inc/header.php';?>
		
			<div id="wrapperError">
			<!-- echo nl2br set break-line <br>  in front of each newline (\n) in a string-->
				<p id="contactErrorText">
					<?php
					echo nl2br($errors);
					?>
				</p>
				<button class="button" onclick="goBack()">Return</button>

				<!-- Using JavaScript to take you back to the previous page when clicking the button-->
				<script>
					function goBack() {
						window.history.back();
					}
				</script>
			</div>
		
			<?php include 'inc/footer.php';?>