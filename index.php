<?php

declare (strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Rehkzylbz\OtusHw4Package\CaesarCipher;

$string = 'Hello, world! Всем привет!';
echo 'Исходная строка: ', $string, PHP_EOL;
$encode = CaesarCipher::encode($string);
echo 'Шифрованная строка: ', $encode, PHP_EOL;
$decode = CaesarCipher::decode($encode);
echo 'Расшифрованная строка: ', $decode, PHP_EOL;