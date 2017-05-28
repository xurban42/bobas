<?php

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["zprava"]);


        if( empty($message)){
            http_response_code(400);
            echo "Není vyplněná zpráva.";
            exit;
        }
        if( empty($email)){
            http_response_code(401);
            echo "Není vyplněn email";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "bobas@bobas.cz";

        // Set the email subject.
        $subject = "Zpráva z webu bobas.cz";

        // Build the email content.
        $email_content = "Email: $email\n\n";
        $email_content .= "Zpráva:\n$message\n";

        // Build the email headers.
        $email_headers = "From: $name <$email>";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Děkujeme. Váše zpráva byla odeslána.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Něco se pokazilo. Zkuste prosím odeslat zprávu znovu.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "Něco se pokazilo. Zkuste prosím odeslat zprávu znovu.";
    }

?>
