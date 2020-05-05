<?php

namespace Ansling\Command;

class WrapArray implements Command
{
    public static function execute(array $values, array $width): array
    {
        return array_map(function(string $value, int $width): string {
            return wordwrap($value, $width);
        }, $values, $width);
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
        return [self::TYPE_ARRAY, self::TYPE_ARRAY];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_ARRAY;
    }
}