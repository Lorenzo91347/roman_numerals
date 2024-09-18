<?php

require 'vendor/autoload.php';

use Loren\RomanNumerals\RomanDecoder;

$decoder = new RomanDecoder();
echo $decoder->solution('M'); // Should output 1000