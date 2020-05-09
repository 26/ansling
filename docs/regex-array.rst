regex*
======

`regex*` performs a regular expression match on each element in the given array.

Description
-----------

.. code-block:: text

   regex `string array` values, `string` regex : `string array`

This command performs `regex` on every element in `values` and returns each found string as a
string array.

Parameters
----------

values
******
Array of subjects for a match.

regex
*****
The regular expression pattern.

Examples
--------

1. Basic usage
**********************

.. code-block:: text

   regex* split "," "1,1,1,0,0" "/1/"

   Result:

   ["1", "1", "1"]
