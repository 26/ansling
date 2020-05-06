<?php

namespace Ansling\Command;

class JoinArray implements Command
{
    public static function execute(string $glue, array $haystack): array
    {
        return array_map(function(string $glue, array $haystack) {
            return implode($glue, $haystack);
        }, array_fill(0, count($haystack), $glue), $haystack);
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
        return [self::TYPE_STRING, self::TYPE_STRING_ARRAY_ARRAY];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_STRING_ARRAY;
    }
}