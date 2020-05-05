ifeq*
=====

`ifeq*` compares each element of one array to each corresponding element of another array, and
returns the corresponding element of one of two other arrays based on the result.

Description
-----------

.. code-block:: text

   ifeq* `array` a, `array` b, `array` identical, `array` not-identical : `array`

`ifeq` compares every element of `a` to the corresponding element of `b`, and returns
the string in the corresponding element in `identical` if they are identical, else it
returns the corresponding element in `not-identical`. It does this for each element.
It returns the results as an array.

Parameters
----------

a
*
An array of test strings.

b
*
An array of test strings.

identical
*********
Array of strings that are returned if two corresponding elements of `a` and `b` are identical.

not-identical
*************
Array of strings that are returned if two corresponding elements of `a` and `b` are not identical.

Examples
--------

1. Basic usage
**********************

.. code-block:: text

   ifeq*
      split "," "foo,bar"
      split "," "foo,baz"
      fill 2 "identical"
      fill 2 "not identical"

   Result:

   ["identical", "not identical"]