<?php
    class ScrabbleScore
    {
        function scrabble_score ($input_word) {
            $score = 0;

            $one = array('a', 'e', 'i', 'o', 'u', 'l', 'n', 'r', 's', 't');
            $two = array('d', 'g');
            $three = array('b', 'c', 'm', 'p');
            $four = array('f', 'h', 'v', 'w', 'y');
            $five = array('k');
            $eight = array('j', 'x');
            $ten = array('q', 'z');

            $onlyAlphaInput = preg_replace("/[^A-Za-z0-9 ]/", '', $input_word);
            $lowerCaseInput = strtolower($onlyAlphaInput);

            $letters = str_split($lowerCaseInput);

          foreach ($letters as $letter) {
              if (in_array($letter, $one, true)) {
                $score = $score + 1;
              }
              elseif (in_array($letter, $two, true)) {
                $score = $score + 2;
              }
              elseif (in_array($letter, $three, true)) {
                $score = $score + 3;
              }
              elseif (in_array($letter, $four, true)) {
                $score = $score + 4;
              }
              elseif (in_array($letter, $five, true)) {
                $score = $score + 5;
              }
              elseif (in_array($letter, $eight, true)) {
                $score = $score + 8;
              }
              elseif (in_array($letter, $ten, true)) {
                $score = $score + 10;
              }
          }
          return $score;
      }
  }
?>
