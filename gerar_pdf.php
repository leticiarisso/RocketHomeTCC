<?php

    require_once __DIR__ . './mpdf/vendor/autoload.php';

    $mpdf = new \Mpdf\Mpdf();

    $html = file_get_contents('pdf.php');

    $mpdf->WriteHTML($html);
    $mpdf->Output();

	
	

// I - Abre no navegador
// F - Salva o arquivo no servido
// D - Salva o arquivo no computador do usuário
?>
