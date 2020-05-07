if*
===

`if*` evaluates every test string in an array and determines whether or not it is empty.

Description
-----------

.. code-block:: text

   if* `string array` tests, `string array` not-empty, `string array` empty : `string array`

`if*` evaluates each element of `tests` and determines whether it is empty. It returns the
corresponding element of `not-empty` if it is not empty, else it returns the corresponding element
of `empty`. It returns the results as an array. A string is considered empty if it contains only whitespace.

Parameters
----------

tests
*****
The array of test strings.

not-empty
*********
An array of strings that are returned if the corresponding `test` is not empty.

empty
*****
An array of strings that are returned if the corresponding `test` is empty.

Examples
--------

1. Basic usage
**********************

.. code-block:: text

   if*
      split "," "foo,,bar"
      fill 3 "not-empty"
      fill 3 "empty"

   Result:

   ["not-empty", "empty", "not-empty"]
