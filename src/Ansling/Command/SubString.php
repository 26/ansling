<?php

namespace Ansling\Command;

class SubString implements Command
{
    public static function execute(string $input, int $start, int $length): string
    {
        return mb_substr($input, $start, $length);
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
        return [self::TYPE_STRING, self::TYPE_INT, self::TYPE_INT];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_STRING;
    }
}