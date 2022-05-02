<?php 
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$massage = $_POST['message'];

$email_form = 'info@yourwebsite.com'

$email_subject = 'New Form Submission'

$email_body = "User Name: $name. /n".
                "User Email: $visitor_email. /n".
                "Subject: $subject. /n".
                "User Message: $message. /n";

$to = 'aclcimmersion@gmail.com';

$headers = "From $email_from /r /n";

$headers .= "Reply-to: $visitor_email /r/n";

mail($to,$email_subject,$email_body,$headers)
        
 header("Location: contact.html");           
        
?>

<?php 
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['track_strand'];
$massage = $_POST['phone_number'];

$email_form = 'info@yourwebsite.com'

$email_subject = 'New Form Submission'

$email_body = "User Name: $name. /n".
                "User Email: $visitor_email. /n".
                "track & strand: $track_strand. /n".
                "phone number: $phone_number. /n";

$to = 'aclcimmersion@gmail.com';

$headers = "From $email_from /r /n";

$headers .= "Reply-to: $visitor_email /r/n";

mail($to,$email_subject,$email_body,$headers)
        
 header("Location: register.html");           
        
?>