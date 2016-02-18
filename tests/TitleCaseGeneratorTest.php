<?php

    require_once "src/scrabble.php";

    class ScrabbleScoreConfirm extends PHPUnit_Framework_TestCase
    {

        function test_oneLetterScore() {

            $test_oneLetterScore = new ScrabbleScore;
            $input = "a";

            $result = $test_oneLetterScore->scrabble_score($input);

            $this->assertEquals("1", $result);
        }
    }

    // Run in terminal in project folder
    // export PATH=$PATH:./vendor/bin
    // phpunit tests

?>
