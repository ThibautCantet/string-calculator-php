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

    public function test_add_should_sum_all_numbers_when_delimiter_is_defined_and_is_word()
    {
        // given
        $input = "[delim]1delim5delim8delimdelim98delimfgdelim178delim154";
        $calculator = new StringCalculator();

        // when
        $result = $calculator->add($input);

        // then
        $this->assertEquals(444, $result);
    }

    public function test_add_should_sum_all_numbers_when_delimiter_is_defined_and_is_a_pipe()
    {
        // given
        $input = "[|]1|5|8||98|fg|178|154";
        $calculator = new StringCalculator();

        // when
        $result = $calculator->add($input);

        // then
        $this->assertEquals(444, $result);
    }

}
