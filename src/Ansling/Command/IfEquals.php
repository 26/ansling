<?php

namespace Ansling\Command;

class IfEquals implements Command
{
    public static function execute(string $a, string $b, string $equals, string $not_equals): string
    {
        if ($a === $b) {
            return $equals;
        }

        return $not_equals;
    }

    /**
     * @inheritDoc
     */
    public static function getArity(): int
    {
        return 4;
    }

    /**
     * @inheritDoc
     */
    public static function getArgumentTypes(): array
    {
        return [self::TYPE_STRING, self::TYPE_STRING, self::TYPE_STRING, self::TYPE_STRING];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_STRING;
    }
}