<?php require '../vendor/autoload.php';

// create merger instance
$pdf = new \Pauljohnston\PDFMerge\PDFMerger;

// do work

// add as many pdfs as you want
// $pdf->addPDF('path/to/source/file.pdf', 'all', 'portrait')
//  ->addPDF('path/to/source/file1.pdf', 'all')
//  ->addPDF('path/to/source/file2.pdf', 'all', 'landscape');

// call merge
//$pdf->merge('file', 'path/to/export/dir/file.pdf');
//

$pdf->addPDF('example1.pdf', 'all', 'portrait')
    ->addPDF('example2.pdf', 'all', 'landscape');

$pdf->merge('file', 'merged.pdf');
