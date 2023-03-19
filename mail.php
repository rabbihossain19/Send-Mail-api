<?php

try {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailheader = "From:".$name."<".$email.">\r\n";

    $to = "youremail@gmail.com";

    if (mail($to, $subject, $message, $mailheader)) {
        echo 'Email sent successfully.';
    } else {
        throw new Exception('Unable to send email.');
    }
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}

?>


