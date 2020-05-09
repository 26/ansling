join
====

`join` joins array elements together with a delimiter.

Description
-----------

.. code-block:: text

   join `string` glue `string array` values : `string`

`join` glues every element in `values` together with `glue` as a delimiter.

Parameters
----------

glue
****

The delimiter.

values
******

The values that will be joined together with `glue` as a delimiter.

Examples
--------

1. Basic usage
**********************

.. code-block:: text

   join ";" split "," "foo,bar"

   Result:

   foo;bar
