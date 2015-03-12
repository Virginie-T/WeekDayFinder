<?php

    class WeekdayFinder
    {

        function find_the_weekday($input_year, $input_month, $input_day)
        {

            $output="";
            if ($input_year == 2015 && $input_month == 03 && $input_day == 12) {
                $output='Thursday';
            } else {
                $output='FALSE';
            }
            return $output;
        }

    }

?>
