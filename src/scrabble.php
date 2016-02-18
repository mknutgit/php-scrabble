<?php
    class ScrabbleScore
    {
        function scrabble_score ($input_word) {
          $score = (0);
          $one = array ('a');
          $letters = str_split($input_word);

          foreach($letters as $letter) {
            if (in_array($letter, $one, true)) {
            $score = $score + 1;
          }
          return $score;
        }



    // // SAVE, getAll(), deleteAll()
    //     function save()
    //     {
    //         array_push($_SESSION['list_of_contacts'], $this);
    //     }
    //     static function getAll()
    //     {
    //         return $_SESSION['list_of_contacts'];
    //     }
    //     static function deleteAll()
    //     {
    //         $_SESSION['list_of_contacts'] = array();
    //     }
    }
  }
?>
