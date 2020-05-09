pad
===

`pad` pads a string to a certain length with another string.

Description
-----------

.. code-block:: text

   pad `string` input, `integer` length, `string` padding : `string`

This command pads the `input` string on the right with `padding` until it is `length` long.

Parameters
----------

input
*****
The string to be padded.

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

   pad "1" -4 "0"

   Result:

   1000
