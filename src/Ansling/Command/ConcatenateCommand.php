<?php

namespace Ansling\Command;

class ConcatenateCommand implements Command
{
    public static function getArity(): int
    {
        return 2;
    }

    public static function execute(string $a, string $b): string
    {
        return $a . $b;
    }
}