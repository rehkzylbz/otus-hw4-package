<?php

declare (strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Rehkzylbz\OtusHwPackage\CaesarCipher;

$string = 'Hello, world! Всем привет!';
var_dump($string);
$encode = CaesarCipher::encode();
var_dump($encode);
$decode = CaesarCipher::decode($encode);
var_dump($decode);