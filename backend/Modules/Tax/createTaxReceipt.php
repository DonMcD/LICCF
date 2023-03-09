<?php
require_once '../../vendor/autoload.php';
require_once '../Authentication/mailAuthentication.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Pdf\Dompdf;
use Dompdf\Options;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// Get year from form data
$year = $_POST['year'];

// Get member donation data for the given year
$members = getMemberDonations($year);

// Configure SMTP settings for sending email
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = $emailUsername;
$mail->Password = $emailKey;
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Prepare email body
$body = 'Dear {first} {last},<br><br>' .
        'Thank you for your donation of ${amount} to LICCFTaxReceipt in {year}.<br>' .
        'Please find attached your tax receipt for this donation.<br><br>' .
        'Sincerely,<br>LICCFTaxReceipt Team';

// Iterate over member donation data
foreach ($members as $member) {

    $to = $member['email'];
    $variables = [
        '{first}' => $member['f_name'],
        '{last}' => $member['l_name'],
        '{address}' => $member['address'],
        '{city}' => $member['city'],
        '{province}' => $member['province'],
        '{postal}' => $member['postal_code'],
        '{amount}' => $member['total_amount'],
        '{year}' => $year,
        '{email}' => $member['email'],
    ];

    $spreadsheet = IOFactory::load('../../Files/receipt template.xlsx');
    $worksheet = $spreadsheet->getActiveSheet();

    // Replace variables in spreadsheet with member data
    foreach ($worksheet->getRowIterator() as $row) {
        foreach ($row->getCellIterator() as $cell) {
            $value = $cell->getValue();
            foreach ($variables as $variable => $replacement) {
                $value = str_replace($variable, $replacement, $value);
            }
            $cell->setValue($value);
        }
    }
    $spreadsheet->setActiveSheetIndex(0);

    $writer = new Dompdf($spreadsheet, new Options());

    $fileName = "LICCFTaxReceipt{$year}.pdf";

    $writer->save($fileName);

/*
    // Set active sheet
    $spreadsheet->setActiveSheetIndex(0);

    $options = new Options();
    //$options->setPaper('letter', 'portrait');
    $writer = new Dompdf($spreadsheet, $options);

    // Generate PDF content from spreadsheet data
    $writer->loadHtml($spreadsheet->getActiveSheet()->getDirtyData());
    $writer->render();
    $pdfContent = $writer->output();

    // Save PDF file to disk
    file_put_contents($fileName, $pdfContent);
*/
    // Attach PDF file to email
    $pdfcontents = file_get_contents($fileName);
    $mail->addStringAttachment($pdfcontents, $fileName, 'base64', 'application/pdf');

    // Set email details
    $mail->setFrom('liccftest@gmail.com', 'LICCF');
    $mail->addAddress($to);
    $mail->Subject = 'Tax Receipt for your donation to LICCFTaxReceipt for the year of ' . $year;
    $mail->Body = str_replace(array_keys($variables), array_values($variables), $body);

    // Send the email
    if($mail->send()) {
        echo 'Email sent successfully to ' . $to . '<br>';
    } else {
        echo 'An error occurred while sending the email to ' . $to . ': ' . $mail->ErrorInfo . '<br>';
    }
    unlink($fileName);
    $mail->clearAllRecipients();
}



function getMemberDonations($year) {
    require_once '../../serverDetails.php';
    // Connect to database
    $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Query donations table to get total amount donated by each member
    $donations_query = "SELECT mid, SUM(amount) as total_amount FROM donations WHERE DATE_FORMAT(date, '%Y') = '$year' GROUP BY mid";
    $donations_result = mysqli_query($conn, $donations_query);

    // Loop through donation results and get member info for each member
    $members = array();
    while ($donations_row = mysqli_fetch_assoc($donations_result)) {
        $mid = $donations_row['mid'];
        $total_amount = $donations_row['total_amount'];

        // Query members table to get personal information for member
        $member_query = "SELECT f_name, l_name, address, postal_code, email, province, city FROM members WHERE pid = $mid";
        $member_result = mysqli_query($conn, $member_query);
        $member_row = mysqli_fetch_assoc($member_result);

        // Combine results into one array
        $member_info = array(
            'mid' => $mid,
            'total_amount' => $total_amount,
            'f_name' => $member_row['f_name'],
            'l_name' => $member_row['l_name'],
            'address' => $member_row['address'],
            'postal_code' => $member_row['postal_code'],
            'email' => $member_row['email'],
            'province' => $member_row['province'],
            'city' => $member_row['city']
        );

        // Add member info to array of members
        $members[] = $member_info;
    }

    // Close database connection
    mysqli_close($conn);

    return $members;
}

?>
