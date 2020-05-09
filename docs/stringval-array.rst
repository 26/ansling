stringval*
=======

`stringval*` returns the string value of each element in an array as an array.

Description
-----------

.. code-block:: text

   stringval* `integer array` integers : `string array`

`stringval*` returns the string value of each element in `strings` and returns the result as an
array.

Parameters
----------

integers
********
The integers being converted to a string.

Examples
--------

1. Basic usage
**********************

.. code-block:: text

   stringval* range 0 9

   Result:

   ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"]
