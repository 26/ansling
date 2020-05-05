intval
======

`intval` returns the integer value of the given string.

Description
-----------

.. code-block:: text

   intval `string` string : `int`

`intval` returns the integer value of `string`.

Parameters
----------

string
******

The string being converted to an integer.

Examples
--------

1. Basic usage
**********************

.. code-block:: text

   intval "042"

   Result:

   42

.. code-block:: text

   intval "foobar"

   Result:

   0

.. code-block:: text

   intval ""

   Result:

   0

.. code-block:: text

   intval " "

   Result:

   0
