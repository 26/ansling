ltrim*
======

`ltrim*` strips from the beginning of each string in the given array the given characters..

Description
-----------

.. code-block:: text

   ltrim* `string array` values, `string` mask : `string array`

`ltrim*` strips from the beginning of each element in `values` the characters in `mask` and returns the result as an array.

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

   ltrim* split "," "abc,def" split "," "a,d"

   Result:

   ["bc", "ef"]