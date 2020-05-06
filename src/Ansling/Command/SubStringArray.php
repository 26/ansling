<?php

namespace Ansling\Command;

class SubStringArray implements Command
{
    public static function execute(array $values, int $start, int $length): array
    {
        return array_map(function(string $value, int $start, int $length): string {
            return mb_substr($value, $start, $length);
        }, $values, array_fill(0, count($values), $start), array_fill(0, count($values), $length));
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
        return [self::TYPE_STRING_ARRAY, self::TYPE_INT, self::TYPE_INT];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_STRING_ARRAY;
    }
}