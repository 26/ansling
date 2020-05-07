chunk
=====

`chunk` splits a string into chunks of the given length.

Description
-----------

.. code-block:: text

   chunk `string` value, `int` length : `string array`

This command splits the string `value` into chunks of the given `length` and returns
the result as a `string array`.

Parameters
----------

value
*****
The input string.

length
******
The maximum length of the chunk. If `length` is less than `1`, an exception is raised.

Examples
--------

1. Basic usage
**********************

.. code-block:: text

   chunk "foo" 1

   Result:

   ["f", "o", "o"]

2. Basic usage
*********************

.. code-block:: text

   chunk "foo" 2

   Result:

   ["fo", "o"]