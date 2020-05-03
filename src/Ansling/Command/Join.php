<?php

namespace Ansling\Command;

class Join implements Command
{
    public static function execute(string $glue, array $haystack): string
    {
        return implode($glue, $haystack);
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
        return [self::TYPE_STRING, self::TYPE_ARRAY];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_STRING;
    }
}