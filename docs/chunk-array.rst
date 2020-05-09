chunk*
======

`chunk*` splits each element of an array into chunks of the given length.

Description
-----------

.. code-block:: text

   chunk* `string array` values, `int` length : `string array`

This command splits each element in `values` into chunks of the given `length` and returns
the result as a `string array`.

Parameters
----------

values
******
The array of input string.

length
******
The maximum length of the chunk. If `length` is less than `1`, an exception is raised.

Examples
--------

1. Basic usage
**********************

.. code-block:: text

   chunk* split "," "hello,world" 1

   Result:

   [["h", "e", "l", "l", "o"], ["w", "o", "r", "l", "d"]]

2. Basic usage
*********************

.. code-block:: text

   chunk* split "," "hello,world" 4

   Result:

   [["hell", "o"], ["worl", "d"]]