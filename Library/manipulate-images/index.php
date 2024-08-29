<?php

require_once '../vendor/autoload.php';

$originalPhoto = 'img.png';
$modifiedPhoto = 'img-modified.png';

$thumb = new PHPThumb\GD($originalPhoto);
$thumb->resize(200, 200);
$thumb->show();
$thumb->save($modifiedPhoto);

echo 'Image original: '.$originalPhoto.'<br>';
echo 'Image modified: '.$modifiedPhoto.'<br>';