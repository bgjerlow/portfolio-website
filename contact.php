<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bo Gjerlow | Contact</title>
		<meta name="description" content="The portfolio of Bo Gjerløw, a UI designer & front-end developer based in Denmark">
  		<meta name="keywords" content="UI designer,UI design,user interface designer,user interface design,front-end developer,front-end development,design,development">
		
		<?php include 'inc/header.php';?>

			<main id="contactContent" class="animated zoomIn">
				<h2 class="contactHeader">Let's talk</h2>
				<p>If you have any questions, inquiries, or just want to say hi you can do so using the form below.</p>
				
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