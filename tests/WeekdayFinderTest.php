<?php

    require_once "src/WeekdayFinder.php";

    class WeekdayFinderTest extends PHPUnit_Framework_TestCase
    {

        function test_same_day()
        {
            //Arrange
            $same_day_test = new WeekdayFinder;
            $year = 2015;
            $month = 03;
            $day = 12;

            //Act
            $result = $same_day_test->find_the_weekday($year, $month, $day);

            //Assert
            $this->assertEquals('Thursday', $result);
        }

        function test_next_day()
        {
            //Arrange
            $same_day_test = new WeekdayFinder;
            $year = 2015;
            $month = 03;
            $day = 13;

            //Act
            $result = $same_day_test->find_the_weekday($year, $month, $day);

            //Assert
            $this->assertEquals('Friday', $result);
        }

    }

?>
