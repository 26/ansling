join*
=====

`join*` joins array elements together with a delimiter.

Description
-----------

.. code-block:: text

   join* `string` glue `string array array` values : `string array`

`join` glues every element of every element in `values` together with `glue` as a delimiter.

Parameters
----------

glue
****
The delimiter.

values
******
The arrays that will be joined together with `glue` as a delimiter.

Examples
--------

1. Basic usage
**********************

.. code-block:: text

   join* "-" split* ";" split "," "he;llo,wo;rld"

   Result:

   ["he-llo", "wo-rld"]