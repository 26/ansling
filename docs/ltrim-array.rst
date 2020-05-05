ltrim*
======

`ltrim*` strips from the beginning of each string in the given array the characters in the corresponding element in another array.

Description
-----------

.. code-block:: text

   ltrim* `array` values, `array` masks : `array`

`ltrim*` strips from the beginning of each element in `values` the characters in the corresponding element in `masks`,
and returns the results as an array.

Parameters
----------

values
******

The input strings.

masks
*****

Strings containing the characters that have to be stripped.

Examples
--------

1. Basic usage
**********************

.. code-block:: text

   ltrim* split "," "abc,def" split "," "a,d"

   Result:

   ["bc", "ef"]