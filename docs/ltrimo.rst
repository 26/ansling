ltrimo
======

`ltrimo` strips one of the given characters from the beginning of a string.

Description
-----------

.. code-block:: text

   ltrimo `string` value, `string` mask : `string`

`ltrimo` strips one of the characters in `mask` from the beginning of `value` and returns the result.

Parameters
----------

value
*****
The input string.

mask
****
String containing the characters that have to be stripped.

Examples
--------

1. Basic usage
**********************

.. code-block:: text

   ltrimo "fffoobar" "f"

   Result:

   ffoobar

.. code-block:: text

   ltrimo "foobar" "ar"

   Result:

   foobar