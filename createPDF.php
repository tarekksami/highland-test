<?php

include 'include/db_connect.php';
include 'ListService.php';
require_once('../tcpdf/config/lang/eng.php');
require_once('../tcpdf.php');

$listService = new ListService($connection, $_SESSION['user_id']);

$list = $listService->getList();

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Tarek Sami');
$pdf->SetTitle('Highland Shopping List App');
$pdf->SetSubject('Shopping List');

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);


$pdf->SetFont('times', 'BI', 20);

$pdf->AddPage();

$txt = '<ul>';

while($item = $list->fetch_assoc()){
		$txt .= '<li>' .'<h2>' . $item['name'] . '</h2>' . $item['content'] . '</li>' . "<br/>";
	};

$txt .= '</ul>';


$pdf->Write(0, $txt, '', 0, 'C', true, 0, false, false, 0);

$pdf->Output('shopping_list.pdf', 'I');

?>