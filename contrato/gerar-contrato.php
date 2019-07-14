<?php

 session_start();

// Require composer autoload
require_once '../pdf/vendor/autoload.php';
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf([]);

 $html = $_SESSION['foo'];

// Write some HTML code:
$mpdf->WriteHTML($html);

// Output a PDF file directly to the browser
$mpdf->Output($_SESSION['nome-arquivo'], 'I');

