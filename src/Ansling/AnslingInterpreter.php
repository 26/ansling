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

        if (!self::areTypesEqualOrCoercible($expected_return_type, $return_type)) {
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

    private static function areTypesEqualOrCoercible(string $expected_return_type, string $actual_return_type): bool
    {
        switch ($expected_return_type) {
            case Command\Command::TYPE_MIXED:
                return true;
            case Command\Command::TYPE_MIXED_ARRAY:
                switch ($actual_return_type) {
                    case Command\Command::TYPE_STRING_ARRAY:
                    case Command\Command::TYPE_INTEGER_ARRAY:
                    case Command\Command::TYPE_MIXED_ARRAY:
                    case Command\Command::TYPE_STRING_ARRAY_ARRAY:
                    case Command\Command::TYPE_INTEGER_ARRAY_ARRAY:
                    case Command\Command::TYPE_MIXED_ARRAY_ARRAY:
                        return true;
                }

                return false;
            case Command\Command::TYPE_MIXED_ARRAY_ARRAY:
                switch ($actual_return_type) {
                    case Command\Command::TYPE_STRING_ARRAY_ARRAY:
                    case Command\Command::TYPE_INTEGER_ARRAY_ARRAY:
                    case Command\Command::TYPE_MIXED_ARRAY_ARRAY:
                        return true;
                }

                return false;
        }

        return $expected_return_type === $actual_return_type;
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
        $items = array_map(function($item): string {
            if (is_string($item)) {
                return sprintf('"%s"', strtr($item, array_reverse(self::STRING_ENCODINGS)));
            }

            if (is_array($item)) {
                return self::formatArray($item);
            }

            return sprintf('%s', $item);
        }, $input);

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