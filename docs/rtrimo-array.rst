rtrimo*
=======

`rtrimo*` strips one of the given characters from the end of a string in each element of an array.

Description
-----------

.. code-block:: text

   rtrimo* `string array` values, `string` mask : `string array`

`rtrimo*` strips one of the characters in `mask` from the beginning of each element in `values` and returns the result as an array.

Parameters
----------

values
******
The array of input string.

mask
****
String containing the characters that have to be stripped.

Examples
--------

1. Basic usage
**********************

.. code-block:: text

   rtrimo* "foobarrr" "r"

   Result:

   fffoobarr

.. code-block:: text

   rtrimo* "foobar" "ar"

   Result:

   foobar