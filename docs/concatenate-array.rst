.\*
===

`.*` each element of one array with each element of another array.

Description
-----------

.. code-block:: text

   . `string array` a, `string array` b : `string array`

This command concatenates each element of `a` with each element of `b` resulting in `ab`. It returns
the results as an array.

Parameters
----------

a
*
The array with which `b` will be concatenated.

b
*
The array with which `a` will be concatenated.

Examples
--------

1. Basic usage
**********************

.. code-block:: text

   .* split "," "Foo,Boo" split "," "bar,far"

   Result:

   ["Foobar", "Boofar"]
