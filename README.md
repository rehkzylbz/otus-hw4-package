# Простой шифр Цезаря

Протсой шифр Цезаря со сдвигом.
Шифрование/дешифровка строки.

## Требования

- PHP 7.4

## Установка

```bash
$ composer require rehkzylbz/otus-hw4-package
```

## Использование

```php
<?php
$string = 'Hello, world! Всем привет!';
echo 'Исходная строка: ', $string, PHP_EOL;
$encode = CaesarCipher::encode($string);
echo 'Шифрованная строка: ', $encode, PHP_EOL;
$decode = CaesarCipher::decode($encode);
echo 'Расшифрованная строка: ', $decode, PHP_EOL; 
```