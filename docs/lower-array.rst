lower*
======

`lower*` converts each element of the given array to lowercase.

Description
-----------

.. code-block:: text

   lower* `string array` values : `string array`

`lower*` converts each element to lowercase and returns the result
as an array.

Parameters
----------

values
******

The array of strings that must be converted to lowercase.

Examples
--------

1. Basic usage
**********************

.. code-block:: text

   lower* split " " "Lorem IPSUM"

   Result:

   ["lorem", "ipsum"]
