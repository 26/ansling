<?php

namespace Ansling\Command;

class Replace implements Command
{
    public static function execute(string $search, string $replace, string $subject): string
    {
        return str_replace($search, $replace, $subject);
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