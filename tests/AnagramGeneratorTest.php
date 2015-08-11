<?php

    require_once "src/AnagramGenerator.php";

    class AnagramGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_makeAnagramMatch_singleLetter()
        {


            //Arrange
            $test_makeAnagramMatch = new AnagramGenerator;
            $input_word = "a";
            $input_list = ["a"];

            //Act
            $result = $test_makeAnagramMatch->makeAnagramMatch($input_word, $input_list);

            //Assert
            $this->assertEquals(["a"], $result);
        }
    }







 ?>
