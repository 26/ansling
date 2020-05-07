intval*
=======

`intval*` returns the integer value of each element in an array as an array.

Description
-----------

.. code-block:: text

   intval* `string array` strings : `integer array`

`intval*` returns the integer value of each element in `strings` and returns the result as an
array.

Parameters
----------

strings
*******

The strings being converted to an integer.

Examples
--------

1. Basic usage
**********************

.. code-block:: text

   intval* split "," "foo,bar,,12"

   Result:

   [1, 1, 0, 12]
