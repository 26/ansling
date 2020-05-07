upper*
======

`upper*` converts each element of the given array to lowercase.

Description
-----------

.. code-block:: text

   upper* `string array` values : `string array`

`upper*` converts each element to uppercase and returns the result
as an array.

Parameters
----------

values
******

The array of strings that must be converted to uppercase.

Examples
--------

1. Basic usage
**********************

.. code-block:: text

   upper* split " " "Lorem IPSUM"

   Result:

   ["LOREM", "IPSUM"]
