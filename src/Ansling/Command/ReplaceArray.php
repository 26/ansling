<?php

namespace Ansling\Command;

class ReplaceArray implements Command
{
    public static function execute(array $search, array $replace, array $subjects): array
    {
        return array_map(function (string $subject, string $search, string $replace): string {
            return str_replace($search, $replace, $subject);
        }, $subjects, $search, $replace);
    }

    /**
     * Returns the arity of this command. The arity of a command is the number
     * of arguments or operands a function takes.
     *
     * @return int Arity of this command
     */
    public static function getArity(): int
    {
        return 3;
    }

    /**
     * Returns the required type for each argument respectively.
     *
     * @return array Array of type constants
     */
    public static function getArgumentTypes(): array
    {
        return [self::TYPE_STRING_ARRAY, self::TYPE_STRING_ARRAY, self::TYPE_STRING_ARRAY];
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