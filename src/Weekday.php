<?php
    class Weekday
    {
        function WeekdayFinder($input_month, $input_day, $input_year)
        {
            return date("l", mktime(0, 0, 0, $input_month, $input_day, $input_year));
        }
    }
?>
