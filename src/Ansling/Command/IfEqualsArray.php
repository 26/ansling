<?php

namespace Ansling\Command;

class IfEqualsArray implements Command
{
    public static function execute(array $a_array, array $b_array, array $equals, array $not_equals): array
    {
        return array_map(function(string $a, string $b, string $values_equal, string $values_not_equal): string {
            return $a === $b ? $values_equal : $values_not_equal;
        }, $a_array, $b_array, $equals, $not_equals);
    }

    /**
     * @inheritDoc
     */
    public static function getArity(): int
    {
        return 4;
    }

    /**
     * @inheritDoc
     */
    public static function getArgumentTypes(): array
    {
        return [self::TYPE_STRING_ARRAY, self::TYPE_STRING_ARRAY, self::TYPE_STRING_ARRAY, self::TYPE_STRING_ARRAY];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_STRING_ARRAY;
    }
}