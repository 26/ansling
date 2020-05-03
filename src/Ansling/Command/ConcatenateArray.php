<?php

namespace Ansling\Command;

class ConcatenateArray implements Command
{
    public static function execute(array $a, array $b): array
    {
        return array_map(function($a, $b) {
            return $a . $b;
        }, $a, $b);
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