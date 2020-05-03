<?php

namespace Ansling\Command;

class Uppercase implements Command
{
    public static function execute(string $subject): string
    {
        return mb_strtoupper($subject);
    }

    /**
     * @inheritDoc
     */
    public static function getArity(): int
    {
        return 1;
    }

    /**
     * @inheritDoc
     */
    public static function getArgumentTypes(): array
    {
        return [self::TYPE_STRING];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_STRING;
    }
}