sub*
====

`sub*` returns part of a string for each element in an array.

Description
-----------

.. code-block:: text

   sub* `array` strings, `integer` start, `integer` length : `string`

This command returns for each element in `strings` the portion of that element from `start` with a length of `length`.

Parameters
----------

strings
*******
The array of input strings.

start
*****
If start is a non-negative number, the string that is going to be returned will start
at the position specified by this parameter, counting from zero.

If start is negative, returned string will start at the position specified by this parameter,
from the end.

length
******
If length is positive, the string returned will be at most `length` characters. If length is
a negative number, then that many characters will omitted from the end of `string`.

Examples
--------

1. Basic usage
**********************

.. code-block:: text

   sub* split "," "ab,cd,ef" 0 -1

   Result:

   ["a", "c", "e"]