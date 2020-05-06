<?php

namespace Ansling\Command;

class PadArray implements Command
{
    public static function execute(array $values, int $length, string $padding): array
    {
        return array_map(function(string $value, int $length, string $padding): string {
            return str_pad($value, $length, $padding);
        }, $values, array_fill(0, count($values), $length), array_fill(0, count($values), $padding));
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
        return [self::TYPE_STRING_ARRAY, self::TYPE_INT, self::TYPE_STRING];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_STRING_ARRAY;
    }
}