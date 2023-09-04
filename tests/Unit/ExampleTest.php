<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    public function teste1_strings_iguais(): void
    {
        $string1 = 'Teste!';
        $string2 = 'Teste!';
        $this->assertEquals($string1, $string2);
    }

    public function teste2_soma(): void
    {
        $num1 = 10;
        $num2 = 10;
        $expectedResult = 20;
        $sum = $num1 + $num2;
        $this->assertEquals($expectedResult, $sum);
    }

    public function teste3_numero_maior(): void
    {
        $number1 = 20;
        $number2 = 10;
        $this->assertGreaterThan($number2, $number1);
    }
}
