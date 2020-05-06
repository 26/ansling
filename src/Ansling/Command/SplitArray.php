<?php

namespace Ansling\Command;

class SplitArray implements Command
{
    public static function execute(string $delimiter, array $haystack): array
    {
        return array_map(function(string $delimiter, string $haystack) {
            return explode($delimiter, $haystack);
        }, array_fill(0, count($haystack), $delimiter), $haystack);
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
        return [self::TYPE_STRING, self::TYPE_STRING_ARRAY];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_STRING_ARRAY_ARRAY;
    }
}