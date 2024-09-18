<?php

namespace Loren\RomanNumerals;

use InvalidArgumentException;

class RomanDecoder
{
    function solution($roman)
    {
        $number = 0;
        $conversionArray = [
            "I" => 1,
            "V" => 5,
            "X" => 10,
            "L" => 50,
            "C" => 100,
            "D" => 500,
            "M" => 1000
        ];


        for ($i = 0; $i < strlen($roman); $i++) {

            $currentValue = $conversionArray[$roman[$i]];


            if ($i + 1 < strlen($roman) && $conversionArray[$roman[$i + 1]] > $currentValue) {
                $number -= $currentValue;
            } else {

                $number += $currentValue;
            }
        }

        return $number;
    }
}
