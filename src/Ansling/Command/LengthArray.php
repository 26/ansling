<?php

namespace Ansling\Command;

class LengthArray implements Command
{
    public static function execute(array $values): array
    {
        return array_map(function(string $value): int {
            return strlen($value);
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
        return [self::TYPE_ARRAY];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_ARRAY;
    }
}