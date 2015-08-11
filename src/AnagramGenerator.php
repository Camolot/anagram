<?php

    class AnagramGenerator
    {

        function makeAnagramMatch($input_word, $input_list)
        {

            $output_list = array();

            $input_list = implode(" ",$input_list);

            if ($input_list == $input_word) {
                echo explode(" ",$input_list);
                array_push($output_list, $input_list);

            }
        return $output_list;
         }
    }


    ?>
