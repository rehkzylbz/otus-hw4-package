<?php

declare (strict_types=1);

namespace Rehkzylbz\OtusHw4Package;

class CaesarCipher {

    /**
     * Encode given string with simple Caesar cipher with given offset
     * @param string $string text to encode
     * @param int $offset offset for encode algorithm
     * @return string resulting string
     */
    public static function encode(string $string = '', int $offset = 1): string {
        $result = '';
        foreach (mb_str_split($string) as $char) {
            $result .= mb_chr(mb_ord($char)+$offset);
        }
        return $result;
    }
    
    /**
     * Decode given string with simple Caesar cipher with given offset
     * @param string $string text to decode
     * @param int $offset offset for decode algorithm
     * @return string resulting string
     */
    public static function decode(string $string = '', int $offset = 1): string {
        $result = '';
        foreach (mb_str_split($string) as $char) {
            $result .= mb_chr(mb_ord($char)-$offset);
        }
        return $result;
    }

}
