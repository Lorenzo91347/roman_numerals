<?php

namespace Loren\RomanNumerals;

use Loren\RomanNumerals\RomanDecoder;
use PHPUnit\Framework\TestCase;

class RomanDecoderTest extends TestCase
{


    function testBasics()
    {
        $decoder = new RomanDecoder;
        $this->assertSame(1000, $decoder->solution("M"));
        $this->assertSame(50,  $decoder->solution("L"));
        $this->assertSame(4,  $decoder->solution("IV"));
    }

    function testComplex()
    {
        $decoder = new RomanDecoder;
        $this->assertSame(2017,  $decoder->solution("MMXVII"));
        $this->assertSame(1337,  $decoder->solution("MCCCXXXVII"));
    }
}
