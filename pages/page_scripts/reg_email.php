<?
$to      = $email; // Send email to our user
$subject = 'Signup | Verification'; // Give the email a subject
$message = '

Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.

------------------------
Username: '.$name.'
Password: '.$password.'
------------------------

Please click this link to activate your account:
http://localhost/cloud/public/pages/page_scripts/email_landing.php?emailed='.$email.'&hashed='.$hash.'

'; // Our message above including the link

$headers = 'From:noreply@localhost.com' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers); // Send our email
?>
