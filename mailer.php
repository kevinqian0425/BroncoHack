<?php
    // My modifications to mailer script from:
    // http://blog.teamtreehouse.com/create-ajax-contact-form
    // Added input sanitizing to prevent injection

    require 'vendor/autoload.php';

    ParseClient::initialize( $SR1cvwd4CVY9Lon9WOWJC6GuDzXySA9ew9mBcRZQ, $juBRcJf1TfO8iwWV5QN14g9nF5FOZusu0VygB7OG, $PjoqDQr3V1ZNtVefuA4xRaJtMfK1dZkM4qXNW0mb );
    // Users of Parse Server will need to point ParseClient at their remote URL:
    ParseClient::setServerURL('http://smallbizz.parseapp.com/');


    // Signup
    $user = new ParseUser();
    $user->setUsername("foo");
    $user->setPassword("Q2w#4!o)df");
    try {
        $user->signUp();
    } catch (ParseException $ex) {
        // error in $ex->getMessage();
    }

    // Login
    try {
        $user = ParseUser::logIn("foo", "Q2w#4!o)df");
    } catch(ParseException $ex) {
        // error in $ex->getMessage();
    }

    // Current user
    $user = ParseUser::getCurrentUser();








    /*
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
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "t21nguyen@scu.edu";

        // Set the email subject.
        $subject = "New business request from $name";

        // Build the email content.
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Message:\n$message\n";

        // Build the email headers.
        $email_headers = "From: $name <$email>";
        
        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }


    */
?>