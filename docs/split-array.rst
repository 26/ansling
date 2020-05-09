split*
======

`split*` splits every element in an array based on a delimiter.

Description
-----------

.. code-block:: text

   split* `string` delimiter, `string array` strings : `string array array`

This command splits every element in `strings` on `delimiter` and returns the result as a two-dimensional array.

Parameters
----------

delimiter
*********
The delimiter.

strings
*******
The array of input strings.

Examples
--------

1. Basic usage
**********************

.. code-block:: text

   split* ";" split "," "foo;bar,boo;far"

   Result:

   [["foo", "bar"], ["boo", "far"]]