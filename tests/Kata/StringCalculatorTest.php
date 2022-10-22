<?php


namespace Kata;

use PHPUnit\Framework\TestCase;

final class StringCalculatorTest extends TestCase
{
    public function test_add_should_sum_all_numbers_except_not_valid_number()
    {
        // given
        $input = "1,5,8,,98,fg,178,154";
        $calculator = new StringCalculator();

        // when
        $result = $calculator->add($input);

        // then
        $this->assertEquals(444, $result);
    }

}
