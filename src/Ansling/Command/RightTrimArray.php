<?php

namespace Ansling\Command;

class RightTrimArray implements Command
{
    public static function execute(array $values, string $mask): array
    {
        return array_map(function(string $value, string $mask): string {
            return rtrim($value, $mask);
        }, $values, array_fill(0, count($values), $mask));
    }

    /**
     * @inheritDoc
     */
    public static function getArity(): int
    {
        return 2;
    }

    /**
     * @inheritDoc
     */
    public static function getArgumentTypes(): array
    {
        return [self::TYPE_STRING_ARRAY, self::TYPE_STRING];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_STRING_ARRAY;
    }
}