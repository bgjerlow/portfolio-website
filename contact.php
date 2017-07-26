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
                
				<div id="formMessages"></div>
                
				<div id="formWrap">
					<form method="POST" action="scripts/form-handler.php" id="contactForm">
						<input class="fields" type="text" name="name" placeholder="Name" id="name">
                        
						<input class="fields" type="email" name="email" required placeholder="E-mail (Required)" id="email">
                        
						<textarea class="message" name="message" placeholder="Message (Required)" id="message"></textarea>
                        
						<input class="button" type="submit" value="Send">
					</form>
				</div>
			</main>
        
            <script>
            /* Form validation script for form in Contact Us section */
            $(function () {
                /* Get the form */
                var form = $('#contactForm');
                /* Get the messages div */
                var formMessages = $('#formMessages');
                /* Set up an event listener fo the contact form */
                $(form).submit(function (e) {
                    /* Stop the browser from submitting the form */
                    e.preventDefault();
                    /* Serialize the form data */
                    var formData = $(form).serialize();
                    /* Submit the form using AJAX */
                    $.ajax({
                            type: 'POST',
                            url: $(form).attr('action'),
                            data: formData
                        })
                        .done(function (response) {
                            /* Make sure that the formMessages div has the 'success' class */
                            $(formMessages).removeClass('error');
                            $(formMessages).addClass('success');
                            /* Set the message text */
                            $(formMessages).text(response);
                            /* Clear the form */
                            $('#name').val('');
                            $('#email').val('');
                            $('#message').val('');
                        })
                        .fail(function (data) {
                            /* Make sure that the formMessages div has the 'error' class */
                            $(formMessages).removeClass('success');
                            $(formMessages).addClass('error');
                            /* Set the message text */
                            if (data.responseText !== '') {
                                $(formMessages).text(data.responseText);
                            } else {
                                $(formMessages).text('Oops! An error occured and your message could not be sent. Please try again.');
                            }
                        });
                });
            });
            </script>

			<?php include 'inc/footer.php';?>