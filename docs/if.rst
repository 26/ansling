if
==

`if` evaluates a test string and determines whether or not it is empty.

Description
-----------

.. code-block:: text

   if `string` test, `string` not-empty, `string` empty : `string`

`if` returns the string `empty` if `test` is empty, else it will return `not-empty`. A string
is considered empty if it contains only whitespace.

Parameters
----------

test
****
The test string.

not-empty
*********
The string returned if the test string is not empty.

empty
*****
The string returned if the test string is empty.

Examples
--------

1. Basic usage
**********************

.. code-block:: text

   if "" "yes" "no"

   Result:

   no

.. code-block:: text

   if "string" "yes" "no"

   Result:

   yes
