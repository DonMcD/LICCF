<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';
require './serverDetails.php';

$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query the members table for all members where accepted_emails is true
$sql = "SELECT * FROM members WHERE accepted_emails = 1";
$result = $conn->query($sql);

// Loop through the result set and send an email to each member
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $to = $row['email'];
        $subject = $_POST['subject'];
        $content = $_POST['content'];

        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->IsHTML(true);
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'liccftest@gmail.com';
        $mail->Password = 'citgxpzhmtoticrv';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('liccftest@gmail.com', 'LICCF');
        $mail->addAddress($to);
        $mail->Subject = $subject;
        $mail->Body = $content;

        if($mail->send()) {
            echo 'Email sent successfully to ' . $to . '<br>';
        } else {
            echo 'An error occurred while sending the email to ' . $to . ': ' . $mail->ErrorInfo . '<br>';
        }
    }
} else {
    echo "No members found";
}

// Close the database connection
$conn->close();
?>
