<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bo Gjerlow | Success</title>
		<meta name="robots" content="noindex,nofollow"/>
		<?php include 'inc/header.php';?>
		
			<section id="wrapperThankYou">
        		<h2 id="contactSuccessHeader">Thank You!</h2>
        		<p id="contactSuccessText">The form was successfully submitted. I will get back to you within 48 hours</p>
        		<button class="button" onclick="goBack()">Go Back</button>
        
        		<!-- Using JavaScript to take you back to the previous page when clicking the button-->
        		<script>
            		function goBack() {
						window.location.href = "contact.php";
					}
        		</script>
			</section>

			<?php include 'inc/footer.php';?>