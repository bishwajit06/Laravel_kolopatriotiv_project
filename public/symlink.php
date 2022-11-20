<?php

$targetFolder = $_SERVER['DOCUMENT_ROOT'].'/../topsmmseoservices/storage/app/public';
$linkFolder = $_SERVER['DOCUMENT_ROOT'].'/storage';
symlink($targetFolder,$linkFolder);
echo 'Symlink process successfully completed!!!!';

?>