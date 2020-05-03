<?php

namespace Ansling\Command;

class Linebreak implements Command
{
    public static function execute(): string
    {
        return "\n";
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