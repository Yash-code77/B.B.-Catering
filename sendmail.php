<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'login/PHPMailer/PHPMailer.php';
require 'login/PHPMailer/SMTP.php';
require 'login/PHPMailer/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = $_POST['name'];
    $phone    = $_POST['phone'];
    $email    = $_POST['email'];
    $event    = $_POST['event_type'];
    $date     = $_POST['event_date'];
    $location = $_POST['location'];
    $menu     = isset($_POST['menu']) ? implode(", ", $_POST['menu']) : "None";
    $note     = $_POST['requirements'];

    $body = "
        <h2>New Catering Booking</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Event:</strong> $event</p>
        <p><strong>Date:</strong> $date</p>
        <p><strong>Location:</strong> $location</p>
        <p><strong>Menu Items:</strong> $menu</p>
        <p><strong>Special Notes:</strong> $note</p>
    ";

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'nitingaur8299@gmail.com';  // YOUR GMAIL
        $mail->Password   = 'uyjmbkqmxrymabfn';         // 🔐 App password here
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // ✅ Fix: Add this block to bypass SSL issues
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer'       => false,
                'verify_peer_name'  => false,
                'allow_self_signed' => true
            )
        );

        // Recipients
        $mail->setFrom('bbcateringkanpur@gmail.com', 'B.B. Catering Website');
        $mail->addAddress('bbcateringkanpur@gmail.com');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Booking Request from ' . $name;
        $mail->Body    = $body;

        $mail->send();
        echo "<script>alert('Booking submitted successfully!'); window.location.href='index.php';</script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
