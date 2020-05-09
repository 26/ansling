split
======

`split` splits a string based on a delimiter.

Description
-----------

.. code-block:: text

   split `string` delimiter, `string` string : `string array`

This command splits `string` on `delimiter` and returns the result as an array.

Parameters
----------

delimiter
*********
The delimiter.

string
******
The input string.

Examples
--------

1. Basic usage
**********************

.. code-block:: text

   split "," "foo,bar,boo,far"

   Result:

   ["foo", "bar", "boo", "far"]