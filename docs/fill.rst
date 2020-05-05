fill
====

`fill` fills an array with the same string.

Description
-----------

.. code-block:: text

   fill `integer` number, `string` value : `string`

Fills an array with `number` of entries of the string in `value` and returns the result as
an array.

Parameters
----------

number
******
The number of elements to insert.

value
*****
The string with which the array should be filled.

Examples
--------

1. Basic usage
**********************

.. code-block:: text

   fill 2 "foo"

   Result:

   ["foo", "foo"]
