<?php

namespace Ansling\Command;

class ConcatenateCommand implements Command
{
    public static function getArity(): int
    {
        return 2;
    }
}