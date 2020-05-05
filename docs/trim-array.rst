trim*
======

`trim*` strips from the beginning and end of each string in the given array the characters in the corresponding element in another array.

Description
-----------

.. code-block:: text

   trim* `array` values, `array` masks : `array`

`trim*` strips from the beginning and end of each element in `values` the characters in the corresponding element in `masks`,
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

   trim* split "," "abc,def" split "," "ac,df"

   Result:

   ["b", "e"]