<?php

namespace Ansling;

final class AnslingParser
{
    const STRING = 1;
    const INTEGER = 2;
    const COMMAND = 3;

    /**
     * @var array Key-value list of the command as a string with its class
     */
    private $command_index;

    /**
     * AnslingParser constructor.
     *
     * @param array $command_index Key-value list of the command as a string with its class
     */
    public function __construct(array $command_index)
    {
        $this->command_index = $command_index;
    }

    /**
     * @param string $input
     * @return array|string
     * @throws AnslingParseException
     */
    public function parse(string $input)
    {
        if (strlen($input) === 0) {
            return [];
        }

        $index = 0;
        $tokens = self::tokenize($input);

        $ast = self::parseTokens($tokens, $index);

        if (count($tokens) > $index) {
            throw new AnslingParseException(
                "\n" .
                "\e[0;34m-- TOO MANY ARGUMENTS --------------------------------------------------------------\e[0m\n" .
                "\n" .
                "The number of arguments supplied are more than I expected. That's all I know.\n" .
                "\n" .
                "\e[0;32mHint\e[0m: Check the parameters required for each command on `https://ansling.github.io`.\n" .
                "\n"
            );
        }

        return $ast;
    }

    /**
     * Splits the given input into tokens and stores the result in self::$tokens;
     *
     * @param string $input Input to be split
     * @return array
     */
    public function tokenize(string $input): array
    {
        $tokens = [];
        for ($offset = 0; $offset < strlen($input); $offset++) {
            $string = substr($input, $offset);
            $trim = ltrim($string);
            $trim_size = strlen($string) - strlen($trim);

            if (preg_match('/^("(?:[^"\\\\]|\\\\.)*")/', $trim, $matches) === 1) {
                $tokens[] = [$matches[1], self::STRING];
            } else if (preg_match('/^([0-9]+)/', $trim, $matches) === 1) {
                $tokens[] = [$matches[1], self::INTEGER];
            } else if (preg_match('/^([^\s0-9]+)/', $trim, $matches) === 1) {
                $tokens[] = [$matches[1], self::COMMAND];
            }

            $offset += $trim_size + strlen($matches[1]);
        }

        return $tokens;
    }

    /**
     * @param array $tokens
     * @param int $index
     * @return array|string
     * @throws AnslingParseException
     */
    public function parseTokens(array &$tokens, int &$index)
    {
        if (!isset($tokens[$index])) {
            throw new AnslingParseException(
                "\n" .
                "\e[0;34m-- TOO FEW ARGUMENTS ---------------------------------------------------------------\e[0m\n" .
                "\n" .
                "The number of arguments supplied are less than I expected. That's all I know.\n" .
                "\n" .
                "\e[0;32mHint\e[0m: Check the parameters required for each command on `https://ansling.github.io`.\n" .
                "\n"
            );
        }

        $token = $tokens[$index];
        $value = $token[0];
        $type = $token[1];

        $index++;

        if ($type === self::STRING) {
            return $value;
        }

        if ($type === self::INTEGER) {
            return (int)$value;
        }

        if (!isset($this->command_index[$value])) {
            throw new AnslingParseException(
                sprintf(
                    "\n" .
                    "\e[0;34m-- UNRECOGNIZED COMMAND ------------------------------------------\e[0m\n" .
                    "\n" .
                    "I did not understand the command `\e[0;34m%s\e[0m`. That's all I know.\n" .
                    "\n" .
                    "\e[0;32mHint\e[0m: Check the available commands on `https://ansling.github.io`.\n" .
                    "\n", $value)
            );
        }

        $command = $this->command_index[$value];
        $arity = $command::getArity();

        $result = [$value];
        for ($i = 0; $i < $arity; $i++) {
            array_push($result, $this->parseTokens($tokens, $index));
        }

        return $result;
    }
}