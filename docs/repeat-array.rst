\*\*
====

`**` repeats each element of an array a given number of times.

Description
-----------

.. code-block:: text

   ** `array` inputs, `array` multipliers : `array`

This command repeats the first element of `input` the number of times given in the first element
of `multiplier` and does this for each element. It returns each result as an array.

Parameters
----------

inputs
******

Array of strings that will be repeated.

Examples
--------

Array of multipliers that give the number of times each element of `input` should be repeated.

If a multiplier is less than or equal to zero, an empty string is returned.

1. Basic usage
**************

The following example repeats each element in `inputs` three times.

.. code-block:: text

   ** split "," "lorem,ipsum" fillint 2 3

   Result:

   ["loremloremlorem", "ipsumipsumipsum"]

2. Repeat each element an increasing number of times
****************************************************

.. code-block:: text

    ** split "," "lorem,ipsum" range 1 2

    Result:

    ["lorem", "ipsumipsum"]