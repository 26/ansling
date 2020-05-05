lowerfirst*
===========

`lowerfirst*` converts for each element its first character to lowercase.

Description
-----------

.. code-block:: text

   lowerfirst* `array` values : `array`

`lowerfirst*` converts for each element its first character to lowercase and returns the result
as an array.

Parameters
----------

values
******

The array of strings of which the first character must be converted to lowercase.

Examples
--------

1. Basic usage
**********************

.. code-block:: text

   lowerfirst* split " " "Lorem IPSUM"

   Result:

   ["lorem", "iPSUM"]

.. code-block:: text

   lowerfirst* split " " "Lorem 9PSUM"

   Result:

   ["lorem", "9PSUM"]


