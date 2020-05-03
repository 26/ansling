<?php

namespace Ansling;

class AnslingAbstractTypeMismatchException extends AnslingRuntimeException
{
    /**
     * @var string
     */
    public $expected;

    /**
     * @var string
     */
    public $found;

    public function __construct(string $expected, string $found)
    {
        $this->expected = $expected;
        $this->found = $found;

        parent::__construct();
    }
}