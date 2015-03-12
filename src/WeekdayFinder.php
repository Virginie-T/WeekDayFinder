<?php

    class WeekdayFinder
    {

        function find_the_weekday($input_year, $input_month, $input_day)
        {

            $anchor_year = 2015;
            $anchor_month = 3;
            $anchor_day = 12;

            $year_days = $input_year - $anchor_year;
            $month_days = $input_month - $anchor_month;
            $day_days = $input_day - $anchor_day;

            $total_days = $year_days + $month_days + $day_days;

            $modulo_days = $total_days%7;
            switch ($modulo_days) {
                case 0:
                    $output = 'Thursday';
                    break;
                case 1:
                    $output = 'Friday';
                    break;
            }

            return $output;
        }

    }

?>
