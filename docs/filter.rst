filter
======

`filter` filters an array based on a regular expression.

Description
-----------

.. code-block:: text

   filter `string array` array, `string` pattern : `string array`

Filters the elements in `array` based on if it matches the given `pattern` and returns
the result as a `string array`.

Parameters
----------

array
*****
The array to be filtered.

pattern
*******
The pattern that will be tested against.

Examples
--------

1. Basic usage
**********************

.. code-block:: text

   filter split "," "999,filter" "/[0-9]+/"

   Result:

   ["999"]
