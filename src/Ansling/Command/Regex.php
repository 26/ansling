<?php

namespace Ansling\Command;

use Ansling\AnslingRuntimeException;

class Regex implements Command
{
    /**
     * @param string $value
     * @param string $regex
     * @return string
     * @throws AnslingRuntimeException
     */
    public static function execute(string $value, string $regex): string
    {
        if(preg_match($regex, $value, $matches) !== false) {
            return (string)$matches[0];
        }

        throw new AnslingRuntimeException(sprintf(
            "\n" .
            "\e[0;34m-- INVALID REGEX PATTERN -----------------------------------------------------------------------------------\e[0m\n" .
            "\n" .
            "I expected argument 2 passed to the command `\e[0;34mregex\e[0m` to be a valid regex pattern, but `\e[0;31m%s\e[0m` seems to not be valid.\n" .
            "\n", $regex
        ));
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
        return [self::TYPE_STRING, self::TYPE_STRING];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_STRING;
    }
}