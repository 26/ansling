<?php

namespace Ansling\Command;

class Wrap implements Command
{
    public static function execute(string $input, int $width): string
    {
        return wordwrap($input, $width);
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
        return [self::TYPE_STRING, self::TYPE_INT];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_STRING;
    }
}