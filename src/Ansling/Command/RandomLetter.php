<?php

namespace Ansling\Command;

class RandomLetter implements Command
{
    public static function execute(): string
    {
        $alphabet = str_split("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ");

        return $alphabet[rand(0, count($alphabet) - 1)];
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