trim
=====

`trim` strips given characters from the beginning and end of a string.

Description
-----------

.. code-block:: text

   trim `string` value, `string` mask : `string`

`trim` strips the characters in `mask` from the beginning and end of `value` and returns the result.

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

   trim "fffoobarrr" "rf"

   Result:

   ooba

.. code-block:: text

   trim "abcdefg" "a..d"

   Result:

   efg
