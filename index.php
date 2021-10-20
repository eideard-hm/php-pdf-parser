<?php
// Include Composer autoloader if not already done.
require_once 'vendor/autoload.php';

$parser = new \Smalot\PdfParser\Parser();
$pdf    = $parser->parseFile('documents/repository/certificado.pdf');

$text = $pdf->getText();
$wordKey = ['documento', 'documento de identidad', 'cédula', 'ciudadanía', 'identidad', 'tarjeta'];
$arrWords = explode(' ', $text);

foreach ($arrWords as $word) {
    foreach ($wordKey as $key) {
        if ($word == $key) {
            echo 'Palabra encontrada: ' . $word . '<br/>';
        }
    }
}

echo '<pre>';
print_r($arrWords);
echo '</pre>';
