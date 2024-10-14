<?php

    require __DIR__ . '/../constants.php';
    require_once __DIR__ . '/../vendor/autoload.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $subject = $_POST['subject'] ?? '';
        $message = $_POST['textarea'] ?? '';
    
            // Validate inputs
        if (empty($name) || empty($email) || empty($subject) || empty($message)) {
            echo "Molimo ispunite sva obavezna polja.";
            exit;
        }

        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = "mail.your-server.de"; // Set the SMTP server to send through
            $mail->SMTPAuth = true;
            $mail->Username = 'kontakt-forma@vrtic-medo.hr'; // SMTP username
            $mail->Password = "kgn1dvr*XGE-ptb_kdz"; // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587; // TCP port to connect to

            // Recipients
            $mail->setFrom('kontakt-forma@vrtic-medo.hr', 'Kontakt forma');
            $mail->addAddress("test@ten-4.eu"); // Add a recipient
            $mail->addReplyTo($email, $name); // Reply to the customer's email
            
            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Nova poruka s kontakt forme: ' . $subject;
            $mail->Body    = "<p><strong>Ime:</strong> $name</p>
                            <p><strong>E-mail:</strong> $email</p>
                            <p><strong>Telefon:</strong> $phone</p>
                            <p><strong>Poruka:</strong><br>$message</p>";

            $mail->send();
            echo 'Poruka je uspješno poslana.';
        } catch (Exception $e) {
            echo "Poruka nije mogla biti poslana. Greška: {$mail->ErrorInfo}";
        }
    }
?>

