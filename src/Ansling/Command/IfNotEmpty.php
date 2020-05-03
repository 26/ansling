<?php

namespace Ansling\Command;

class IfNotEmpty implements Command
{
    public static function execute(string $value, string $not_empty, string $empty): string
    {
        if (empty($value)) {
            return $empty;
        }

        return $not_empty;
    }

    /**
     * @inheritDoc
     */
    public static function getArity(): int
    {
        return 3;
    }

    /**
     * @inheritDoc
     */
    public static function getArgumentTypes(): array
    {
        return [self::TYPE_STRING, self::TYPE_STRING, self::TYPE_STRING];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_STRING;
    }
}