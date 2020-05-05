<?php

namespace Ansling\Command;

class LowercaseArray implements Command
{
    public static function execute(array $subjects): array
    {
        return array_map(function(string $subject): string {
            return mb_strtolower($subject);
        }, $subjects);
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
        return [self::TYPE_ARRAY];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_ARRAY;
    }
}