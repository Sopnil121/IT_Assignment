<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
$email = "";
$success = "";
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "❌ Invalid email format.";
    } else {
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host       = "sandbox.smtp.mailtrap.io";
            $mail->SMTPAuth   = true;
            $mail->Username   = "REPLACE_WITH_MAILTRAP_USERNAME"; 
            $mail->Password   = "REPLACE_WITH_MAILTRAP_PASSWORD";
            $mail->Port       = 2525;
            $mail->setFrom("no-reply@newsletter.com", "Newsletter Service");
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = "Newsletter Subscription Confirmation";
            $mail->Body = "
                <h2>Thank You for Subscribing!</h2>
                <p>You have successfully subscribed to our newsletter.</p>
            ";
            if ($mail->send()) {
                $success = "✅ Confirmation email successfully sent to: <b>$email</b>";
            }
        } catch (Exception $e) {
            $error = "❌ Email sending failed: " . $mail->ErrorInfo;
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Newsletter Subscription</title>
</head>
<body>
<h2>📧 Newsletter Subscription</h2>
<form method="POST">
    <input type="email" name="email" placeholder="Enter your email"
           value="<?php echo $email; ?>" required>
    <button type="submit">submit</button>
</form>
<br>
<?php if ($error): ?>
    <p style="color:red;"><b><?php echo $error; ?></b></p>
<?php endif; ?>
<?php if ($success): ?>
    <p style="color:green;"><b><?php echo $success; ?></b></p>
<?php endif; ?>
</body>
</html>
