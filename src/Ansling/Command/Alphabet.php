<?php

namespace Ansling\Command;

class Alphabet implements Command
{
    public static function execute(): string
    {
        return "abcdefghijklmnopqrstuvwxyz";
    }

    /**
     * @inheritDoc
     */
    public static function getArity(): int
    {
        return 0;
    }

    /**
     * @inheritDoc
     */
    public static function getArgumentTypes(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_STRING;
    }
}