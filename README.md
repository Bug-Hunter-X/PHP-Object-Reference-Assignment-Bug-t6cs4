# PHP Object Reference Assignment Bug

This repository demonstrates a common, subtle bug in PHP related to object references. When assigning objects, a new copy isn't created; instead, both variables point to the same object in memory. Modifying one affects the other, potentially leading to unexpected behavior and hard-to-find bugs.

The `bug.php` file shows the erroneous code, and `bugSolution.php` presents the correct approach using cloning for creating a separate copy.

This example highlights the importance of understanding object reference semantics in PHP and using cloning (`clone`) when a true copy is needed.