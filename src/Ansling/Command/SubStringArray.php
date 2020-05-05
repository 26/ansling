<?php

namespace Ansling\Command;

class SubStringArray implements Command
{
    public static function execute(array $values, array $starts, array $lengths): array
    {
        return array_map(function(string $value, int $start, int $length): string {
            return mb_substr($value, $start, $length);
        }, $values, $starts, $lengths);
    }

    /**
     * @inheritDoc
     */
    public static function getArity(): int
    {
        return 3;
    }

    /**
     * @inheritDoc
     */
    public static function getArgumentTypes(): array
    {
        return [self::TYPE_ARRAY, self::TYPE_ARRAY, self::TYPE_ARRAY];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_ARRAY;
    }
}