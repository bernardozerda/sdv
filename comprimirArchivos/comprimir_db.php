<?php

require_once('pclzip.lib.php');
$zip = new PclZip('Backup_sdht_subsidios_ftpsite_20141222.zip');

$zip->create('../../sdht_subsidios_bck/sdht_subsidiosMon12222014.sql');
?>