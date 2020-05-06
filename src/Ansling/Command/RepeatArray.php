<?php

namespace Ansling\Command;

class RepeatArray implements Command
{
    public static function execute(array $inputs, int $multiplier): array
    {
        return array_map(function(string $input, int $multiplier): string {
            return str_repeat($input, $multiplier);
        }, $inputs, array_fill(0, count($inputs), $multiplier));
    }

    /**
     * Returns the arity of this command. The arity of a command is the number
     * of arguments or operands a function takes.
     *
     * @return int Arity of this command
     */
    public static function getArity(): int
    {
        return 2;
    }

    /**
     * Returns the required type for each argument respectively.
     *
     * @return array Array of type constants
     */
    public static function getArgumentTypes(): array
    {
        return [self::TYPE_STRING_ARRAY, self::TYPE_INT];
    }

    /**
     * Returns the return type.
     *
     * @return string Type constant
     */
    public static function getReturnType(): string
    {
        return self::TYPE_STRING_ARRAY;
    }
}