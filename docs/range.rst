range
=====

`range` creates an array with a range of integers.

Description
-----------

.. code-block:: text

   range `integer` start, `integer` end : `integer array`

This command creates an array with a range of integers beginning at `start` and ending at `end`.

Parameters
----------

start
*****
The first value of the sequence.

end
***
The last value of the sequence.

Examples
--------

1. Basic usage
**********************

.. code-block:: text

   range 0 9

   Result:

   [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]

.. code-block:: text

   range 9 0

   Result:

   [9, 8, 7, 6, 5, 4, 3, 2, 1, 0]
