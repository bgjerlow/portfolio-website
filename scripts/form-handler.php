<?php
    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
				$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["message"]);

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "An error occured. Please check that all fields are filled out correctly, then try again.";
            exit;
        }

        // Set the recipient email address.
        $recipient = "bgjerlow@live.com";

        // Set the email subject.
        $subjectEmail = "New message from $name";

        // Build the email content.
        $email_content = "Name: \n$name\n\n";
        $email_content .= "E-mail: \n$email\n\n";
        $email_content .= "Message: \n$message\n";

        // Build the email headers.
		$email_headers  = 'MIME-Version: 1.0' . "\r\n";
		$email_headers .= 'Content-type: text/plain; charset=UTF-8' . "\r\n";
        $email_headers = "From: contact@bgjerlowdesigns.com\r\n";
		$email_headers .= "Reply-To: $email\r\n";
		$email_headers .= "Return-Path: $email\r\n";

        // Send the email.
        if (mail($recipient, $subjectEmail, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "The form was successfully submitted. I'll get back to you within 48 hours";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "An error occured. Please try again.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "An error occured. Please try again.";
    }
?>