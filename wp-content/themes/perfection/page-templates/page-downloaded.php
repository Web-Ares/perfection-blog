<?php
/**
 * Template Name: Downloaded Page
 */
?>

<?php

file_force_download('/mnt/ebs/www/icon54.com/wp-content/files/direct.zip');

function file_force_download($file) {
    if (file_exists($file)) {
        header ("Content-Type: application/octet-stream");
        header ("Accept-Ranges: bytes");
        header ("Content-Length: ".filesize($file));
        header ("Content-Disposition: attachment; filename=".$file);
        readfile($file);
        exit;
    }
}
?>
