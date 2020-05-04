\*
==

`*` repeats a string a given number of times.

Description
-----------

.. code-block:: text

   * `string` input, `integer` multiplier : `string`

This command repeats `input` `multiplier` times and returns the result as a `string`.

Parameters
----------

input
*****
The string to be repeated.

multiplier
**********
The number of times the `input` string should be repeated.

If `multiplier` is less than or equal to zero, an empty string is returned.

Examples
--------

1. Basic usage
**********************

.. code-block:: text

   * "foo" 3

   Result:

   foofoofoo
