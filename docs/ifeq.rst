ifeq
====

`ifeq` compares two input strings, determines whether they are equal and returns one of two strings
based on the result.

Description
-----------

.. code-block:: text

   if `string` a, `string` b, `string` identical, `string` not-identical : `string`

`ifeq` returns the string `identical` if `a` and `b` are identical, else it returns the
string `not-identical`.

Parameters
----------

a
*
The first test string.

b
*
The second test string.

identical
*********
Value returned if `a` and `b` are identical.

not-identical
*************
Value returned if `a` and `b` are different.

Examples
--------

1. Basic usage
**********************

.. code-block:: text

   ifeq "01" "1" "identical" "not identical"

   Result:

   not identical

.. code-block:: text

   ifeq "" " " "identical" "not identical"

   Result:

   not identical

.. code-block:: text

   ifeq " " " " "identical" "not identical"

   Result:

   identical
