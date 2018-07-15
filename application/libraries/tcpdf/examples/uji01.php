<?php
    require_once('tcpdf_include.php');
    $obj = new TCPDF();
    $isi = <<<EOD
    hallow.<br/>test
EOD;
    $obj->addPage();
    $obj->write(0,$isi);
    $obj->addPage();
    $obj->writeHTML($isi);
    $obj->writeHTML("<b> Nur Tebal</b>");
    $obj->output('uji01.pdf','I');

    $obj->setPrintHeader(true);
?>