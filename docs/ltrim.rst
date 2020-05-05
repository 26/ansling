ltrim
=====

`ltrim` strips given characters from the beginning of a string.

Description
-----------

.. code-block:: text

   ltrim `string` value, `string` mask : `string`

`ltrim` strips the characters in `mask` from the beginning of `value` and returns the result.

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

   ltrim "fffoobar" "f"

   Result:

   oobar

.. code-block:: text

   ltrim "foobar" "ar"

   Result:

   foob

.. code-block:: text

   trim "abcdefg" "a..d"

   Result:

   efg