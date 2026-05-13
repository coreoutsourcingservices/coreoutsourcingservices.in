<?php
if(isset($_POST['contact_submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $resume = $_FILES['resume'];

    $to = 'surajkoli11322@gmail.com'; // Replace with your email address
    $subject = 'Job Application Form Submission';

    $message = "Name: $name\n";
    $message .= "Phone: $phone\n";
    $message .= "Email: $email\n";
    $message .= "Position: $position\n";

    // Attach the resume to the email
    $attachment = chunk_split(base64_encode(file_get_contents($resume['tmp_name'])));
    $filename = $resume['name'];

    $boundary = md5(date('r', time())); 

    $headers = "From: $email\r\nReply-To: $email";
    $headers .= "\r\nMIME-Version: 1.0\r\nContent-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n"; 
    $body .= chunk_split(base64_encode($message)); 

    $body .= "--$boundary\r\n";
    $body .= "Content-Type: $resume[type]; name=\"$filename\"\r\n"; 
    $body .= "Content-Disposition: attachment; filename=\"$filename\"\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n"; 
    $body .= $attachment; 

    $body .= "--$boundary--";

    mail($to, $subject, $body, $headers);
}
?>