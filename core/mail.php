<?php

 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;

 // namespace PHPMailer\PHPMailer;

$cc = 'PHPMailer\PHPMailer';
class Mail extends PHPMailer
{
//    ader/autoloader.php';

    public function sendmail($domain, $subject, $message, $from_name = 'Yolk Mailer', $to, $reply_to = 'info@phpyork.com', $reply_to_name = 'Yolk Mailer')
    {
        // PHPMailer\PHPMailer\PHPMailer;
        // PHPMailer\PHPMailer\SMTP;
        try {
            $mail = new PHPMailer(true);
            if (is_array($to)) {
            } else {
                $to = [$to];
            }

            // Server Settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF;
            $mail->isSMTP();
            $mail->Host = $domain;

            // Recipents
            $mail->setFrom('info@phpyolk.com', $from_name);
            $mail->addReplyTo($reply_to, $reply_to_name);
            foreach ($to as $key) {
                $mail->addAddress($key);
            }
            $mail->Subject = $subject;

            // Message
            $mail->isHTML(true);
            $mail->Body = $message;

            $rp = $mail->send();
            if ($rp == 1) {
                $msg = 'success';
            }
        } catch (Exception $e) {
            $msg = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

        return $msg;
    }
}
