$
=

`$` replaces all occurrences of a search string with the replacement string in a subject.

Description
-----------

.. code-block:: text

   $ `string` search, `string` replace, `string` subject : `string`

This command replaces all occurrences of the string `search` in the string `subject` with `replace` and
returns the result as a `string`. This function is case-sensitive.

Parameters
----------

search
******

The string that should be replaced in `subject`. This is also known as a needle.

replace
*******

The string with which all found occurrences of `search` should be replaced in `subject`.

subject
*******

The string that will be searched.

Examples
--------

1. Basic usage
**********************

.. code-block:: text

   $ "vegetables" "pizza" "Eat your vegetables!"

   Result:

   Eat your pizza!
