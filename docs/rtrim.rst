rtrim
=====

`rtrim` strips given characters from the end of a string.

Description
-----------

.. code-block:: text

   rtrim `string` value, `string` mask : `string`

`rtrim` strips the characters in `mask` from the end of `value` and returns the result.

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

   rtrim "foobarrr" "r"

   Result:

   fooba

.. code-block:: text

   trim "abcdefg" "d..g"

   Result:

   abc