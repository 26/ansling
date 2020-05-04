Installation
============

Ansling can be installed by downloading the latest Phar (PHP Archive) from `GitHub <https://github.com/26/ansling/releases>`_.

Requirements
------------

Ansling requires at least PHP version 7.2 to be installed, but newer versions are recommended.

Running Ansling
---------------

Navigate to the folder containing the Ansling Phar and type in the following command in your terminal:

.. code-block:: bash

   chmod +x ansling

This will make the Ansling archive executable. You can execute Ansling by typing the following command
(where source.code is a file containing your Ansling code):

.. code-block:: bash

   ./ansling source.code

Optionally, you can specify a file to which the result should be written (by default the result will be
written to ``ansling.out``):

.. code-block:: bash

   ./ansling source.code result


