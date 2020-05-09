sub
===

`sub` returns part of a string.

Description
-----------

.. code-block:: text

   sub `string` string, `integer` start, `integer` length : `string`

This command returns the portion of `string` from `start` with a length of `length`.

Parameters
----------

string
******
The input string.

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

   sub "abcdef" 0 -1

   Result:

   abcde

.. code-block:: text

   sub "abcdef" 2, -1

   Result:

   cde

.. code-block:: text

   sub "abcdef" 4 -4

   Result:



.. code-block:: text

   sub "abcdef" -3 -1

   Result:

   de