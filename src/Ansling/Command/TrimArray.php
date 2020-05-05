<?php

namespace Ansling\Command;

class TrimArray implements Command
{
    public static function execute(array $input, array $mask): array
    {
        return array_map(function(string $input, string $mask): string {
            return trim($input, $mask);
        }, $input, $mask);
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