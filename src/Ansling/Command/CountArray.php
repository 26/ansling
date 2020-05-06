<?php

namespace Ansling\Command;

class CountArray implements Command
{
    public static function execute(array $array): array
    {
        return array_map(function(array $array): int {
            return count($array);
        }, $array);
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
        return [self::TYPE_MIXED_ARRAY_ARRAY];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_INTEGER_ARRAY;
    }
}