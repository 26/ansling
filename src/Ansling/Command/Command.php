<?php

namespace Ansling\Command;

interface Command
{
    /**
     * Returns the arity of this command. The arity of a command is the number
     * of arguments or operands a function takes.
     *
     * @return int
     */
    public static function getArity(): int;
}