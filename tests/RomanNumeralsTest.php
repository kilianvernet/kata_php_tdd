<?php

use App\RomanNumerals;
use PHPUnit\Framework\TestCase;

class RomanNumeralsTest extends TestCase {

    /**
     * @dataProvider provider
     */
    public function testGenerateRomanNumerals($num, $result){
        $roman = new RomanNumerals;
        $this->assertEquals($result, $roman->generate($num));
    }

    public function provider() {
        return [
            [1, 'I'],
            [2, 'II'],
            [3, 'III'],
            [4, 'IV'],
            [5, 'V'],
            [9, 'IX'],
            [10, 'X'],
            [40, 'XL'],
            [50, 'L'],
            [90, 'XC'],
            [100, 'C'],
            [400, 'CD'],
            [500, 'D'],
            [900, 'CM'],
            [1000, 'M'],
            [2543, 'MMDXLIII'],
            [3999, 'MMMCMXCIX']
        ];
    }
}