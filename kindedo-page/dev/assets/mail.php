<?php

    require __DIR__ . '/../constants.php';
    require_once __DIR__ . '/../vendor/autoload.php';
    require __DIR__ . '/../config.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    $secret = getSecrets();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        header('Content-Type: text/plain'); // Set response header to plain text

        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $subject = $_POST['subject'] ?? '';
        $message = $_POST['textarea'] ?? '';
        $contactMail =  $secret['mail']['contact_form_mail'];
        $contactPW = $secret['mail']['contact_form_password'];

        // Validate inputs
        if (empty($name) || empty($email) || empty($subject) || empty($message)) {
            echo "Molimo ispunite sva obavezna polja.";
            http_response_code(400); // Bad request
            exit;
        }

        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);

        // Server settings
        $mail->isSMTP();
        $mail->Host = $secret['mail']['smtp_server']; // Set the SMTP server to send through
        $mail->SMTPAuth = true;
        $mail->Username = $contactMail; // SMTP username
        $mail->Password = $contactPW; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587; // TCP port to connect to

        // Recipients
        $mail->setFrom($contactMail, 'Kontakt forma');
        $mail->addAddress(INFO_MAIL); // Add a recipient
        $mail->addReplyTo($email, $name); // Reply to the customer's email
        
        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Nova poruka s kontakt forme: ' . $subject;
        $mail->Body    = "<p><strong>Ime:</strong> $name</p>
                        <p><strong>E-mail:</strong> $email</p>
                        <p><strong>Telefon:</strong> $phone</p>
                        <p><strong>Poruka:</strong><br>$message</p>";

        try {
            $mail->send();
            echo "Poruka je uspješno poslana.";
        } catch (Exception $e) {
            http_response_code(500); // Internal server error
            echo "Poruka nije mogla biti poslana. Molim pokušajte ponovo, ili kontaktirajte nas na e-mail ili telefon";
        }
    }
?>

