<?php 
include "../../../model/model.php"; 
include "../../../model/package_tour/quotation/quotation_email_send_backoffice.php"; 

$quotation_email_send_backoffice = new quotation_email_send_backoffice;
$quotation_email_send_backoffice->quotation_email_backoffice();

?>