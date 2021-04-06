<?php
include_once 'lang/lang.php';
?>
<?php
// Proccess at only POST metheod
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 // name of sender
 $name = strip_tags(trim($_POST["name"]));

 // Email of sender
 $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

 // Sender subject
 $phone = strip_tags(trim($_POST["phone"]));

 // Sender Message
 $message = trim($_POST["message"]);

 // Your email where this email will be sent
 $your_email = "support@allowebs.com";

 //Your site name for identify
 $your_site_name = "Allowebs - Contact";

 // Build email subject
 $email_subject = "[{$your_site_name}] - {$name}";

 // Build Email Content
 $email_content = "Name: {$name}\n";
 $email_content .= "Email: {$email}\n";
 $email_content .= "phone: {$phone}\n";
 $email_content .= "Message: {$message}\n";

 // Build email headers
 $email_headers = "From: {$name} <{$email}>";

 $send_email = mail($your_email, $email_subject, $email_content, $email_headers);

 // Check email sent or not
 if ($send_email) {
  // Send a 200 response code.
  http_response_code(200);
  echo $lang["msgsent"];
 } else {
// Send a 500 response code.
  http_response_code(500);
  echo $lang['errormsgnotsent'];
 }
} else {
// Send 403 response code
 http_response_code(403);
 echo $lang['msgnotsent'];
}
