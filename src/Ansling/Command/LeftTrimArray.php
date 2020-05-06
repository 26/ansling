<?php

namespace Ansling\Command;

class LeftTrimArray implements Command
{
    public static function execute(array $input, string $mask): array
    {
        return array_map(function(string $input, string $mask): string {
            return ltrim($input, $mask);
        }, $input, array_fill(0, count($input), $mask));
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