B - Linebreak
=============

This variable is initialised to a linebreak ("\n"). It does not include a carriage return, and is identical on both
Windows, OS X and Linux. It returns a string.

.. code-block:: text

    join B split ";" "Hello;World!"

    Result:

    Hello
    World!

The above command does quite a lot. First it splits the string `Hello;World!` on the delimiter `;`.
This results in the array `["Hello", "World!"]`. It then joins the elements of that array with the
variable `B` as a delimiter.
