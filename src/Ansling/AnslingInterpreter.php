<?php

namespace Ansling;

/**
 * Class AnslingInterpreter
 * @package Ansling
 */
final class AnslingInterpreter
{
    const STRING_ENCODINGS = ['\\"' => '"', '\\\\' => '\\'];

    /**
     * @param $ast
     * @return string
     * @throws AnslingAbstractTypeMismatchException
     * @throws AnslingTypeMismatchException
     */
    public function interpret($ast): string {
        if ($ast === []) {
            return "";
        }

        $result = $this->interpretNode($ast, Command\Command::TYPE_MIXED);

        if (is_array($result)) {
            return self::formatArray($result);
        }

        return (string)$result;
    }

    /**
     * @param string|array $node
     * @param string $expected_return_type
     * @return string
     * @throws AnslingTypeMismatchException
     * @throws AnslingAbstractTypeMismatchException
     */
    private function interpretNode($node, string $expected_return_type)
    {
        $return_type = self::getReturnType($node);
        if ($expected_return_type !== Command\Command::TYPE_MIXED && $expected_return_type !== $return_type) {
            throw new AnslingAbstractTypeMismatchException($expected_return_type, $return_type);
        }

        if (is_string($node)) {
            return self::formatString($node);
        }

        if (is_integer($node)) {
            return $node;
        }

        $command_name = array_shift($node);
        $command = Ansling::COMMANDS[$command_name];
        $argument_types = $command::getArgumentTypes();

        $arguments = [];
        for ($idx = 0; $idx < count($node); $idx++) {
            try {
                $arguments[] = self::interpretNode($node[$idx], $argument_types[$idx]);
            } catch(AnslingAbstractTypeMismatchException $exception) {
                throw new AnslingTypeMismatchException($exception->expected, $exception->found, $command_name, $idx + 1);
            }
        }

        return call_user_func_array([$command, 'execute'], $arguments);
    }

    /**
     * @param string $input
     * @return string
     */
    private static function formatString(string $input): string
    {
        return substr(strtr($input, self::STRING_ENCODINGS), 1, -1);
    }

    /**
     * @param array $input
     * @return string
     */
    private static function formatArray(array $input): string
    {
        $items = [];
        foreach ($input as $item) {
            $items[] = is_string($item) ? sprintf('"%s"', strtr($item, array_reverse(self::STRING_ENCODINGS))) : sprintf('%s', $item);
        }

        return sprintf("[%s]", implode(', ', $items));
    }

    /**
     * @param $node
     * @return string
     */
    private static function getReturnType($node): string
    {
        if (is_string($node)) {
            return Command\Command::TYPE_STRING;
        }

        if (is_integer($node)) {
            return Command\Command::TYPE_INT;
        }

        return call_user_func([Ansling::COMMANDS[$node[0]], 'getReturnType']);
    }
}