ltrimo*
=======

`ltrimo*` strips one of the given characters from the beginning of a string in each element of an array.

Description
-----------

.. code-block:: text

   ltrimo* `string array` values, `string` mask : `string array`

`ltrimo*` strips one of the characters in `mask` from the beginning of each element in `values` and returns the result as an array.

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

   ltrimo* "fffoobar" "f"

   Result:

   ffoobar

.. code-block:: text

   ltrimo* "foobar" "ar"

   Result:

   foobar