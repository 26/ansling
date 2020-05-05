upperfirst*
===========

`upperfirst*` converts for each element its first character to uppercase.

Description
-----------

.. code-block:: text

   upperfirst* `array` values : `array`

`upperfirst*` converts for each element its first character to uppercase and returns the result
as an array.

Parameters
----------

values
******

The array of strings of which the first character must be converted to uppercase.

Examples
--------

1. Basic usage
**********************

.. code-block:: text

   upperfirst* split " " "lorem ipsum"

   Result:

   ["Lorem", "Ipsum"]

.. code-block:: text

   upperfirst* split " " "lorem 9psum"

   Result:

   ["Lorem", "9psum"]


