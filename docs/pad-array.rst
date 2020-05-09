pad*
====

`pad*` pads a list of strings to a certain length with another string.

Description
-----------

.. code-block:: text

   pad `string array` input, `integer` length, `string` padding : `string`

This command pads each element in `input` on the right with `padding` until it is `length` long, and returns the
result as an array.

Parameters
----------

input
*****
The array of string to be padded.

length
******
The length the string should be after padding.

padding
*******
The string with which must be padded.

Examples
--------

1. Basic usage
**********************

.. code-block:: text

   pad* split "," "1,2" 4 "0"

   Result:

   ["1000", "2000"]
