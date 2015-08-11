<?php

    class AnagramGenerator
    {

        function makeAnagramMatch($input_word, $input_list)
        {

            $output_list = array();

            if ($input_list == $input_word) {
                array_push($output_list, $input_list);

            }
        return $output_list;
         }
    }


    ?>
