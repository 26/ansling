<?php

namespace Ansling\Command;

class IntegerValue implements Command
{
    public function execute(string $value): int
    {
        return (int)$value;
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
        return self::TYPE_INT;
    }
}