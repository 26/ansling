<?php

namespace Ansling\Command;

class EmptyString implements Command
{
    public static function execute(): string
    {
        return "";
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