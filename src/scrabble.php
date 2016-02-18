<?php
    class ScrabbleScore
    {
        function scrabble_score ($input_word) {
            $score = 0;
            $one = array('a', 'e', 'i', 'o', 'u', 'l', 'n', 'r', 's', 't');
            $two = array('d', 'g');
            $three = array('b', 'c', 'm', 'p');
            $letters = str_split($input_word);

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
          }
          return $score;
      }
  }
?>
