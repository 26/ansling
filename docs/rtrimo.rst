rtrimo
======

`rtrimo` strips one of the given characters from the end of a string.

Description
-----------

.. code-block:: text

   rtrimo `string` value, `string` mask : `string`

`rtrimo` strips one of the characters in `mask` from the end of `value` and returns the result.

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

   rtrimo "foobarrr" "r"

   Result:

   foobarr

.. code-block:: text

   rtrimo "foobar" "ar"

   Result:

   fooba