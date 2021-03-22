$importe=utf8_encode($importe);
$importe=str_replace(array("â‚¬","€",chr(128))," ",iconv("UTF-8", "iso-8859-1//TRANSLIT", $importe));
