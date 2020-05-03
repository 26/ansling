<?php

namespace Ansling\Command;

interface Command
{
    const TYPE_STRING = 'string';
    const TYPE_INT = 'integer';
    const TYPE_ARRAY = 'array';
    const TYPE_MIXED = 'mixed';

    /**
     * Returns the arity of this command. The arity of a command is the number
     * of arguments or operands a function takes.
     *
     * @return int Arity of this command
     */
    public static function getArity(): int;

    /**
     * Returns the required type for each argument respectively.
     *
     * @return array Array of type constants
     */
    public static function getArgumentTypes(): array;

    /**
     * Returns the return type.
     *
     * @return string Type constant
     */
    public static function getReturnType(): string;
}