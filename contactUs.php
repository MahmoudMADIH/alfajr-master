<?php
        if(isset($_POST['submit'])) {
            $to = 'moobeder150@gmail.com';
            $subject = 'New message from website';
            $message = 'First Name: ' . $_POST['first_name'] . "\r\n" .
                       'Last Name: ' . $_POST['last_name'] . "\r\n" .
                       'Email: ' . $_POST['email'] . "\r\n" .
                       'Message: ' . $_POST['message'] . "\r\n";
            $headers = 'From: moodbeder151@gmail.com' . "\r\n" .
                       'Reply-To: ' . $_POST['email'] . "\r\n" .
                       'X-Mailer: PHP/' . phpversion();
        
            if (mail($to, $subject, $message, $headers)) {
                echo '<p>Thank you for your message! We will get back to you as soon as possible.</p>';
            } else {
                echo '<p>There was an error sending your message. Please try again later.</p>';
            }
        }
        ?>