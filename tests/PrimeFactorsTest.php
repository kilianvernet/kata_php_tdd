<?php

use App\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase{

    /**
     * @test
     * @dataProvider factors
     */
    function testGeneratePrimeFactors($number, $result){
        $factors = new PrimeFactors;

        $this->assertEquals($result, $factors->generate($number));
    }

    public function factors(){
        return [
            [1, []],
            [2, [2]],
            [3, [3]],
            [4, [2, 2]],
            [5, [5]],
            [6, [2, 3]],
            [7, [7]],
            [8, [2, 2, 2]],
            [100, [2, 2, 5, 5]]
        ];
    }
}