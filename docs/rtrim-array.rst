rtrim*
======

`rtrim*` strips from the end of each string in the given array the characters in the corresponding element in another array.

Description
-----------

.. code-block:: text

   rtrim* `string array` values, `string` mask : `string array`

`rtrim*` strips from the end of each element in `values` the characters in `mask`,
and returns the results as an array.

Parameters
----------

values
******

The input strings.

mask
*****

String containing the characters that have to be stripped.

Examples
--------

1. Basic usage
**********************

.. code-block:: text

   rtrim* split "," "abc,def" split "," "c,f"

   Result:

   ["ab", "de"]