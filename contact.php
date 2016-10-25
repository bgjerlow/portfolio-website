<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bo Gjerlow | Contact</title>
		
		<?php include 'inc/header.php';?>

			<main id="contactContent" class="animated zoomIn">
				<h2 class="contactHeader">Contact me</h2>
				<p>If you have any questions, inquiries, or just want to say hi you can do so using the form below. I look forward to hearing from you!</p>
				
				<div id="formWrap">
					<form method="POST" action="form-handler.php" id="contactForm">
						<input class="fields" type="text" name="name" placeholder="Name">
						<input class="fields" type="text" name="email" required placeholder="Email">
						<textarea class="message" name="message" placeholder="Message"></textarea>
						<input class="button" type="submit" value="Send">
					</form>
				</div>
			</main>

			<?php include 'inc/footer.php';?>