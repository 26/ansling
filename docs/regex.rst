regex
=====

`regex` performs a regular expression match.

Description
-----------

.. code-block:: text

   regex `string` value, `string` regex : `string`

This command performs `regex` on `value` and returns the found string.

Parameters
----------

value
*****
Subject for a match.

regex
*****
The regular expression pattern.

Examples
--------

1. Basic usage
**********************

.. code-block:: text

   regex "10000" "/1/"

   Result:

   1
