<?php

namespace Ansling;

/**
 * Class AnslingInterpreter
 * @package Ansling
 */
class AnslingInterpreter
{
    /**
     * @param $node
     * @return string
     */
    public function interpret($node): string
    {
        if (is_string($node)) {
            return self::formatString($node);
        }

        $command = Ansling::COMMANDS[array_shift($node)];
        $arguments = [];

        foreach ($node as $argument) {
            $arguments[] = self::interpret($argument);
        }

        return call_user_func_array([$command, 'execute'], $arguments);
    }

    /**
     * @param string $input
     * @return string
     */
    private static function formatString(string $input): string
    {
        return substr(strtr($input, [
            '\\"' => '"',
            '\\\\' => '\\'
        ]), 1, -1);
    }
}