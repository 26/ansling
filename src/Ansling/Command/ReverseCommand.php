<?php

namespace Ansling\Command;

class ReverseCommand implements Command
{
    public static function getArity(): int
    {
        return 1;
    }

    public static function execute($input): string
    {
        return strrev($input);
    }
}