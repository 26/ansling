<?php

namespace Ansling\Command;

class StringValue implements Command
{
    public function execute(int $value): string
    {
        return (string)$value;
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
        return [self::TYPE_INT];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_STRING;
    }
}