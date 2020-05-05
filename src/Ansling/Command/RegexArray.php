<?php

namespace Ansling\Command;

use Ansling\AnslingRuntimeException;

class RegexArray implements Command
{
    /**
     * @param array $values
     * @param array $regexes
     * @return array
     */
    public static function execute(array $values, array $regexes): array
    {
        return array_map(function(string $value, string $regex): string {
            if(preg_match($regex, $value, $matches) !== false) {
                return $matches[0];
            }

            throw new AnslingRuntimeException(sprintf(
                "\n" .
                "\e[0;34m-- INVALID REGEX PATTERN -----------------------------------------------------------------------------------\e[0m\n" .
                "\n" .
                "I expected argument 2 passed to the command `\e[0;34mregex*\e[0m` to contain valid regexes, but `\e[0;31m%s\e[0m` seems to not be valid.\n" .
                "\n", $regex
            ));
        }, $values, $regexes);
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
        return [self::TYPE_ARRAY, self::TYPE_ARRAY];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_ARRAY;
    }
}