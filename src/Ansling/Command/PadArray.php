<?php

namespace Ansling\Command;

class PadArray implements Command
{
    public static function execute(array $values, array $lengths, array $paddings): array
    {
        return array_map(function(string $value, int $length, string $padding): string {
            return str_pad($value, $length, $padding);
        }, $values, $lengths, $paddings);
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