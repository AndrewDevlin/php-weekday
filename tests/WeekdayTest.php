<?php
    require_once 'src/Weekday.php';

    class WeekdayFinderTest extends PHPUnit_Framework_TestCase
    {
        function test_WeedayFinder()
        {
            //Arange
            $new_date = new Weekday;
            $input_month = 2;
            $input_day = 16;
            $input_year = 2017;

            //Act
            $result = $new_date->WeekdayFinder($input_month, $input_day, $input_year);

            //Assert
            $this->assertEquals('Thursday', $result);
        }
    }
?>
