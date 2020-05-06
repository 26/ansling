<?php

namespace Ansling\Command;

class ReverseArray implements Command
{
    public static function execute(array $values): array
    {
        return array_map(function(string $value): string {
            return strrev($value);
        }, $values);
    }

    /**
     * @inheritDoc
     */
    public static function getArity(): int
    {
        return 1;
    }

    /**
     * @inheritDoc
     */
    public static function getArgumentTypes(): array
    {
        return [self::TYPE_STRING_ARRAY];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_STRING_ARRAY;
    }
}