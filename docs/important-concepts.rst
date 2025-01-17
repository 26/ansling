Important Concepts
==================

Ansling is not a programming language. It is a domain-specific language
for string manipulation. Its syntax differs wildly from what you have seen before.

Expressions
-----------

An Ansling program is one large expression. The result of this expression is returned
to the user. Since Ansling is one expression, it also does have user-defined variables.

Prefix notation
---------------

Lets try entering `"foo" * 3`. It'll be `foofoofoo`, right?

.. code-block:: text

   -- TOO MANY ARGUMENTS --------------------------------------------------------------

   The number of arguments supplied are more than I expected. That's all I know.

   Hint: Check the parameters required for each command on `https://marijn.it/ansling/`.

What went wrong? Ansling does not use infix notation, like most languages. Instead, Ansling uses
prefix notation. This means the operator, in this case `*`, goes before the operands. This
has the mayor benefits of not requiring parenthesis and removing arbitrary precedence from the
operands.

Lets try that problem again:

.. code-block:: text

   * "foo" 3

   Output:

   foofoofoo

Great, that worked as expected.

Arity
-----
The arity of a function is the number of arguments or operands a function takes. In most programming
languages, functions may have a varying arity and doing so requires parenthesis. Ansling instead has
a fixed number of arguments per command, allowing it to do away with parenthesis altogether.