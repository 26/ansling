<?php

namespace Ansling\Command;

class Translate implements Command
{
    public function execute(string $input, array $from, array $to): string
    {
        return strtr($input, $from, $to);
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