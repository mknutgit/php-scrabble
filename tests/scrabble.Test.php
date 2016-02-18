<?php

    require_once "src/scrabble.php";

    class ScrabbleScoreConfirm extends PHPUnit_Framework_TestCase
    {

        function test_oneLetterScore() {

            $test_oneLetterScore = new ScrabbleScore;
            $input = "a";

            $result = $test_oneLetterScore->scrabble_score($input);

            $this->assertEquals(1, $result);
        }

        function test_oneMultipleLetterScore() {

            $test_oneMultipleLetterScore = new ScrabbleScore;
            $input = "rat";

            $result = $test_oneMultipleLetterScore->scrabble_score($input);

            $this->assertEquals(3, $result);
        }

        function test_mixedPointValueWords() {

          $test_mixedPointValueWords = new ScrabbleScore;
          $input = "map";

          $result = $test_mixedPointValueWords->scrabble_score($input);

          $this->assertEquals(7, $result);
        }
    }

    // Run in terminal in project folder
    // export PATH=$PATH:./vendor/bin
    // phpunit tests

?>
