$\*
===

`$*` replaces all occurrences of the each element of a search array with each element of a replace array in each element of a subject array.

Description
-----------

.. code-block:: text

   $* `array` searches, `array` replaces, `array` subjects : `array`

This command replaces all occurrences of the first element of `searches` in the first element of `subjects` with
the first element of `replaces`, and does this for all elements in each array. It returns each result as an
array.

Parameters
----------

searches
********

The array of search strings that should be replaced in the `subjects` array.

replaces
********

The array of replacement strings with which all found occurrences of `searches` should be replaced with in `subjects`.

subjects
********

An array of strings to be searched.

Examples
--------

1. Basic usage
**********************

.. code-block:: text

   $* split "," "fruits,vegetables" split "," "pizza,chocolate" split "," "Eat your fruits,Eat your vegetables"

   Result:

   ["Eat your pizza", "Eat your chocolate"]

The above command does quite a lot, so lets dissect it together. First, the interpreter executes the command `split "," "fruits,vegetables"`,
which splits the string `fruits,vegetables` on the delimiter `,`. This gives us an array containing the element `["fruits", "vegetables"]`. Next, it
executes `split "," "pizza,chocolate"`, which gives us `["pizza", "chocolate"]` and it executes `split "," "Eat your fruits,Eat your vegetables"`. This
gives us three arrays which are given to `$*` (this is not actually valid Ansling code):

.. code-block:: text

   $* ["fruits", "vegetables"] ["pizza", "chocolate"] ["Eat your fruits", "Eat your vegetables"]

`$*` then reads the first element of the `searches` array, sees if that element can be found in the first array of the `subjects` array, and replaces it
with the first element of the `replaces` array when applicable.
