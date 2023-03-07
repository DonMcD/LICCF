<?php
require_once 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Pdf\Dompdf;
use Dompdf\Options;

$spreadsheet = IOFactory::load('receipt template.xlsx');
$worksheet = $spreadsheet->getActiveSheet();

$variables = [
    '{first}' => 'John',
    '{last}' => 'Doe',
    '{address}' => '811 Highway Ave',
    '{city}' => 'Nobleford',
    '{province}' => 'AB',
    '{postal}' => 'T0L1S0',
    '{amount}' => '402.56',
    '{year}' => '2023',
];

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
$writer->save('example.pdf');

header('Content-Type: application/pdf');
header('Content-Disposition: attachment;filename="example.pdf"');
header('Cache-Control: max-age=0');
readfile('example.pdf');
unlink('example.pdf'); // Remove the temporary file
exit;
?>
