<?php

namespace Ansling;

/**
 * Class AnslingTypeMismatchException
 * @package Ansling
 */
class AnslingTypeMismatchException extends AnslingRuntimeException
{
    public function __construct(string $expected, string $found, string $command, int $argument_number)
    {
        $expected_type_article = in_array(substr($expected, 0, 1), ['a', 'e', 'i', 'o']) ? 'an' : 'a';
        $found_type_article = in_array(substr($found, 0, 1), ['a', 'e', 'i', 'o']) ? 'an' : 'a';

        parent::__construct(sprintf(
            "\n" .
            "\e[0;34m-- TYPE MISMATCH ------------------------------------------------------------------------------\e[0m\n" .
            "\n" .
            "I expected argument \e[0;34m%d\e[0m passed to the command `\e[0;34m%s\e[0m` to be %s \e[0;32m%s\e[0m, but instead %s \e[0;31m%s\e[0m was given.\n" .
            "\n" .
            "\e[0;32mHint\e[0m: Check the return type for each command on `https://marijn.it/ansling/`.\n" .
            "\n", $argument_number, $command, $expected_type_article, $expected, $found_type_article, $found
        ));
    }
}