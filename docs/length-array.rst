length*
=======

`length*` returns the length of each string in the given array.

Description
-----------

.. code-block:: text

   length* `string array` values : `integer array`

`length*` returns the length of each element in values as an array.

Parameters
----------

values
******

The array of strings of which the length must be returned.

Examples
--------

1. Basic usage
**********************

.. code-block:: text

   length* split " " "Lorem ipsum"

   Result:

   [5, 5]
